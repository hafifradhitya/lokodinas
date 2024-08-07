<?php

namespace App\Http\Controllers;

use App\Models\BannerHomeModel;
use App\Models\BannerModel;
use App\Models\IklanSidebarModel;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function bannershow() {
        $banes = BannerModel::orderBy('id_banner', 'desc')->get();
        return view("administrator.modul-banner.bannerslider", compact(['banes']));
    }

    public function tampilBannerhome(){
        $banehomes = BannerHomeModel::orderBy('id_iklantengah', 'desc')->paginate(10);
        return view("administrator.modul-banner.bannerhome", compact(['banehomes']));
    }

    public function tampilIklansidebar(){
        $iklansidebars = IklanSidebarModel::paginate(10);
        return view("administrator.modul-banner.iklansidebar", compact(['iklansidebars']));
    }
}
