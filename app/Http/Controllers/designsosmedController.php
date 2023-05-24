<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Design_sosmed;
use Illuminate\Support\Facades\Redirect;

class designsosmedController extends Controller
{
    //1 MENAMPILKAN 1 LOGO
    public function create_design()
    {
        return view('pages.dashboard.design_sosmed.create_design');
    }

    //1 CREATE ADMIN SOSMED
    public function store_design(Request $request){
        $request->validate([
            'name_design'=>'required',
            'harga_design'=>'required',
            'deskripsi_design'=>'required'
        ]);
        //create atau insert data
        Design_sosmed::create([
            'name_design'=>$request->name_design,
            'harga_design'=>$request->harga_design,
            'deskripsi_design'=>$request->deskripsi_design
        ]);

        return Redirect::route('index_design');
    }

    //2 MENAMPILKAN SEMUA design SOSMED YANG ADA
    public function index_design()
    {
        $design_sosmeds = Design_sosmed::all();
        return view('pages.dashboard.design_sosmed.index_design',compact('design_sosmeds'));
    }

    //3 MENAMPILKAN SATU ADMIN SOSMED
    public function edit_design(Design_sosmed $design_sosmed)
    {
        return view('pages.dashboard.design_sosmed.update_design', compact('design_sosmed'));
    }

    //3 UPDATE DATA ADMIN SOSMED
    public function update_design(Design_sosmed $design_sosmed, Request $request){
        $request->validate([
            'name_design'=>'required',
            'harga_design'=>'required',
            'deskripsi_design'=>'required'
        ]);
        //create atau insert data
        $design_sosmed->update([
            'name_design'=>$request->name_design,
            'harga_design'=>$request->harga_design,
            'deskripsi_design'=>$request->deskripsi_design
        ]);

        return Redirect::route('index_design',$design_sosmed);
    }

    //4 DELETE design SOSMED
    public function delete_design(Design_sosmed $design_sosmed)
    {
        $design_sosmed->delete();
        return redirect()->back();
    }
}
