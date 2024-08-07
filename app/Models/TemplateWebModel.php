<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateWebModel extends Model
{
    use HasFactory;

    protected $table = 'berita';
    protected $fillable = ['nama_menu', 'link', 'aktif', 'position', 'urutan']; // Kolom yang dapat diisi
}
