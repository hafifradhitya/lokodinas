<?php

namespace App\Models;

use App\Http\Controllers\Video;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistModel extends Model
{
    use HasFactory;

    protected $table = 'playlist';
    protected $fillable = ['jdl_playlist', 'gbr_playlist'];

    public function video(){
        return $this->hasMany(Video::class,"id_playlist","id");
    }
}
