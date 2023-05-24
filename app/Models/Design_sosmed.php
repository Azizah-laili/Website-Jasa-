<?php

namespace App\Models;

use App\Models\Cartdesign;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Design_sosmed extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_design',
        'harga_design',
        'deskripsi_design',
        
    ];

    //one to many transaction to design sosmed
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    //one to many cart design to design sosmed
    public function cartdesigns(){
        return $this->hasMany(Cartdesign::class);
    }
}
