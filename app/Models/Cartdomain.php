<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartdomain extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',       
        'domain_id',
        'name_domain',
        'nameserver_1',
        'nameserver_2',
        'nameserver_3',
        'nameserver_4',
        'nameserver_5',
     ];
 
     //one to many user to cart design
     public function user(){
         return $this->belongsTo(User::class);
 }
 
 public function transactions(){
    return $this->hasMany(Transaction::class);
}
 
     //one to many cart to domain
     
    public function domain(){
        return $this->belongsTo(Domain::class);
    }
}
