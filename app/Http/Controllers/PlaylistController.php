<?php

namespace App\Http\Controllers;

use App\Models\PlaylistModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlaylistController extends Controller
{
    //
    public function tampilPlaylist(){
        $playlists = PlaylistModel::paginate(1);
        return view("administrator.modul-video.playlistvideo", compact(['playlists']));
    }

    public function tambahPlaylist(Request $request){
        $jdl_playlist = $request->jdl_playlist;

        $cover = $request->file("cover");
        $coverName = $jdl_playlist."_".Str::random(25).".".$cover->getClientOriginalExtension();
        $cover->move("./covers/",$coverName);

        PlaylistModel::create([
            "cover" => $coverName,
            "jdl_playlist" => $jdl_playlist,
            "aktif" => $request->aktif
        ]);

        // session()->flash('pesan', 'Data Berhasil disimpan');
        return redirect("platlistvideo");
    }
}
