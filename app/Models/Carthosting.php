<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carthosting extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'hosting_id',
        'note',
     ];

    //one to many user to cart hosting
    public function user(){
        return $this->belongsTo(User::class);
}


    //one to many cart to hosting
    
   public function hosting(){
       return $this->belongsTo(Hosting::class);
   }
   public function transactions(){
    return $this->hasMany(Transaction::class);
}
   //one to many cart hosting to durasi hosting
     
   public function durasi_hostings(){
    return $this->belongsTo(Durasi_hosting::class);
}
}
