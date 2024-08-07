<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IklanSidebarModel extends Model
{
    use HasFactory;
    protected $table = 'pasangiklan';
    protected $fillable = ['judul','url','tgl_posting'];
}
