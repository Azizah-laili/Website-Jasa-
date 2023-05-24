<?php

namespace App\Models;

use App\Models\Cartdesign;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Logo extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_logo',
        'harga_logo',
        'deskripsi_logo',
        
    ];

    //one to many transaction to logo sosmed
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    //one to many cart design to logo
    public function cartdesigns(){
        return $this->hasMany(Cartdesign::class);
    }
}
