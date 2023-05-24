<?php

namespace App\Http\Controllers;

use App\Models\Hosting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class hostingController extends Controller
{
    //1 MENAMPILKAN 1 hosting
    public function create_hosting()
    {
        return view('pages.dashboard.hosting.create_hosting');
    }

    //1 CREATE hosting
    public function store_hosting(Request $request){
        $request->validate([
            'name_hosting'=>'required',
            'harga_hosting'=>'required',
            'deskripsi_hosting'=>'required'
        ]);
        //create atau insert data
        Hosting::create([
            'name_hosting'=>$request->name_hosting,
            'harga_hosting'=>$request->harga_hosting,
            'deskripsi_hosting'=>$request->deskripsi_hosting
        ]);

        return Redirect::route('index_hosting');
    }

    //2 MENAMPILKAN SEMUA hosting YANG ADA
    public function index_hosting()
    {
        $hostings = Hosting::all();
        return view('pages.dashboard.hosting.index_hosting',compact('hostings'));
    }

    //3 MENAMPILKAN SATU hosting
    public function edit_hosting(Hosting $hosting)
    {
        return view('pages.dashboard.hosting.update_hosting', compact('hosting'));
    }

    //3 UPDATE DATA hosting
    public function update_hosting(Hosting $hosting, Request $request){
        $request->validate([
            'name_hosting'=>'required',
            'harga_hosting'=>'required',
            'deskripsi_hosting'=>'required'
        ]);
        //create atau insert data
        $hosting->update([
            'name_hosting'=>$request->name_hosting,
            'harga_hosting'=>$request->harga_hosting,
            'deskripsi_hosting'=>$request->deskripsi_hosting
        ]);

        return Redirect::route('index_hosting',$hosting);
    }

    //4 DELETE hosting
    public function delete_hosting(Hosting $hosting)
    {
        $hosting->delete();
        return redirect()->back();
    }
}
