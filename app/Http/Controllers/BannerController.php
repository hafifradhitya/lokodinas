<?php

namespace App\Http\Controllers;
use App\Models\BannerModel;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function bannershow() {
        $banes = BannerModel::orderBy('id_banner', 'desc')->get();
        return view("administrator.modul-banner.bannerslider", compact(['banes']));
    }
}
