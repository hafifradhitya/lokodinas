<?php

namespace App\Http\Controllers;

use App\Models\PlaylistModel;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    //
    public function tampilPlaylist(){
        $playlists = PlaylistModel::paginate(10);
        return view("administrator.modul-video.playlistvideo", compact(['playlists']));
    }
}
