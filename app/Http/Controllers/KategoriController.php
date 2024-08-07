<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function tampilKategoriBerita(){
        $category = KategoriModel::paginate(10);
        return view("administrator.modul-berita.kategoriberita", compact(['category']));
    }
}
