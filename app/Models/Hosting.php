<?php

namespace App\Models;

use App\Models\Transaction;
use App\Models\Carthosting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hosting extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_hosting',
        'harga_hosting',
        'deskripsi_hosting',
    ];

    //one to many transaction to hosting
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    //one to many cart hosting to hosting
    public function carthostings(){
        return $this->hasMany(Carthosting::class);
    }
}
