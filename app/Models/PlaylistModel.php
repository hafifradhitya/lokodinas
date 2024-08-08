<?php

namespace App\Models;

use App\Http\Controllers\VideoController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class PlaylistModel extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'id_playlist';
    protected $table = 'playlist';
    protected $fillable = ['jdl_playlist', 'gbr_playlist', 'aktif', 'username'];

    public function video(){
        return $this->hasMany(VideoController::class,"id_playlist","id");
    }
}
