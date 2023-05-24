<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class artikelController extends Controller
{
    

    
    //1 MENAMPILKAN SATU ARTIKEL KE LANDING
    public function section_artikel(Artikel $artikel)
    {   $artikels = Artikel::orderBy('updated_at', 'desc')->limit(3)->get();/* 
        $artikels = Artikel::all(); */
        return view('pages.landing.artikel.artikelkontent', compact(['artikel','artikels']));
    }

    //1 MENAMPILKAN 1 ARTIKEL KE DASHBOARD
    public function create_artikel()
    {
        return view('pages.dashboard.artikel.create_artikel');
    }

    //1 CREATE artikel
    public function store_artikel(Request $request){
        $request->validate([
            'name_artikel'=>'required',
            'foto_artikel'=>'required',
            'deskripsi_artikel'=>'required'
        ]);
        $file = $request->file('foto_artikel');
        
        /*6. kedua, lalu menyimpannya dengan path. time-ambil waktu sekarang lalu ditambahi underscore, ditambahi
        dengan nama product kemudia diakhiri dengan titik lalu dengan extension asli produk*/
         $path = time().'_'.$request->name_artikel.'.'.$file->getClientOriginalExtension();

         //7. lalu gambar disimpan pada local public
         Storage::disk('local')->put('public/'.$path,file_get_contents($file));


        //create atau insert data
        Artikel::create([
            'name_artikel'=>$request->name_artikel,
            'foto_artikel'=>$path,
            'deskripsi_artikel'=>$request->deskripsi_artikel
        ]);

        return Redirect::route('index_artikel');
    }

    //2 MENAMPILKAN SEMUA artikel YANG ADA
    public function index_artikel()
    {
        $artikels = Artikel::all();
        return view('pages.dashboard.artikel.index_artikel',compact('artikels'));
    }

    //3 MENAMPILKAN SATU artikel
    public function edit_artikel(Artikel $artikel)
    {
        return view('pages.dashboard.artikel.update_artikel', compact('artikel'));
    }

    

    //3 UPDATE DATA artikel
    public function update_artikel(Artikel $artikel, Request $request){
        $request->validate([
            'name_artikel'=>'required',
            'foto_artikel'=>'required',
            'deskripsi_artikel'=>'required'
        ]);
         //2.untuk image, pertama perlu mengambil file dengan parameternya ('image)
         $file = $request->file('foto_artikel');
        
         /*2. kedua, lalu menyimpannya dengan path. time-ambil waktu sekarang lalu ditambahi underscore, ditambahi
         dengan nama product kemudia diakhiri dengan titik lalu dengan extension asli produk*/
          $path = time().'_'.$request->id.'.'.$file->getClientOriginalExtension();
 
          //2. lalu gambar disimpan pada local public
          Storage::disk('local')->put('public/'.$path,file_get_contents($file));

        //create atau insert data
        $artikel->update([
            'name_artikel'=>$request->name_artikel,
            'foto_artikel'=>$path,
            'deskripsi_artikel'=>$request->deskripsi_artikel
        ]);

        return Redirect::route('index_artikel',$artikel);
    }

    //4 DELETE artikel
    public function delete_artikel(Artikel $artikel)
    {
        $artikel->delete();
        return redirect()->back();
    }
}
