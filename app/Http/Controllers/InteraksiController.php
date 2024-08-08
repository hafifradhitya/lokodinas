<?php

namespace App\Http\Controllers;

use App\Models\AgendaModel;
use Illuminate\Http\Request;

class InteraksiController extends Controller
{
    //
    public function tampilagenda(){
        $agendas = AgendaModel::OrderBy('id_agenda','desc')->paginate(2);
        return view("administrator.modul-interaksi.agenda", compact(['agendas']));
    }
}
