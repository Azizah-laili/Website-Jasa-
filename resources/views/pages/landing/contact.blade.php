@extends('layouts.front')
@section('title','Contact')
@section('content')

<!-- CONTACT US -->
<div class="py-10 md:px-10 md:py-8">
    <div class="max-w-[2000px] md:flex justify-between mb-20 py-10 sm:py-8 lg:py-12">
      
      <div class="p-8 bg-blue-200 md:mr-5" style="background: url('{{ asset('/images/contact_us-01.png') }}');">
        <h1 class="pt-10 text-2xl font-bold text-center text-blue-900 uppercase ">Contact Information</h1>
        <p class="pt-5 text-center ">Kirimkan pesan dan akan segera kami balas</p>
        
        <div class="py-10 md:py-20">
          <div class="flex items-center justify-center pt-10">
            <i class="px-4 fas fa-map-marker-alt fa-lg"></i>
            <p class="text-sm font-medium text-blue-900">Jl Mongonsidi No 6 (Indigo Space Telkom)
              Medan, Sumatera Utara, Indonesia</p>
          </div>
  
          <div class="flex items-center pt-10 justify-normal">
            <i class="px-4 fas fa-envelope fa-lg"></i>
            <p class="text-sm font-medium text-blue-900">info@algotech.co.id <br>
              algoritma.tech@gmail.com</p>
          </div>
  
          <div class="flex items-center pt-10 justify-normal">
            <i class="px-4 fas fa-phone-alt fa-lg"></i>
            <p class="text-sm font-medium text-blue-900">0812 6363 0633</p>
          </div>
        </div>
  
        <div class="flex items-center justify-center gap-10 pt-10">
          <a href="{{ url('https://www.instagram.com/algotech.co.id/') }}" target="_blank" rel="noopener noreferrer"><i  class="socmed fab fa-instagram fa-lg"></i></a>
          <a href="{{ url('https://twitter.com/Algo_tech') }}" target="_blank" rel="noopener noreferrer"><i class="socmed fab fa-twitter fa-lg"></i></a>
          <a href="{{ url('https://web.facebook.com/algotech.id?_rdc=1&_rdr') }}" target="_blank" rel="noopener noreferrer"><i class="socmed fab fa-facebook-f fa-lg"></i></a>
          <a href="{{ url('https://www.linkedin.com/in/algotech/') }}" target="_blank" rel="noopener noreferrer"><i class="socmed fab fa-linkedin-in fa-lg" target="_blank" rel="noopener noreferrer"></i></a>
          <a href="{{ url('https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=info@algotech.co.id') }}" target="_blank" rel="noopener noreferrer"><i class=" socmed far fa-at fa-lg"></i></a>
        </div>
      </div>
  
      <div class=" px-4 py-20 md:py-0 mx-auto max-w-4xl md:px-8 2xl:max-w-[1200px]">
        <div class="mb-10 md:mb-16">
          <h2 class="mb-4 text-2xl font-bold text-center text-gray-800 lg:text-3xl md:mb-6">CONTACT US</h2>
          <p class="max-w-screen-md mx-auto text-center text-gray-500 md:text-lg">Ada pertanyaan atau ingin memesan? langsung hubungi kami!</p>
        </div>
        <form  action="{{ route('store_contact') }}" method="POST" class="pt-10">
          @csrf

          @if ($errors->any())
          <div class="p-4 bg-red-200 rounded-md ">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>                  
            @endforeach
          </div>
          @endif

          {{-- @if ($message = Session::get('Terima kasih telah menghubungi kami, kami akan segera menghubungi anda kembali'))
          <div class="p-4 bg-red-200 rounded-md ">
              <p>{{ $message }}</p>
          </div>
          @endif --}}

          <div class="grid max-w-screen-md gap-4 mx-auto sm:grid-cols-2">
            <div class=""><label class="inline-block mb-2 text-sm text-gray-800 sm:text-base">First name*</label>
              <input type="text" name="firsname_contact" ty class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded outline-none bg-blue-50 focus:ring ring-indigo-300" /></div>
            
            <div class=""><label class="inline-block mb-2 text-sm text-gray-800 sm:text-base">Last name*</label>
              <input type="text" name="lastname_contact" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded outline-none bg-blue-50 focus:ring ring-indigo-300" /></div>
            
            <div class="sm:col-span-2"><label class="inline-block mb-2 text-sm text-gray-800 sm:text-base">Phone Number*</label>
              <input type="text" name="phone_contact" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded outline-none bg-blue-50 focus:ring ring-indigo-300" /></div>
            
            <div class="sm:col-span-2"><label class="inline-block mb-2 text-sm text-gray-800 sm:text-base">Email*</label>
              <input type="text" name="email_contact" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded outline-none bg-blue-50 focus:ring ring-indigo-300" /></div>
            
            <div class="sm:col-span-2"><label class="inline-block mb-2 text-sm text-gray-800 sm:text-base">Subject*</label>
              <input type="text" name="subject_contact" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded outline-none bg-blue-50 focus:ring ring-indigo-300" /></div>
          </div>
  
          <div class="sm:col-span-2"><label class="inline-block mb-2 text-sm text-gray-800 sm:text-base">Message*</label>
            <textarea name="message_contact" class="w-full h-64 px-3 py-2 text-gray-800 transition duration-100 border rounded outline-none bg-blue-50 focus:ring ring-indigo-300"></textarea></div>
          
          <div class="flex items-center justify-between pt-10 sm:col-span-2">
            <button type="submit" id="yqlBoC" class="inline-block px-8 py-3 text-sm font-semibold text-center text-white transition duration-100 bg-indigo-500 rounded-lg outline-none hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 md:text-base">Send</button><span class="text-sm text-gray-500">*Required</span></div>
        </form>
  
      </div>
    </div>
  </div>
  <!--END CONTACT US -->

@endsection