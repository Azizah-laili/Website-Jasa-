<?php

namespace App\Models;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cartwebsite extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'website_id',
        'nama_website',
        'refrensi_website',
        'bidang_bisnis',
     ];
     //one to many user to cart website
    public function user(){
        return $this->belongsTo(User::class);
}


    //one to many cart to website
    
   public function website(){
       return $this->belongsTo(Website::class);
   }

    public function trx () {
      $trx = Transaction::firstWhere([
        'product_id'=>$this->id,
        'product_name'=>'cartwebsite',
      ]);
      return $trx;
    }
}
