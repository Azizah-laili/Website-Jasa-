<?php

namespace App\Http\Controllers;

use App\Models\Carthosting;
use App\Models\Website;
use App\Models\Payement;
use App\Models\Cartdesign;
use App\Models\Cartwebsite;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class cartwebsiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    


    


    //1 MENAMPILKAN 1 CART WEBSITE
    public function show_website(Website $website)
    {
        return view('pages.landing.semuacart.cart_website', compact('website'));
    }

    //1 MENYIMPAN CART WEBSITE ATAU CREATE
    public function add_to_cart(Website $website,Request $request)
    {
        $user_id = Auth::id();
        $website_id = $website->id;

        $request->validate([
            'nama_website'=>'required',
            'refrensi_website'=>'required',
            'bidang_bisnis'=>'required'
        ]);
        
        Cartwebsite::create([
        'user_id'=> $user_id,
        'website_id'=> $website_id,
        'nama_website'=>$request->nama_website,
        'refrensi_website'=>$request->refrensi_website,
        'bidang_bisnis'=>$request->bidang_bisnis,
        ]);
       return Redirect::route('all_cart');
       
    }

    //2 MENAMPILKAN SEMUA CART
    public function all_cart()
    {
        $user_id = Auth::id();
        $cartwebsites = Cartwebsite::where('user_id', $user_id)->get();
        $cartdesigns = Cartdesign::where('user_id', $user_id)->get();
        $carthostings = Carthosting::where('user_id', $user_id)->get();
        return view('pages.landing.semuacart.allcart', compact(['cartwebsites','cartdesigns','carthostings']));
    }
    
    //3 MENAMPILKAN 1 CART WEBSITE
    public function edit_cartwebsite(Website $website, Cartwebsite $cartwebsite)
    {
        return view('pages.landing.semuacart.updatecart_website', compact('cartwebsite'));
    }

  
    //3 UPDATE CART WEBSITE
    public function update_cartwebsite(Cartwebsite $cartwebsite, Request $request){

        $request->validate([
            'nama_website'=>'required',
            'refrensi_website'=>'required',
            'bidang_bisnis'=>'required'
        ]);
        $cartwebsite->update([
            'nama_website'=>$request->nama_website,
            'refrensi_website'=>$request->refrensi_website,
            'bidang_bisnis'=>$request->bidang_bisnis,
        ]);

        return Redirect::route('all_cart',$cartwebsite);
    }

    //4 DELETE CART WEBSITE
    public function delete_cartwebsite(Cartwebsite $cartwebsite)
    {
        $cartwebsite->delete();
        return redirect()->back();
    }
}
