<?php

namespace App\Models;

use App\Http\Controllers\Playlist;
use App\Http\Controllers\PlaylistController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoModel extends Model
{
    use HasFactory;

    protected $table = 'video';
    protected $fillable = ['jdl-video', 'tanggal'];

    public function playlist(){
        return $this->belongsTo(PlaylistController::class,"id_playlist","id");
    }
}
