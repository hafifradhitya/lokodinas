<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerHomeModel extends Model
{
    use HasFactory;
    protected $table = 'iklantengah';
    protected $fillable = ['judul','url','tgl_posting'];
}
