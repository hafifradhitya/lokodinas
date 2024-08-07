<?php

namespace App\Http\Controllers;
use App\Models\banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function bannershow() {
        $banes = banner::all();
        return view("administrator.modul-banner.bannerslider", compact(['banes']));
    }
}
