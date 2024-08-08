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
        return view('administrator.modul-video.tambahplaylistvideo');
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

    public function editPlaylist($id)
    {
        $playlist = PlaylistModel::findOrFail($id);
        return view('administrator.modul-video.editplaylistvideo', compact('playlist'));
    }

    public function updatePlaylist(Request $request, $id)
    {
        $validatedData = $request->validate([
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'jdl_playlist' => 'required|string|max:255',
            'aktif' => 'required|in:Y,N',
        ]);

        $playlist = PlaylistModel::findOrFail($id);
        $playlist->jdl_playlist = $validatedData['jdl_playlist'];
        $playlist->playlist_seo = Str::slug($validatedData['jdl_playlist']); // Tambahkan ini untuk mengupdate playlist_seo
        $playlist->aktif = $validatedData['aktif'];

        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img_playlist'), $filename);
            $playlist->gbr_playlist = $filename;
        }

        $playlist->save();

        return redirect('administrator/modul-video/playlistvideo')->with('success', 'Playlist berhasil diperbarui');
    }

    public function hapusPlaylist($id_playlist)
    {
        $playlist = PlaylistModel::where('id_playlist', $id_playlist)->firstOrFail();
        $playlist->delete();

        return redirect('administrator/modul-video/playlistvideo/')->with('success', 'Playlist berhasil dihapus');
    }

}
