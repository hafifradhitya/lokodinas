<?php

namespace App\Http\Controllers;

use App\Models\HalamanstatisModel;
use App\Models\IdentitasModel;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    //
    public function tampilHalaman() {
        $pages = HalamanstatisModel::all();
        return view("administrator.menu-utama.halamanbaru", compact(['pages']));
    }

    public function show() {
        $records = IdentitasModel::all();
        return view("administrator.menu-utama.identitaswebsite", compact(['records']));
    }
}
