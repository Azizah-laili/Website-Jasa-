<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_artikel',
        'foto_artikel',
        'deskripsi_artikel',
    ];
}
