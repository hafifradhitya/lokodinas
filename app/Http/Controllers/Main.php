<?php

namespace App\Http\Controllers;

use App\Models\MenuWebsiteModel;
use Illuminate\Http\Request;

class Main extends Controller
{
    //
    public function tampilMenuWebsite(){
        $menuwebs = MenuWebsiteModel::paginate(10);
        return view("administrator.menu-utama.menuwebsite", compact(['menuwebs']));
    }
}
