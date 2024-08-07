<?php

namespace App\Http\Controllers;

use App\Models\TagModel;
use App\Models\BeritaModel;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    //
    public function tampilBerita() {
        $news = BeritaModel::paginate(10);
        return view("administrator.modul-berita.berita", compact(['news']));
    }

    public function tagberita() {
        $rows = TagModel::paginate(10);
        return view("administrator.modul-berita.tagberita", compact(['rows']));
    }
}
