<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function tampilKategoriBerita(){
        $categories = KategoriModel::paginate(10);
        return view("administrator.modul-berita.kategoriberita", compact(['categories']));
    }
}
