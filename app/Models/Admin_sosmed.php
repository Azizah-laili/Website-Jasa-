<?php

namespace App\Models;

use App\Models\Cartdesign;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin_sosmed extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_admin',
        'harga_admin',
        'deskripsi_admin',
    ];

    //one to many transaction to admin  sosmed
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    //one to many cart design to admin sosmed
    public function cartdesigns(){
        return $this->hasMany(Cartdesign::class);
    }
}
