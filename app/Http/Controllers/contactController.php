<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class contactController extends Controller
{
    //1 MENAMPILKAN FORM
    public function create_contact()
    {
        return view('pages.landing.contact');
    }

    //1 CREATE contact
    public function store_contact(Request $request){
        $request->validate([
            'firsname_contact'=>'required',
            'lastname_contact'=>'required',
            'phone_contact'=>'required',
            'email_contact'=>'required',
            'subject_contact'=>'required',
            'message_contact'=>'required',

        ]);
        //create atau insert data
        Contact::create([
            'firsname_contact'=>$request->firsname_contact,
            'lastname_contact'=>$request->lastname_contact,
            'phone_contact'=>$request->phone_contact,
            'email_contact'=>$request->email_contact,
            'subject_contact'=>$request->subject_contact,
            'message_contact'=>$request->message_contact,
        ]);

        return Redirect::route('contact.landing');
    }

    //2 MENAMPILKAN SEMUA contact YANG ADA
    public function index_contact()
    {
        $contacts = Contact::all();
        return view('pages.dashboard.contact.index_contact',compact('contacts'));
    }

    //3 MENAMPILKAN SATU WEBSITE
    public function edit_contact(contact $contact)
    {
        return view('pages.dashboard.contact.update_contact', compact('contact'));
    }


    //4 DELETE contact
    public function delete_contact(contact $contact)
    {
        $contact->delete();
        return redirect()->back();
    }
}
