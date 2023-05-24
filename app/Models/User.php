<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Order;
use App\Models\Cartdesign;
use App\Models\Cartdomain;
use App\Models\Carthosting;
use App\Models\Cartwebsite;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'company',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_admin'=>'boolean',
    ];
    //one to many user to all cart
    public function cartwebsites(){
        return $this->hasMany(Cartwebsite::class);
    }
    public function cartdomains(){
        return $this->hasMany(Cartdomain::class);
    }
    public function cartdesigns(){
        return $this->hasMany(Cartdesign::class);
    }
    public function carthostings(){
        return $this->hasMany(Carthosting::class);
    }

    //one to many user to transaction
    public function transactions(){
        return $this->hasMany(Transaction::class);
    } 
}
