<?php

namespace App\Models;

use App\Models\Cartdomain;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Domain extends Model
{
    use HasFactory;
    protected $fillable=[
        'tld',
        'year',
        'register',
        'transfer',
        'renew', 
    ];

    //one to many transaction to domain
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    //one to many cart domain to domain
    public function cartdomains(){
        return $this->hasMany(Cartdomain::class);
    }
}
