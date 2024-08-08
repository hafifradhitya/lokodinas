<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\InteraksiController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('administrator.layout');
});

Route::get('administrator/dashboard', [AppController::class, "dashboard"]);

Route::get('administrator/menu-utama/menuwebsite', [AppController::class, "menuwebsite"]);
Route::get("administrator/menu-utama/menuwebsite", [MainController::class,"tampilMenuWebsite"]);

Route::get('administrator/menu-utama/halamanbaru', [AppController::class, "halamanbaru"]);
Route::get("administrator/menu-utama/halamanbaru", [MainController::class,"tampilHalaman"]);

Route::get('administrator/menu-utama/identitaswebsite', [AppController::class, "identitaswebsite"]);
Route::get('administrator/menu-utama/identitaswebsite', [MainController::class, "tampilIdentitas"]);

Route::get('administrator/modul-banner/bannerhome', [AppController::class, "bannerhome"]);
Route::get('administrator/modul-banner/bannerhome', [BannerController::class, "tampilBannerhome"]);

Route::get('administrator/modul-banner/bannerslider', [AppController::class, "bannerslider"]);
Route::get("administrator/modul-banner/bannerslider", [BannerController::class,"bannershow"]);

Route::get('administrator/modul-banner/iklansidebar', [AppController::class, "iklansidebar"]);
Route::get("administrator/modul-banner/iklansidebar", [BannerController::class,"tampilIklansidebar"]);

Route::get('administrator/modul-berita/berita', [AppController::class, "berita"]);
Route::get("administrator/modul-berita/berita", [BeritaController::class,"tampilBerita"]);

Route::get('administrator/modul-berita/kategoriberita', [AppController::class, "kategoriberita"]);
Route::get("administrator/modul-berita/kategoriberita", [KategoriController::class,"tampilKategoriBerita"]);

Route::get('administrator/modul-berita/tagberita', [AppController::class, "tagberita"]);
Route::get('administrator/modul-berita/tagberita', [beritaController::class, "tagberita"]);

Route::get('administrator/modul-interaksi/agenda', [AppController::class, "agenda"]);
Route::get('administrator/modul-interaksi/agenda', [InteraksiController::class, "tampilagenda"]);

Route::get('administrator/modul-interaksi/alamatkontak', [AppController::class, "alamatkontak"]);

Route::get('administrator/modul-interaksi/downloadarea', [AppController::class, "downloadarea"]);
Route::get('administrator/modul-interaksi/downloadarea', [InteraksiController::class, "tampildownload"]);

Route::get('administrator/modul-interaksi/jejakpendapat', [AppController::class, "jejakpendapat"]);
Route::get('administrator/modul-interaksi/pesanmasuk', [AppController::class, "pesanmasuk"]);

Route::get('administrator/modul-interaksi/sekilasinfo', [AppController::class, "sekilasinfo"]);
Route::get('administrator/modul-interaksi/sekilasinfo', [interaksiController::class, "tampilinfo"]);

Route::get('administrator/modul-users/manajemenuser', [AppController::class, "manajemenuser"]);
Route::get('administrator/modul-users/manajemenmodul', [AppController::class, "manajemenmodul"]);

Route::get('administrator/modul-video/playlistvideo', [AppController::class, "playlistvideo"]);
Route::get("administrator/modul-video/playlistvideo", [PlaylistController::class,"tampilPlaylist"]);

Route::get('administrator/modul-video/tagvideo', [AppController::class, "tagvideo"]);
Route::get("administrator/modul-video/tagvideo", [VideoController::class,"tampilTagVideo"]);

Route::get('administrator/modul-video/video', [AppController::class, "video"]);
Route::get("administrator/modul-video/video", [VideoController::class,"tampilVideo"]);

Route::get('administrator/modul-web/backgroundwebsite', [AppController::class, "backgroundwebsite"]);
Route::get('administrator/modul-web/logowebsite', [AppController::class, "logowebsite"]);
Route::get('administrator/modul-web/templatewebsite', [AppController::class, "templatewebsite"]);



