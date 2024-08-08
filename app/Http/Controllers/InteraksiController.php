<?php

namespace App\Http\Controllers;

use App\Models\DownloadModel;
use App\Models\InfoModel;
use App\Models\AgendaModel;
use Illuminate\Http\Request;

class InteraksiController extends Controller
{
    //
    public function tampilagenda(){
        $agendas = AgendaModel::OrderBy('id_agenda','desc')->paginate(2);
        return view("administrator.modul-interaksi.agenda", compact(['agendas']));
    }

    public function tampilinfo(){
        $infos = InfoModel::orderBy('id_sekilas','desc')->paginate(4);
        return view("administrator.modul-interaksi.sekilasinfo", compact(['infos']));
    }

    public function tampildownload(){
        $downloads = DownloadModel::orderBy('id_download', 'desc')->paginate(9);
        return view("administrator.modul-interaksi.downloadarea", compact(['downloads']));
    }
}
