@extends('layouts.front')
@section('title','Domain')
@section('content')
<section class="py-20 bg-blue-50">
  <div class="mt-20 sm:py-8 lg:py-12">
      <div class="px-10 py-10 mx-auto bg-white rounded-lg shadow-2xl max-w-7xl dark:bg-gray-800 lg:flex-shrink-1 lg:p-12" data-aos="fade-left">
        <h3 class="text-3xl font-extrabold leading-8 text-gray-900 dark:text-white sm:leading-9 lg:text-4xl">KONFIGURASI DOMAIN</h3>
        <p class="mt-6 text-base leading-6 text-gray-500 dark:text-gray-200">Please review your domain name selections and any addons that are available for them.</p>
        <div class="mt-8">
          <div class="flex items-center">
            <h4 class="flex-shrink-0 pr-4 text-sm font-semibold leading-5 tracking-wider uppercase bg-white dark:bg-gray-800 text-primary 2xl:text-lg">{{ $domain->register }}</h4>
            <div class="flex-1 border-t-2 border-gray-200 2xl:border-gray-400"> </div>
          </div>
          <div class="grid mt-6 text-center sm:grid-cols-2 lg:max-w-7xl xl:max-w-6xl xl:mx-auto 2xl:text-left">
            <div class="px-5 py-6 bg-yellow-100 sm:bg-gradient-to-l sm:from-yellow-100 sm:to-white">
              <h1 class="text-2xl font-semibold 2xl:font-normal 2xl:text-lg">Masa Registrasi</h1>
              <p class="font-extrabold text-base mt-4 text-gray-700 lg:max-w-xs lg:mx-auto 2xl:max-w-[500px] 2xl:text-4xl 2xl:mt-[25px]">{{ $domain->year }}</p>
            </div>
            <div class="px-5 py-6 bg-teal-100 from-teal-100 sm:bg-gradient-to-r sm:to-white">
              <h1 class="text-2xl font-semibold 2xl:text-lg 2xl:font-normal">Nama domain</h1>
              <p class="font-extrabold text-base mt-4 text-gray-700 lg:max-w-xs lg:mx-auto 2xl:text-4xl 2xl:mt-[25px] 2xl:max-w-[500px]">{{ $domain->tld }}</p>
            </div>
          </div>
        </div>
        <div class="mt-8">
          <div class="flex items-center">

            <h4 class="flex-shrink-0 pr-4 text-sm font-semibold leading-5 tracking-wider uppercase bg-white dark:bg-gray-800 text-primary 2xl:text-lg">Nameserver</h4>
            <div class="flex-1 border-t-2 border-gray-200 2xl:border-gray-400"> </div>
          </div>
          <p class="py-5 mx-auto my-5 text-justify text-gray-500">Jika Anda ingin menggunakan nameserver tersendiri, silahkan ubah dibawah ini. Secara default, nameserver akan diarahkan ke kami.</p>
          <form action="{{ route('add_to_cart', $website) }}" method="POST" class="grid max-w-xl gap-8 py-5 mx-auto my-5 sm:grid-cols-3">
            @csrf
            <div class=""><label class="inline-block mb-2 text-sm text-gray-800 sm:text-base">Nameserver 1*</label>
              <input name="nameserver_1" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded outline-none bg-gray-50 focus:ring ring-indigo-300" /></div>
            
              <div class=""><label class="inline-block mb-2 text-sm text-gray-800 sm:text-base">Nameserver 2*</label>
              <input name="nameserver_2" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded outline-none bg-gray-50 focus:ring ring-indigo-300" /></div>
            
              <div class=""><label class="inline-block mb-2 text-sm text-gray-800 sm:text-base">Nameserver 3</label>
              <input name="nameserver_3" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded outline-none bg-gray-50 focus:ring ring-indigo-300" /></div>
            
              <div class=""><label class="inline-block mb-2 text-sm text-gray-800 sm:text-base">Nameserver 4</label>
              <input name="nameserver_4" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded outline-none bg-gray-50 focus:ring ring-indigo-300" /></div>
            
              <div class=""><label class="inline-block mb-2 text-sm text-gray-800 sm:text-base">Nameserver 5</label>
              <input name="nameserver_5" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded outline-none bg-gray-50 focus:ring ring-indigo-300" /></div>
            
              <div class="flex items-center justify-between sm:col-span-2 2xl:items-start 2xl:justify-end">
              <button id="AAnvma" class="inline-block px-8 py-3 text-sm font-semibold text-center text-white transition duration-100 bg-indigo-500 rounded-lg outline-none hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 md:text-base">Checkout</button></div>
              @if ($errors->any())
              @foreach ($errors ->all() as $error)
              {{-- looping semua error yang terjadi --}}
              <p>{{ $error }}</p>
              @endforeach
              @endif
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- END DOMAIN CART SECTION -->
  
@endsection