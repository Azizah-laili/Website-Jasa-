<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use index;
use App\Models\Logo;
use App\Models\Artikel;
use App\Models\Hosting;
use App\Models\Website;
use App\Models\Certificate;
use App\Models\Admin_sosmed;
use Illuminate\Http\Request;
use App\Models\Design_sosmed;
use Illuminate\Support\Facades\DB;

class Landingcontroller extends Controller
{
    //HALAMAN LANDING AWAL HOME
    public function index(){
        $artikels = Artikel::all();
        $websites = Website::orderBy('updated_at', 'desc')->limit(3)->get();
        return view('pages.landing.index',compact(['websites','artikels']));
    }

    //HALAMAN LANDING DOMAIN
    public function home_index_domain()
    {   
        $artikels = Artikel::all();
        $domains = Domain::all();
        return view('pages.landing.layanan.domain',compact(['domains','artikels']));
    }

    //HALAMAN LANDING HOSTING
    public function home_index_hosting()
    {   
        $artikels = Artikel::all();
        $hostings = Hosting::all();
        return view('pages.landing.layanan.hosting',compact(['hostings','artikels']));
    }

    //HALAMAN LANDING WEBSITE
    public function home_index_website()
    {   
        $artikels = Artikel::all();
        $websites = Website::all();
        return view('pages.landing.layanan.website',compact(['websites','artikels']));
    }

    //HALAMAN LANDING LOGO
    public function home_index_logo()
    {   
        $artikels = Artikel::all();
        $logos = Logo::all();
        return view('pages.landing.layanan.logo',compact(['logos','artikels']));
    }

    //HALAMAN LANDING SERTIFIKAT
    public function home_index_certificate()
    {   
        $artikels = Artikel::all();
        $certificates = Certificate::all();
        return view('pages.landing.layanan.certificate',compact(['certificates','artikels']));
    }
    //HALAMAN LANDING ADMIN SOSMED
    public function home_index_admin()
    {   
        $artikels = Artikel::all();
        $admin_sosmeds = Admin_sosmed::all();
        return view('pages.landing.layanan.admin',compact(['admin_sosmeds','artikels']));
    }
    //HALAMAN LANDING DESAIN SOSMED
    public function home_index_design()
    {   
        $artikels = Artikel::all();
        $design_sosmeds = Design_sosmed::all();
        return view('pages.landing.layanan.design',compact(['design_sosmeds','artikels']));
    }
    //HALAMAN LANDING SEMUA ARTIKEL
    public function home_index_artikel()
    {
        $artikels = Artikel::all();
        return view('pages.landing.artikel.artikel',compact('artikels'));
    }  
    //HALAMAN LANDING ABOUT US
    public function home_index_aboutUs()
    {
        return view('pages.landing.aboutUs');
    } 
    
    
    
}
