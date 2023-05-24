@extends('layouts.back')
@section('title','Update contact')
@section('content')
<div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
    <main>

        {{-- TOP TABLE --}}
        <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full mb-1">
                <div class="mb-4">
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="#" class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                            <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                            Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <a href="{{route('index_contact') }}">
                            <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Package contact</span>
                            </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Update package contact</span>
                            </div>
                        </li>
                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Semua paket contact</h1>
                </div>
            </div>
        </div>
        <section class="p-6">
                <div class="space-y-4 form-group">
                    <div class="grid grid-cols-3 gap-5">
                        <div class="form-group">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">FIRST NAME</label>
                            <input disabled name="firstname_contact" type="text" value="{{ $contact->firstname_contact }}" id="tld" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama paket contact">
                        </div>

                        <div class="form-group">
                            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">LAST NAME</label>
                            <input disabled name="astname_contact" type="text" value="{{ $contact->lastname_contact }}" id="year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Harga">
                        </div>

                        <div class="form-group">
                            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PHONE NUMBER</label>
                            <input disabled name="$contact->email_contact" type="text" value="{{ $contact->phone_contact }}" id="register" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Harga">
                        </div>

                        <div class="form-group">
                            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">EMAIL</label>
                            <input disabled name="$contact->email_contact" type="text" value="{{ $contact->email_contact }}" id="transfer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Harga">
                        </div>

                        <div class="form-group">
                            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SUBJECT</label>
                            <input disabled name="$contact->email_contact" type="text" value="{{ $contact->subject_contact}}" id="renew" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Harga">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">MESSAGE</label>
                        <textarea disabled  rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Deskripsi paket">
                            {{ $contact->message_contact }}
                        </textarea>
                    </div>
                    
                    <div  class="bottom-0 left-0 flex justify-center w-full py-4 space-x-4 form-group md:px-4 ">
                        
                        <a href="{{ route('index_contact') }}" class="inline-flex w-full justify-center text-white items-center bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-blue-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                            << Back
                        </button>
                        </a>
                    </div>
        </section>
    </main>
</div>
@endsection