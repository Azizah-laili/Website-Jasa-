<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class websiteController extends Controller
{
    //1 MENAMPILKAN 1 WEBSITE
    public function create_website()
    {
        return view('pages.dashboard.website.create_website');
    }

    //1 CREATE WEBSITE
    public function store_website(Request $request){
        $request->validate([
            'name_website'=>'required',
            'harga_website'=>'required',
            'deskripsi_website'=>'required'
        ]);
        //create atau insert data
        Website::create([
            'name_website'=>$request->name_website,
            'harga_website'=>$request->harga_website,
            'deskripsi_website'=>$request->deskripsi_website
        ]);

        return Redirect::route('index_website');
    }

    //2 MENAMPILKAN SEMUA WEBSITE YANG ADA
    public function index_website()
    {
        $websites = Website::all();
        return view('pages.dashboard.website.index_website',compact('websites'));
    }

    //3 MENAMPILKAN SATU WEBSITE
    public function edit_website(Website $website)
    {
        return view('pages.dashboard.website.update_website', compact('website'));
    }

    //3 UPDATE DATA WEBSITE
    public function update_website(Website $website, Request $request){
        $request->validate([
            'name_website'=>'required',
            'harga_website'=>'required',
            'deskripsi_website'=>'required'
        ]);
        //create atau insert data
        $website->update([
            'name_website'=>$request->name_website,
            'harga_website'=>$request->harga_website,
            'deskripsi_website'=>$request->deskripsi_website
        ]);

        return Redirect::route('index_website',$website);
    }

    //4 DELETE WEBSITE
    public function delete_website(Website $website)
    {
        $website->delete();
        return redirect()->back();
    }
}
