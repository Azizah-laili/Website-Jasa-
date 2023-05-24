<?php

namespace App\Models;

use App\Models\Transaction;
use App\Models\Cartwebsite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Website extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_website',
        'harga_website',
        'deskripsi_website',
    ];

    //one to many transaction to website
   

    //one to many cart website to website
    public function cartwebsites(){
        return $this->hasMany(Cartwebsite::class);
    }
}
