<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function dashboard(){
        return view("administrator.dashboard");
    }

    public function menuwebsite(){
        return view('administrator.menu-utama.menuwebsite');
    }

    public function halamanbaru(){
        return view('administrator.menu-utama.halamanbaru');
    }

    public function identitaswebsite(){
        return view('administrator.menu-utama.identitaswebsite');
    }

    public function bannerhome(){
        return view('administrator.modul-banner.bannerhome');
    }

    public function bannerslider(){
        return view('administrator.modul-banner.bannerslider');
    }

    public function iklansidebar(){
        return view('administrator.modul-banner.iklansidebar');
    }

    public function berita(){
        return view('administrator.modul-berita.berita');
    }

    public function kategoriberita(){
        return view('administrator.modul-berita.kategoriberita');
    }

    public function tagberita(){
        return view('administrator.modul-berita.tagberita');
    }

    public function agenda(){
        return view('administrator.modul-interaksi.agenda');
    }

    public function alamatkontak(){
        return view('administrator.modul-interaksi.alamatkontak');
    }

    public function downloadarea(){
        return view('administrator.modul-interaksi.downloadarea');
    }

    public function jejakpendapat(){
        return view('administrator.modul-interaksi.jejakpendapat');
    }

    public function pesanmasuk(){
        return view('administrator.modul-interaksi.pesanmasuk');
    }

    public function sekilasinfo(){
        return view('administrator.modul-interaksi.sekilasinfo');
    }

    public function manajemenuser(){
        return view('administrator.modul-users.manajemenuser');
    }

    public function manajemenmodul(){
        return view('administrator.modul-users.manajemenmodul');
    }

    public function playlistvideo(){
        return view('administrator.modul-video.playlistvideo');
    }

    public function tagvideo(){
        return view('administrator.modul-video.tagvideo');
    }

    public function video(){
        return view('administrator.modul-video.video');
    }

    public function backgroundwebsite(){
        return view('administrator.modul-web.backgroundwebsite');
    }

    public function logowebsite(){
        return view('administrator.modul-web.logowebsite');
    }

    public function templatewebsite(){
        return view('administrator.modul-web.templatewebsite');
    }

    public function tambahsekilasinfo(){
        return view('administrator.modul-interaksi.tambahsekilasinfo');
    }
}
