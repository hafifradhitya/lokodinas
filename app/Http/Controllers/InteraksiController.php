<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\MOdels\PesanModel;
use App\Models\JajakModel;
use App\Models\DownloadModel;
use App\Models\InfoModel;
use App\Models\AgendaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InteraksiController extends Controller
{
    //
    public function tampilagenda()
    {
        $agendas = AgendaModel::OrderBy('id_agenda', 'desc')->paginate(2);
        return view("administrator.modul-interaksi.agenda", compact(['agendas']));
    }

    public function tampilinfo()
    {
        $infos = InfoModel::orderBy('id_sekilas', 'desc')->paginate(4);
        return view("administrator.modul-interaksi.sekilasinfo", compact(['infos']));
    }
    
    public function tambahInfo(Request $request)
{
    $request->validate([
        'info' => 'required|string',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'aktif' => 'required|in:Y,N',
    ]);

    $sekilasInfo = new InfoModel();
    $sekilasInfo->info = $request->info;
    $sekilasInfo->aktif = $request->aktif;
    $sekilasInfo->tgl_posting = now();

    if ($request->hasFile('cover')) {
        $file = $request->file('cover');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('img_playlist'), $filename);
        $sekilasInfo->gambar = $filename;
    }

    $sekilasInfo->save();

    return redirect('administrator.modul-interaksi.sekilasinfo')->with('success', 'Info berhasil ditambahkan');
}

    public function tampildownload()
    {
        $downloads = DownloadModel::orderBy('id_download', 'desc')->paginate(9);
        return view("administrator.modul-interaksi.downloadarea", compact(['downloads']));
    }

    public function tampilpoling()
    {
        $polings = JajakModel::orderBy('id_poling', 'desc')->paginate(6);
        return view("administrator.modul-interaksi.jejakpendapat", compact(['polings']));
    }

    public function tampilpesan()
    {
        $messages = PesanModel::orderBy('id_hubungi', 'desc')->paginate(3);
        return view("administrator.modul-interaksi.pesanmasuk", compact(['messages']));
    }

    public function tampiluser()
    {
        $users = UserModel::orderBy('username', 'desc')->paginate(1);
        return view("administrator.modul-users.manajemenuser", compact(['users']));
    }
}
