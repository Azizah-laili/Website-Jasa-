<?php

namespace App\Http\Controllers;

use App\Models\Hosting;
use App\Models\Carthosting;
use Illuminate\Http\Request;
use App\Models\Durasi_hosting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class carthostingController extends Controller
{
    //1 MENAMPILKAN 1 CART WEBSITE
    public function show_hosting(Hosting $hosting)
    {
        return view('pages.landing.semuacart.cart_hosting', compact('hosting'));
    }

    //1 MENYIMPAN CART hosting ATAU CREATE
    public function add_to_carthosting(Hosting $hosting,Request $request)
    {
        $user_id = Auth::id();
        $hosting_id = $hosting->id;

        $request->validate([
            'note'=>'required'
        ]);
        
        Carthosting::create([
        'user_id'=> $user_id,
        'hosting_id'=> $hosting_id,
        'note'=>$request->note,
        ]);
       return Redirect::route('all_cart');
       
    }

    //3 MENAMPILKAN 1 CART WEBSITE
    public function edit_carthosting(Hosting $hosting, Carthosting $carthosting)
    {
        return view('pages.landing.semuacart.updatecart_hosting', compact('carthosting'));
    }

  
    //3 UPDATE CART hosting
    public function update_carthosting(Carthosting $carthosting, Request $request){

        $request->validate([
            'note'=>'required'
        ]);
        $carthosting->update([
        'note'=>$request->note,
        ]);

        return Redirect::route('all_cart',$carthosting);
    }

    //4 DELETE CART hosting
    public function delete_carthosting(Carthosting $carthosting)
    {
        $carthosting->delete();
        return redirect()->back();
    }
}
