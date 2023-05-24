<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Cartdomain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class cartdomainController extends Controller
{
     //1 MENAMPILKAN 1 CART domain
     public function show_domain(Domain $domain)
     {
       return dd(Domain::all());
         return view('pages.landing.semuacart.cart_domain', compact('domain'));
     }
 
     //1 MENYIMPAN CART domain ATAU CREATE
     public function add_to_cart(Domain $domain,Request $request)
     {
         $user_id = Auth::id();
         $domain_id = $domain->id;
 
         $request->validate([
             'nama_domain'=>'required',
             'refrensi_domain'=>'required',
             'bidang_bisnis'=>'required'
         ]);
         
         Cartdomain::create([
         'user_id'=> $user_id,
         'domain_id'=> $domain_id,
         'nama_domain'=>$request->nama_domain,
         'refrensi_domain'=>$request->refrensi_domain,
         'bidang_bisnis'=>$request->bidang_bisnis,
         ]);
        return Redirect::route('all_cart');
        
     }
}
