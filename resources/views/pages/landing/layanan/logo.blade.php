@extends('layouts.front')
@section('title','Jasa logo')
@section('content')

<!-- HERO LOGO SECTION -->
<setion class="md:py-10">
  <div class="pt-20 mb-40 bg-blue-900">
    <div class="px-6 text-center text-white md:px-12">
      <div class="container mx-auto xl:px-32">
        <div class="flex grid items-center gap-12 lg:grid-cols-2">
          
          <div class="mx-auto mt-12 text-left md:px-10 lg:mt-0">
            <h1 class="my-12 text-3xl font-bold tracking-tight judul">
              JASA LOGO DESAIN MURAH PROFESIONAL</h1>
              <p class="mb-12 text-justify judul">jasa desain logo yang menjamin
                kepuasan Anda dengan harga murah,
                desain ORI berkelas, proses cepat,
                dan ANTI ribet.</p>

                <div class="rata">
                  @if (Route::has('login'))
                  @auth
                  <a class="inline-block py-3 mr-2 text-sm font-medium leading-snug text-white uppercase transition duration-150 ease-in-out rounded shadow-md bg-color-third px-7 hover:bg-white hover:text-blue-900 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 " data-mdb-ripple="true" data-mdb-ripple-color="light" href="#logo" role="button">Get started</a>
                  <a class="inline-block py-3 text-sm font-medium leading-snug text-white uppercase transition duration-150 ease-in-out bg-transparent rounded px-7 hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200" data-mdb-ripple="true" data-mdb-ripple-color="light" href="{{ url('https://api.whatsapp.com/send?phone=6281263630633&text=Halo%20algotech,%20Saya%20mau%20order') }}" target="_blank" rel="noopener noreferrer" role="button">Konsultasi sekarang</a>
                  @else
                  <a class="inline-block py-3 mr-2 text-sm font-medium leading-snug text-white uppercase transition duration-150 ease-in-out rounded shadow-md bg-color-third px-7 hover:bg-white hover:text-blue-900 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 " data-mdb-ripple="true" data-mdb-ripple-color="light" href="{{ route('login') }}" role="button">Get started</a>
                  <a class="inline-block py-3 text-sm font-medium leading-snug text-white uppercase transition duration-150 ease-in-out bg-transparent rounded px-7 hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200" data-mdb-ripple="true" data-mdb-ripple-color="light" href="{{ url('https://api.whatsapp.com/send?phone=6281263630633&text=Halo%20algotech,%20Saya%20mau%20order') }}" target="_blank" rel="noopener noreferrer" role="button">Konsultasi sekarang</a>
                  @endauth
                  @endif
          </div>
          </div>

          <div class="mx-auto mb-12 lg:mb-0">
            <img src="/images/jasa_logo.png" class="w-11/12 rounded-lg shadow-lg" alt=""/>
          </div>
        </div>
      </div>
    </div>
  </div>
</setion>
<!-- END HERO LOGO SECTION -->
 
<!-- REASON LOGO-->
  <div class="max-w-full px-4 py-16 mx-auto transition-transform bg-blue-200 md:px-24 lg:px-8 " data-aos="fade-up">
    <div class="w-full mb-10 md:mx-auto sm:text-center md:mb-12">
      <h2 class="pt-20 mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-center text-slate-900 dark:text-slate-100 sm:text-4xl md:mx-auto">
          JASA LOGO DESAIN
      </h2>
      <p class="text-base text-center md:text-lg">Mulai bisnismu tanpa ragu, dengan jasa design logo dari ALGOTECH!</p>
    </div>

    <div class="grid gap-8 row-gap-5 pb-20 md:row-gap-8 lg:grid-cols-3">
      <div class="p-5 duration-300 transform bg-white border-2 border-dashed shadow-sm hover:-translate-y-2 border-primary-500 dark:bg-gray-900 rounded-global">
        <div class="flex items-center mb-2">
          <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-white rounded-full bg-primary-500"> 1 </p>
          <p class="text-lg font-bold leading-5">ORI BERKELAS</p>
        </div>
        <p class="text-sm">Desain dari NOL (bukan pakai template)</p>
      </div>
      <div class="p-5 duration-300 transform bg-white border-2 border-dashed shadow-sm hover:-translate-y-2 border-primary-500 dark:bg-gray-900 rounded-global">
        <div class="flex items-center mb-2">
          <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-white rounded-full bg-primary-500"> 2 </p>
          <p class="text-lg font-bold leading-5">HARGAI TERJANGKAU</p>
        </div>
        <p class="text-sm">Dengan logo berkualiatas anda bisa dapatkan dengan hargai sesuai budget.</p>
      </div>
      <div class="relative p-5 duration-300 transform bg-white border-2 border-dashed shadow-sm hover:-translate-y-2 border-primary-500 dark:bg-gray-900 rounded-global">
        <div class="flex items-center mb-2">
          <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-white rounded-full bg-primary-500"> 3 </p>
          <p class="text-lg font-bold leading-5">PROSES CEPAT</p>
        </div>
        <p class="text-sm">Fast respon online 24 jam, komunikatif, ramah, & cekatan.</p>
      </div>
    </div>
  </div>
