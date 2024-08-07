<?php

namespace App\Http\Controllers;

use App\Models\HalamanstatisModel;
use App\Models\IdentitasModel;
use App\Models\MenuWebsiteModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function tampilHalaman() {
        $pages = HalamanstatisModel::all();
        return view("administrator.menu-utama.halamanbaru", compact(['pages']));
    }

    public function tampilMenuWebsite(){
        $menuwebs = MenuWebsiteModel::paginate(10);
        return view("administrator.menu-utama.menuwebsite", compact(['menuwebs']));
    }

    public function tampilIdentitas() {
        $records = IdentitasModel::all();
        return view("administrator.menu-utama.identitaswebsite", compact(['records']));
    }
}
