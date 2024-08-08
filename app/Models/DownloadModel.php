<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DownloadModel extends Model
{
    use HasFactory;
    protected $table = 'download';
    protected $fillable = ['judul','nama_file','hits','tgl_posting'];
}