<!-- REASON LOGO-->

<!-- LOGO -->
  <section id="logo" class="py-8 my-20 leading-7 sm:py-12 md:py-16 lg:py-24">
    <div class="box-border px-4 mx-auto border-solid sm:px-6 lg:px-8 max-w-7xl">
      <div class="flex flex-col items-center py-10 leading-7 text-center border-0 border-gray-200 text-color-second">
        <h2 class="box-border m-0 text-3xl font-black leading-tight tracking-tight border-solid text-color-second dark:text-white md:text-4xl lg:text-4xl">PAKET DESAIN LOGO</h2>
        <p class="box-border mt-2 text-xl tracking-tight text-gray-500 border-solid dark:text-white md:text-lg">GRATIS BONUS DESAIN MOCK UP 3D</p>
      </div>
      
      <div class="grid grid-cols-1 gap-4 mt-4 leading-7 border-0 border-gray-200 dark:border-primary-500 sm:mt-6 sm:gap-6 md:mt-8 md:gap-0 lg:grid-cols-3 xl:max-w-8xl xl:mx-auto" data-aos="fade-up">
       
        @foreach ($logos as $logo)
        <div class="relative z-10 flex flex-col items-center max-w-md p-4 mx-auto my-0 border border-solid rounded-global dark:border-gray-700 sm:p-6 md:my-8 md:p-8 lg:-mr-3">
          <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight border-0 border-gray-200 text-color-second dark:text-white sm:text-3xl md:text-4xl">{{ $logo->name_logo}}</h3>
          <div class="flex items-end pb-5 mt-3 leading-7 border-0 border-gray-200 text-color-second">
            <p class="rupiah">Rp</p>
            <p class="box-border m-0 text-4xl font-semibold leading-none border-solid md:text-6xl text-primary-500">{{ $logo->harga_logo}}</p>
          </div>
          <div class="flex-1 w-full p-0 mt-4 ml-5 leading-7 text-gray-900 border-0 border-gray-200 item">
            {!!$logo->deskripsi_logo!!}
          </div>
          
          @if (Route::has('login'))
          @auth

          <form action="{{ route('cart_logo.landing', $logo) }}" method="get">
            <button type="submit" class="inline-flex justify-center w-full px-4 py-3 mt-8 font-sans text-sm leading-none text-center no-underline bg-transparent border cursor-pointer rounded-global focus-within:bg-blue-700 focus-within:border-blue-700 focus-within:text-white border-primary-500 text-primary-500 hover:bg-blue-700 hover:border-blue-700 hover:text-white sm:text-base md:text-lg">
              <p class="">Select Plan</p>
           </button>
          </form>

          @else
          <form action="{{ route('login') }}" method="get">
            <button type="submit" class="inline-flex justify-center w-full px-4 py-3 mt-8 font-sans text-sm leading-none text-center no-underline bg-transparent border cursor-pointer rounded-global focus-within:bg-blue-700 focus-within:border-blue-700 focus-within:text-white border-primary-500 text-primary-500 hover:bg-blue-700 hover:border-blue-700 hover:text-white sm:text-base md:text-lg">
              <p class="">Select Plan</p>
           </button>
          </form>
          @endauth
          @endif
        </div>
        @endforeach

        
      </div>
    </div>
  </section>
<!-- END LOGO -->

{{-- CS SECTION --}}
@include('components.landing.cs')

{{-- PARTNER AND CLIENT SECTION --}}
@include('components.landing.mitra')

{{-- ARTICLE SECTION --}}
@include('components.landing.article-half')

@endsection