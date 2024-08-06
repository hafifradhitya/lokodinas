<?php

namespace App\Http\Controllers;

use App\Models\BeritaModel;
use Illuminate\Http\Request;

class Berita extends Controller
{
    //
    public function tampilBerita() {
        $news = BeritaModel::paginate(10);
        return view("administrator.modul-berita.berita", compact(['news']));
    }
}
