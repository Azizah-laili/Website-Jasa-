<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class certificateController extends Controller
{
    //1 MENAMPILKAN 1 LOGO
    public function create_certificate()
    {
        return view('pages.dashboard.certificate.create_certificate');
    }

    //1 CREATE certificate
    public function store_certificate(Request $request){
        $request->validate([
            'name_certificates'=>'required',
            'harga_certificates'=>'required',
            'deskripsi_certificates'=>'required'
        ]);
        //create atau insert data
        Certificate::create([
            'name_certificates'=>$request->name_certificates,
            'harga_certificates'=>$request->harga_certificates,
            'deskripsi_certificates'=>$request->deskripsi_certificates
        ]);

        return Redirect::route('index_certificate');
    }

    //2 MENAMPILKAN SEMUA certificate YANG ADA
    public function index_certificate()
    {
        $certificates = Certificate::all();
        return view('pages.dashboard.certificate.index_certificate',compact('certificates'));
    }

    //3 MENAMPILKAN SATU certificate
    public function edit_certificate(Certificate $certificate)
    {
        return view('pages.dashboard.certificate.update_certificate', compact('certificate'));
    }

    //3 UPDATE DATA certificate
    public function update_certificate(Certificate $certificate, Request $request){
        $request->validate([
            'name_certificates'=>'required',
            'harga_certificates'=>'required',
            'deskripsi_certificates'=>'required'
        ]);
        //create atau insert data
        $certificate->update([
            'name_certificates'=>$request->name_certificates,
            'harga_certificates'=>$request->harga_certificates,
            'deskripsi_certificates'=>$request->deskripsi_certificates
        ]);

        return Redirect::route('index_certificate',$certificate);
    }

    //4 DELETE certificate
    public function delete_certificate(Certificate $certificate)
    {
        $certificate->delete();
        return redirect()->back();
    }
}
