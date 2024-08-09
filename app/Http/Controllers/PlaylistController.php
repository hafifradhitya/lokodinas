<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\PlaylistModel;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    //
    public function tampilPlaylist(){
        $playlists = PlaylistModel::paginate(10);
        return view("administrator.modul-video.playlistvideo", compact(['playlists']));
    }

    public function tampilTambahplaylist()
    {
        return view('administrator.modul-video.Action.tambahplaylistvideo');
    }

    public function tambahPlaylist(Request $request)
    {
        $validatedData = $request->validate([
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'jdl_playlist' => 'required|string|max:255',
            'aktif' => 'required|in:Y,N',
        ]);

        $playlist = new PlaylistModel();
        $playlist->jdl_playlist = $validatedData['jdl_playlist'];
        $playlist->playlist_seo = Str::slug($validatedData['jdl_playlist']); // Tambahkan ini untuk mengisi playlist_seo
        $playlist->aktif = $validatedData['aktif'];
        $playlist->username = auth()->user()->username ?? 'admin';

        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img_playlist'), $filename);
            $playlist->gbr_playlist = $filename;
        }

        $playlist->save();

        return redirect('administrator/modul-video/playlistvideo')->with('success', 'Playlist berhasil ditambahkan');
    }
    public function tampilEditplaylist($id_playlist)
    {
        $playlist = PlaylistModel::where('id_playlist', $id_playlist)->firstOrFail();
        return view('administrator.modul-video.Action.editplaylistvideo', compact('playlist'));
    }

    public function editPlaylist(Request $request)
    {
        $playlist = PlaylistModel::find($request->id_playlist);
        $jdl_playlist = $request->jdl_playlist;

        if ($playlist) {
            $playlist->jdl_playlist = $jdl_playlist;
        } else {
            // Tangani kasus ketika $playlist adalah null
            return redirect()->back()->with('error', 'Playlist tidak ditemukan');
        }
        // $playlist->playlist_seo = $request->playlist_seo;
        $playlist->aktif = $request->aktif;
        // $playlist->username = $request->username;

        // if($request->hasFile("cover")){
        //     $gbr_playlist = $request->file("cover");
        //     $gbr_playlistName = $jdl_playlist."_".Str::random(25).".".$gbr_playlist->getClientOriginalExtension();
        //     $gbr_playlist->move("./img_playlist/",$gbr_playlistName);

        //     $playlist->gbr_playlist = $gbr_playlistName;
        // }

        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img_playlist'), $filename);
            $playlist->gbr_playlist = $filename;
        }

        $playlist->save();

        return redirect("administrator/modul-video/playlistvideo/")->with('success', 'Playlist berhasil diperbarui');
    }


    public function hapusPlaylist($id_playlist)
    {
        $playlist = PlaylistModel::where('id_playlist', $id_playlist)->firstOrFail();
        $playlist->delete();

        return redirect('administrator/modul-video/playlistvideo/')->with('success', 'Playlist berhasil dihapus');
    }

}
