<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class logoController extends Controller
{
    //1 MENAMPILKAN 1 LOGO
    public function create_logo()
    {
        return view('pages.dashboard.logo.create_logo');
    }

    //1 CREATE LOGO
    public function store_logo(Request $request){
        $request->validate([
            'name_logo'=>'required',
            'harga_logo'=>'required',
            'deskripsi_logo'=>'required'
        ]);
        //create atau insert data
        Logo::create([
            'name_logo'=>$request->name_logo,
            'harga_logo'=>$request->harga_logo,
            'deskripsi_logo'=>$request->deskripsi_logo
        ]);

        return Redirect::route('index_logo');
    }

    //2 MENAMPILKAN SEMUA LOGO YANG ADA
    public function index_logo()
    {
       
        $logos = Logo::latest()->get();
        return view('pages.dashboard.logo.index_logo',compact('logos'));
    }

    //3 MENAMPILKAN SATU LOGO
    public function edit_logo(Logo $logo)
    {
        return view('pages.dashboard.logo.update_logo', compact('logo'));
    }

    //3 UPDATE DATA LOGO
    public function update_logo(Logo $logo, Request $request){
        $request->validate([
            'name_logo'=>'required',
            'harga_logo'=>'required',
            'deskripsi_logo'=>'required'
        ]);
        //create atau insert data
        $logo->update([
            'name_logo'=>$request->name_logo,
            'harga_logo'=>$request->harga_logo,
            'deskripsi_logo'=>$request->deskripsi_logo
        ]);

        return Redirect::route('index_logo',$logo);
    }

    //4 DELETE LOGO
    public function delete_logo(Logo $logo)
    {
        $logo->delete();
        return redirect()->back();
    }
}
