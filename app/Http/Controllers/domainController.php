<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class domainController extends Controller
{
    public function create_domain()
    {
        return view('pages.dashboard.domain.create_domain');
    }

    //1 CREATE domain
    public function store_domain(Request $request){
        $request->validate([
            'tld'=>'required',
            'year'=>'required',
            'register'=>'required',
            'transfer'=>'required',
            'renew'=>'required',
            
        ]);
        //create atau insert data
        Domain::create([
            'tld'=>$request->tld,
            'year'=>$request->year,
            'register'=>$request->register,
            'transfer'=>$request->transfer,
            'renew'=>$request->renew
        ]);

        return Redirect::route('index_domain');
    }

    //2 MENAMPILKAN SEMUA domain YANG ADA
    public function index_domain()
    {
        $domains = Domain::all();
        return view('pages.dashboard.domain.index_domain',compact('domains'));
    }
    public function index_homedomain()
    {
        $domains = Domain::all();
        return view('pages.landing.layanan.domain',compact('domains'));
    }

    //3 MENAMPILKAN SATU domain
    public function edit_domain(Domain $domain)
    {
        return view('pages.dashboard.domain.update_domain', compact('domain'));
    }

    //3 UPDATE DATA domain
    public function update_domain(Domain $domain, Request $request){
        $request->validate([
            'tld'=>'required',
            'year'=>'required',
            'register'=>'required',
            'transfer'=>'required',
            'renew'=>'required',
        ]);
        //create atau insert data
        $domain->update([
            'tld'=>$request->tld,
            'year'=>$request->year,
            'register'=>$request->register,
            'transfer'=>$request->transfer,
            'renew'=>$request->renew,
            

        ]);

        return Redirect::route('index_domain',$domain);
    }

    //4 DELETE domain
    public function delete_domain(Domain $domain)
    {
        $domain->delete();
        return redirect()->back();
    }
}
