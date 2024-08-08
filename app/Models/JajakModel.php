<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JajakModel extends Model
{
    use HasFactory;
    protected $table = 'poling';
    protected $fillable = ['pilihan','status','rating','aktif'];
}
