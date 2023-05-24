<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Domain;
use App\Models\Hosting;
use App\Models\Website;
use App\Models\Cartwebsite;
use App\Models\Certificate;
use App\Models\Admin_sosmed;
use App\Models\Design_sosmed;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    
    //one to many user ro order
    public function user(){
        return $this->belongsTo(User::class);
    }
    //one to many order to payement
     
   public function payement(){
    return $this->belongsTo(Payement::class);
    }
    
}
