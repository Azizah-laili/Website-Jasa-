<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
     //1 TAMPILKAN SEMUA PAYMENT DASHBOARD
     public function index_dashboard()
     {
        $contacts = Contact::all();
         return view('pages.dashboard.dashboard',compact('contacts'));
     }
}
