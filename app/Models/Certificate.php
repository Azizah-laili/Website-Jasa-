<?php

namespace App\Models;

use App\Models\Cartdesign;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Certificate extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_certificates',
        'harga_certificates',
        'deskripsi_certificates',
        
    ];

    //one to many transaction to certificates
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    //one to many cart design to certificates
    public function cartdesigns(){
        return $this->hasMany(Cartdesign::class);
    }
}
