@extends('layouts.front')
@section('title','jasa website')
@section('content')

<!-- HERO WEBSITE SECTION -->
<setion class="md:py-10">
    <div class="pt-20 mb-40 bg-blue-900">
      <div class="px-6 text-center text-white md:px-12">
        <div class="container mx-auto xl:px-32">
          <div class="flex grid items-center gap-12 lg:grid-cols-2">
            
            <div class="mx-auto mt-12 text-left md:px-10 lg:mt-0">
              <h1 class="my-12 text-3xl font-bold tracking-tight uppercase judul">
                Jasa Pembuatan Website untuk Segala Kebutuhan Anda!</h1>
                <p class="mb-12 text-justify judul">Ingin wujudkan website impian tanpa ribet?
                  Kami siap membantu Anda! Tersedia layanan
                  jasa pembuatan website murah dan
                  berkualitas dengan fitur terlengkap!</p>
                <div class="rata">
                    @if (Route::has('login'))
                    @auth
                    <a class="inline-block py-3 mr-2 text-sm font-medium leading-snug text-white uppercase transition duration-150 ease-in-out rounded shadow-md bg-color-third px-7 hover:bg-white hover:text-blue-900 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 " data-mdb-ripple="true" data-mdb-ripple-color="light" href="#website" role="button">Get started</a>
                    <a class="inline-block py-3 text-sm font-medium leading-snug text-white uppercase transition duration-150 ease-in-out bg-transparent rounded px-7 hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200" data-mdb-ripple="true" data-mdb-ripple-color="light" href="{{ url('https://api.whatsapp.com/send?phone=6281263630633&text=Halo%20algotech,%20Saya%20mau%20order') }}" target="_blank" rel="noopener noreferrer" role="button">Konsultasi sekarang</a>
                    @else
                    <a class="inline-block py-3 mr-2 text-sm font-medium leading-snug text-white uppercase transition duration-150 ease-in-out rounded shadow-md bg-color-third px-7 hover:bg-white hover:text-blue-900 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 " data-mdb-ripple="true" data-mdb-ripple-color="light" href="{{ route('login') }}" role="button">Get started</a>
                    <a class="inline-block py-3 text-sm font-medium leading-snug text-white uppercase transition duration-150 ease-in-out bg-transparent rounded px-7 hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200" data-mdb-ripple="true" data-mdb-ripple-color="light" href="{{ url('https://api.whatsapp.com/send?phone=6281263630633&text=Halo%20algotech,%20Saya%20mau%20order') }}" target="_blank" rel="noopener noreferrer" role="button">Konsultasi sekarang</a>
                    @endauth
                    @endif
            </div>
            </div>

            <div class="mx-auto mb-12 lg:mb-0">
              <img src="{{ asset('/images/website.png') }}" class="w-11/12 rounded-lg shadow-lg" alt=""/>
            </div>
          </div>
        </div>
      </div>
    </div>
</setion>
<!-- END HERO WEBSITE SECTION -->
 
{{-- REASON WEBSITE --}}
  <div class="max-w-full px-4 py-16 mx-auto transition-transform bg-blue-200 md:px-24 lg:px-8 " data-aos="fade-up">
    <div class="w-full mb-10 md:mx-auto sm:text-center md:mb-12">
      <h2 class="pt-20 mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-center text-slate-900 dark:text-slate-100 sm:text-4xl md:mx-auto">WEBSITE</h2>
      <p class="text-base text-center md:text-lg">Tanpa perlu coding dan ribet dengan masalah teknis!</p>
    </div>

    <div class="grid gap-8 row-gap-5 pb-20 md:row-gap-8 lg:grid-cols-3">
      <div class="p-5 duration-300 transform bg-white border-2 border-dashed shadow-sm hover:-translate-y-2 border-primary-500 dark:bg-gray-900 rounded-global">
        <div class="flex items-center mb-2">
          <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-white rounded-full bg-primary-500"> 1 </p>
          <p class="text-lg font-bold leading-5">PROFESIONAL DESIGN</p>
        </div>
        <p class="text-sm">Website yang didesain dengan optimal untuk meningkatkan kepercayaan pengunjung dan kredibilitas bisnis Anda</p>
      </div>
      <div class="p-5 duration-300 transform bg-white border-2 border-dashed shadow-sm hover:-translate-y-2 border-primary-500 dark:bg-gray-900 rounded-global">
        <div class="flex items-center mb-2">
          <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-white rounded-full bg-primary-500"> 2 </p>
          <p class="text-lg font-bold leading-5">FAST LOADING</p>
        </div>
        <p class="text-sm">Website cepat akses dengan waktu loading kurang dari 4 detik untuk meningkatkan kenyamanan pengunjung</p>
      </div>
      <div class="relative p-5 duration-300 transform bg-white border-2 border-dashed shadow-sm hover:-translate-y-2 border-primary-500 dark:bg-gray-900 rounded-global">
        <div class="flex items-center mb-2">
          <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-white rounded-full bg-primary-500"> 3 </p>
          <p class="text-lg font-bold leading-5">FULL SUPPORT</p>
        </div>
        <p class="text-sm">Support dari tim profesional kami agar keamanan dan performansi website Anda selalu terjaga kapanpun diakses</p>
      </div>
    </div>
  </div>
{{-- END REASON WEBSITE --}}

{{-- WEBSITE --}}
@include('components.landing.website-half')

{{-- CS SECTION --}}
@include('components.landing.cs')

{{-- PARTNER AND CLIENT SECTION --}}
@include('components.landing.mitra')

{{-- ARTICLE SECTION --}}
@include('components.landing.article-half')

@endsection