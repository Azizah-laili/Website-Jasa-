<?php

namespace App\Http\Controllers;

use App\Models\Admin_sosmed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class adminsosmedController extends Controller
{
    //1 MENAMPILKAN 1 LOGO
    public function create_admin()
    {
        return view('pages.dashboard.admin_sosmed.create_admin');
    }

    //1 CREATE ADMIN SOSMED
    public function store_admin(Request $request){
        $request->validate([
            'name_admin'=>'required',
            'harga_admin'=>'required',
            'deskripsi_admin'=>'required'
        ]);
        //create atau insert data
        Admin_sosmed::create([
            'name_admin'=>$request->name_admin,
            'harga_admin'=>$request->harga_admin,
            'deskripsi_admin'=>$request->deskripsi_admin
        ]);

        return Redirect::route('index_admin');
    }

    //2 MENAMPILKAN SEMUA ADMIN SOSMED YANG ADA
    public function index_admin()
    {
        $admin_sosmeds = Admin_sosmed::all();
        return view('pages.dashboard.admin_sosmed.index_admin',compact('admin_sosmeds'));
    }

    //3 MENAMPILKAN SATU ADMIN SOSMED
    public function edit_admin(Admin_sosmed $admin_sosmed)
    {
        return view('pages.dashboard.admin_sosmed.update_admin', compact('admin_sosmed'));
    }

    //3 UPDATE DATA ADMIN SOSMED
    public function update_admin(Admin_sosmed $admin_sosmed, Request $request){
        $request->validate([
            'name_admin'=>'required',
            'harga_admin'=>'required',
            'deskripsi_admin'=>'required'
        ]);
        //create atau insert data
        $admin_sosmed->update([
            'name_admin'=>$request->name_admin,
            'harga_admin'=>$request->harga_admin,
            'deskripsi_admin'=>$request->deskripsi_admin
        ]);

        return Redirect::route('index_admin',$admin_sosmed);
    }

    //4 DELETE ADMIN SOSMED
    public function delete_admin(Admin_sosmed $admin_sosmed)
    {
        $admin_sosmed->delete();
        return redirect()->back();
    }
}
