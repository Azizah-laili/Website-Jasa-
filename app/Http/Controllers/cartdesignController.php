<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Payement;
use App\Models\Cartdesign;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class cartdesignController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //1 MENAMPILKAN 1 CART CERTIFICATE
    public function show_certificate(Certificate $certificate)
    {
        return view('pages.landing.semuacart.cart_certificate', compact('certificate'));
    }

    //1 MENYIMPAN CART LOGO ATAU CREATE
    public function add_to_certificatecart(Certificate $certificate,Request $request)
    {
        $user_id = Auth::id();
        $certificate_id = $certificate->id;

        $request->validate([
            'deskripsi_desain'=>'required'
        ]);
        
        Cartdesign::create([
        'user_id'=> $user_id,
        'certificate_id'=> $certificate_id,
        'deskripsi_desain'=>$request->deskripsi_desain,
        ]);
       return Redirect::route('all_cart');
       
    }

    //1 MENAMPILKAN 1 CART WEBSITE
    public function show_logo(Logo $logo)
    {
        return view('pages.landing.semuacart.cart_logo', compact('logo'));
    }

    //1 MENYIMPAN CART LOGO ATAU CREATE
    public function add_to_logocart(Logo $logo,Request $request)
    {
        $user_id = Auth::id();
        $logo_id = $logo->id;

        $request->validate([
            'deskripsi_desain'=>'required'
        ]);
        
        Cartdesign::create([
        'user_id'=> $user_id,
        'logo_id'=> $logo_id,
        'deskripsi_desain'=>$request->deskripsi_desain,
        ]);
       return Redirect::route('all_cart');
       
    }

    

    //3 MENAMPILKAN 1 CART DESIGN
    public function edit_cartdesign(Cartdesign $cartdesign)
    {
        $logo=$cartdesign->logo;
        $certificate=$cartdesign->certificate;
        return view('pages.landing.semuacart.updatecartdesign', compact(['cartdesign','logo','certificate']));
    }

    //3 MENAMPILKAN 1 CART WEBSITE KE PAYMENT CHECKOUT
    public function checkout_cartdesign(Logo $logo, Cartdesign $cartdesign)
    {
        $payements = Payement::all();
        return view('pages.landing.showorder', compact(['cartdesign','payements']));
    }

    //3 UPDATE CART WEBSITE
    public function update_cartdesign(Cartdesign $cartdesign, Request $request){

        $request->validate([
            'deskripsi_desain'=>'required'
        ]);
        $cartdesign->update([
            'deskripsi_desain'=>$request->deskripsi_desain,
        ]);

        return Redirect::route('all_cart',$cartdesign);
    }

    //4 DELETE CART DESGN
    public function delete_cartdesign(Cartdesign $cartdesign)
    {
        $cartdesign->delete();
        return redirect()->back();
    }
}
