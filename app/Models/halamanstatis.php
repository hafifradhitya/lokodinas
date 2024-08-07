<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class halamanstatis extends Model
{
    use HasFactory;

    protected $table = 'halamanstatis';
    protected $fillable = ['judul', 'isi_halaman', 'tgl_posting']; // Kolom yang dapat diisi
}
