<?php

namespace App\Http\Controllers;

use App\Models\Payement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PayementController extends Controller
{

    //1 TAMPILKAN SEMUA PAYMENT DASHBOARD
    public function index_payement()
    {
        $payements = Payement::all();
        return view('pages.dashboard.payment.index_payment',compact('payements'));
    }

    // 2 TAMPILKAN SATU PAYMENT
    public function create_payement()
    {
        return view('pages.dashboard.payment.create_payment');
    }

    //2 SIMPAN PAYMENT
    public function store_payement(Request $request){
        $request->validate([
            'name_bank'=>'required',
            'number'=>'required'
        ]);
        //create atau insert data
        Payement::create([
            'name_bank'=>$request->name_bank,
            'number'=>$request->number
        ]);

        return Redirect::route('index_payement');
    }

    //3 TAMPILKAN SATU PAYMENT
    public function edit_payement(Payement $payement)
    {
        return view('pages.dashboard.payment.update_payment', compact('payement'));
    }

    //3 UPDATE PAYMENT
    public function update_payement(Payement $payement, Request $request){
        $request->validate([
            'name_bank'=>'required',
            'number'=>'required'
        ]);
        $payement->update([
            'name_bank'=>$request->name_bank,
            'number'=>$request->number
        ]);

        return Redirect::route('index_payement',$payement);
    }

    // 4 DELETE PAYMENT
    public function delete_payement(Payement $payement)
    {
        $payement->delete();
        return redirect()->back();
    }
}
