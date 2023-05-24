<?php

namespace App\Models;

use App\Models\Logo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cartdesign extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'logo_id',
        'certificate_id',
        'design_sosmed_id',
        'admin_sosmed_id',
        'deskripsi_desain',
     ];
 
     //one to many user to cart design
     public function user(){
         return $this->belongsTo(User::class);
 }
 
 public function transactions(){
     return $this->hasMany(Transaction::class);
 }
 
     //one to many cart to all product
     public function logo(){
         return $this->belongsTo(Logo::class);
     }
     public function certificate(){
         return $this->belongsTo(Certificate::class);
     }
     public function design_sosmed(){
         return $this->belongsTo(Design_sosmed::class);
     }
     public function admin_sosmed(){
         return $this->belongsTo(Admin_sosmed::class);
     }
}
