<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=[
        'firsname_contact',
        'lastname_contact',
        'phone_contact',
        'email_contact',
        'subject_contact',
        'message_contact',
    ];
}
