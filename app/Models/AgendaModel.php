<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaModel extends Model
{
    use HasFactory;
    protected $table = 'agenda';
    protected $fillable = ['tema','tgl_mulai','tgl_selesai','jam'];
}
