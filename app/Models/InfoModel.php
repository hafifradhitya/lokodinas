<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoModel extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $primaryKey = 'id_sekilas';
    protected $table = 'sekilasinfo';
    protected $fillable = ['gambar','info','aktif','tgl_posting'];
}
