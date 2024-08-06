<?php

namespace App\Http\Controllers;

use App\Models\halamanstatis;
use App\Models\Identitas;
use Illuminate\Http\Request;

class Halaman extends Controller
{
    //
    public function tampil() {
        $pages = halamanstatis::all();
        return view("administrator.menu-utama.halamanbaru", compact(['pages']));
    }

    public function show() {
        $records = identitas::all();
        return view("administrator.menu-utama.identitaswebsite", compact(['records']));
    }
}
