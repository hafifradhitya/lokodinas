<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagVideoModel extends Model
{
    use HasFactory;

    protected $table = 'tagvid';
    protected $fillable = ['nama_tag'];
}
