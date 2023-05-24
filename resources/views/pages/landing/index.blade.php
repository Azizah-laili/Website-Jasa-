@extends('layouts.front')
@section('title','Home')
@section('content')
{{-- HERO SECTION --}}
<section class="mb-10 overflow-hidden ">
    <div class="relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%; background-image: url('{{ asset('/images/hero-img.png') }}');height: 700px;">
      <div class="absolute top-0 bottom-0 left-0 right-0 w-full h-full overflow-hidden bg-fixed">
        <div class="flex items-center justify-center h-full">
          <div class="px-6 text-center text-color-second md:px-12">
            <h1 class="mb-4 text-3xl font-bold tracking-tight md:text-5xl ">JASA PEMBUATAN
              <br /><span>WEBSITE PROFESIONAL </span></h1>
            <p class="max-w-xl mx-auto mb-12 text-justify md:text-center">Algotech adalah perusahaan penyedia jasa pembuatan website, software,
              dan maintenance di medan, banda aceh, padang, bandung, surabaya,
              dan batam. <strong class="text-blue-500"> Mulai go-online dengan domain
              sebagai brand anda di dunia maya.</strong></p>
            @if (Route::has('login'))
                @auth
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                    <a class="p-4 uppercase btn bg-gradient-to-br" data-mdb-ripple="true" data-mdb-ripple-color="light" href="#website" role="button">Get started</a>
                    <a class="p-3 border-2 border-blue-500 hover:bg-orange-600 hover:border-orange-500 hover:text-white rounded-xl" data-mdb-ripple="true" data-mdb-ripple-color="light" href="{{ url('https://api.whatsapp.com/send?phone=6281263630633&text=Halo%20algotech,%20Saya%20mau%20order') }}" target="_blank" rel="noopener noreferrer" role="button">Konsultasi sekarang</a>
                </div>
                @else
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                    <a class="p-4 uppercase btn bg-gradient-to-br" data-mdb-ripple="true" data-mdb-ripple-color="light" href="{{route('login')}}" role="button">Get started</a>
                    <a class="p-3 border-2 border-blue-500 hover:bg-orange-600 hover:border-orange-500 hover:text-white rounded-xl" data-mdb-ripple="true" data-mdb-ripple-color="light" href="{{ route('register') }}" role="button">New Account</a>
                </div>
                @endauth
            @endif
          </div>
        </div>
      </div>
    </div>

    <div class="-mt-2.5 md:-mt-4 lg:-mt-6 xl:-mt-10" style="height: 50px; transform: scale(2); transform-origin: top center; color: #fff;">
      <svg viewBox="0 0 2880 48" xmlns="http://www.w3.org/2000/svg">
        <path d="M 0 48 L 1437.5 48 L 2880 48 L 2880 0 L 2160 0 C 1453.324 60.118 726.013 4.51 720 0 L 0 0 L 0 48 Z" fill="currentColor"></path>
      </svg>
    </div>
  </section>
{{-- END HERO SECTION --}}

{{-- CAROUSEL SECTION --}}
  <div class="wrapper">
      <div class="carousel owl-carousel ">
        <div class=" card card-1">
          <a href="{{ route('admin.landing')}}">
            <img src="{{ asset('/images/carousel/carousel-ADMINDESAINSOSMED.png')}}" alt="admin social media"></a>
        </div>
        <div class="card card-2">
          <a href="{{ route('design.landing')}}">
          <img src="{{ asset('/images/carousel/carousel-DESAINSOSMED.png')}}" alt="desain sosial media"></a>
        </div>
        <div class="card card-3">
          <a href="{{ route('domain.landing')}}"">
            <img src="{{ asset('/images/carousel/carousel-DOMAIN.png')}}" alt="domain"></a>
        </div>
        <div class="card card-4">
          <a href="{{ route('hosting.landing')}}">
          <img src="{{ asset('/images/carousel/carousel-HOSTING.png')}}" alt="hosting"></a>
        </div>
        <div class="card card-5">
          <a href="{{ route('website.landing')}}">
          <img src="{{ asset('/images/carousel/carousel-WEBSITE.png')}}" alt="website"></a>
        </div>
        <div class="card card-4">
          <a href="{{ route('certificate.landing') }}te.html">
          <img src="{{ asset('/images/carousel/carousel-certificate.png')}}" alt="desain sertifikat"></a>
        </div>
        <div class="card card-5">
          <a href="{{ route('logo.landing')}}">
          <img src="{{ asset('/images/carousel/carousel-LOGO.png')}}" alt="desain logo"></a>
        </div>
      </div>
  </div>
{{-- end carousel --}}

{{-- FEATURES --}}
  <div class="my-20 bg-color-primary">
    <div class="px-4 py-10 mx-auto max-w-7xl">
      <div class="flex flex-col py-6 pt-0 gap-7">
        <h1 class="text-3xl font-bold tracking-tight text-center text-color-second dark:text-slate-100 sm:text-4xl">PROFESIONAL &amp; BERKUALITAS</h1>
        <p class="text-base text-center text-gray-400 lg:text-lg 2xl:text-xl">Seluruh tim senantiasa bekerja untuk memenuhi
          kebutuhan dan hasil yang memuaskan untuk anda.</p>
      </div>
      
      <div class="">
        <div class="flex flex-col gap-y-5 my-7 md:flex-row md:gap-x-6">
          <div class="flex flex-col p-3 bg-white shadow-lg rounded-global gap-y-2 dark:border-slate-700 md:w-1/2 lg:w-1/3" data-aos="fade-up"><span class="text-4xl text-primary-500">
              <div style="font-size:inherit;color:#FB8B2B;padding:2px">
                <i class="fas fa-user-tie"></i>
              </div>
            </span>
            <p class="font-extrabold text-color-second dark:text-slate-200">PROFESIONAL</p>
            <p class="font-thin leading-snug dark:text-gray-300">Tim berpengalaman yang siap
              bekerja untuk memberi hasil yang terbaik </p>
          </div>
          <div class="flex flex-col p-3 bg-white shadow-lg gap-y-2 rounded-global dark:border-slate-700 md:w-1/2 lg:w-1/3" data-aos="fade-up"><span class="text-4xl text-primary-500">
              <div style="font-size:inherit;color:#FB8B2B;padding:2px">
                <i class="fas fa-hand-holding-usd"></i>
              </div>
            </span>
            <p class="font-extrabold text-color-second dark:text-slate-200">HARGA TERJANGKAU</p>
            <p class="font-thin leading-snug dark:text-gray-300">Anda bisa mendapatkan website dengan
              kualitas Professional dengan harga
              yang terjangkau!</p>
          </div>
          <div class="flex flex-col p-3 bg-white shadow-lg gap-y-2 rounded-global dark:border-slate-700 md:w-1/2 lg:w-1/3" data-aos="fade-up"><span class="text-4xl text-primary-500">
              <div style="font-size:inherit;color:#FB8B2B;padding:2px">
                <i class="fas fa-clipboard-list-check"></i>
              </div>
            </span>
            <p class="font-extrabold text-color-second dark:text-slate-200">LAYANAN LENGKAP</p>
            <p class="font-thin leading-snug dark:text-gray-300">Kami juga menyediakan layanan lain
              seperti software, desain grafis dan
              kebutuhan penunjang lain</p>
          </div>
        </div>
        <div class="flex flex-col my-4 gap-y-5 md:flex-row md:gap-x-6 md:my-7">
          <div class="flex flex-col p-3 bg-white shadow-lg gap-y-2 rounded-global dark:border-slate-700 md:w-1/2 lg:w-1/3" data-aos="fade-up"><span class="text-4xl text-primary-500">
              <div style="font-size:inherit;color:#FB8B2B;padding:2px">
                <i class="fas fa-user-headset"></i>
              </div>
            </span>
            <p class="font-extrabold text-color-second dark:text-slate-200">TIM SUPPPORT HANDAL</p>
            <p class="font-thin leading-snug dark:text-gray-300">Algotech selalu siap membantu setiap
              kendala yang di alami customer
              melalui e-mail, telp dan chat</p>
          </div>
          <div class="flex flex-col p-3 bg-white shadow-lg gap-y-2 rounded-global dark:border-slate-700 md:w-1/2 lg:w-1/3" data-aos="fade-up"><span class="text-4xl text-primary-500">
              <div style="font-size:inherit;color:#FB8B2B;padding:2px">
                <i class="fad fa-phone-laptop"></i>
              </div>
            </span>
            <p class="font-extrabold text-color-second dark:text-slate-200">DESAIN RESPONSIVE</p>
            <p class="font-thin leading-snug dark:text-gray-300">Website akan disesuaikan responsive
              dengan semua jenis perangkat, seperti
              laptop, PC, handphone, dan tablet.</p>
          </div>
          <div class="flex flex-col p-3 bg-white shadow-lg gap-y-2 rounded-global dark:border-slate-700 md:w-1/2 lg:w-1/3" data-aos="fade-up"><span class="text-4xl text-primary-500">
              <div style="font-size:inherit;color:#FB8B2B;padding:2px">
                <i class="fad fa-users"></i>
              </div>
            </span>
            <p class="font-extrabold text-color-second dark:text-slate-200">SEO FRIENDLY</p>
            <p class="font-thin leading-snug dark:text-gray-300">SEO-friendly untuk bisa
              bersaing di pencarian Google</p>
          </div>
        </div>
      </div>
    </div>
  </div>
{{-- END FEATURES --}}

{{-- WEBSITE --}}
@include('components.landing.website-half')

{{-- CS SECTION --}}
@include('components.landing.cs')

{{-- PARTNER AND CLIENT SECTION --}}
@include('components.landing.mitra')

{{-- ARTICLE SECTION --}}
@include('components.landing.article-half')

{{-- FAQ SECTION --}}
  <div class="px-4 py-12 mx-auto bg-blue-100 sm:max-w-xl md:max-w-full md:px-24 lg:px-8 lg:py-14">
    <div class="max-w-4xl sm:mx-auto lg:max-w-2xl">
      <div class="max-w-xl mb-10 text-center md:mx-auto md:mb-12 lg:max-w-2xl">
        <h2 class="max-w-xl mb-6 font-sans text-2xl font-bold leading-none tracking-tight text-blue-900 dark:text-slate-100 md:mx-auto md:text-4xl lg:text-3xl">FREQUENTLY ASKED QUESTIONS</h2>
        <p class="sm:text-lg">Apakah kamu punya pertanyaan seputar Algotech</p>
      </div>
      <div class="">
        {{-- FAQ 1 --}}
        <div :data-headlessui-state="open ? &#x27;open&#x27;: &#x27;&#x27;" class="border-b border-blue-300 dark:border-slate-700" x-data="{open: false}">
          <div :data-headlessui-state="open ? &#x27;open&#x27;: &#x27;&#x27;" class="flex flex-row items-center justify-between w-full px-4 py-4 text-lg font-medium text-left hover:bg-blue-200 dark:hover:bg-slate-900" x-on:click="open = !open">
            Dimana lokasi kantor Algotech?
            <div><i class="fas fa-chevron-down" style="color: #004080;"></i></div>
            <span x-show="dynamic === &#x27;_disO&#x27;" class="inline-block text-2xl">
              <svg stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"></path>
              </svg></span><span x-show="dynamic === &#x27;&#x27;" class="inline-block text-2xl"><svg stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0V0z"></path>
                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
              </svg></span></div>
          <div :data-headlessui-state="open ? &#x27;open&#x27;: &#x27;&#x27;" class="px-4 mt-2 mb-4" x-show="open">
            Algotech berlokasi di Jl Mongonsidi No 6 ( Indigo Space Telkom ) Medan, Sumatera Utara, Indonesia</div>
        </div>
        
        {{-- FAQ 1 --}}
        <div :data-headlessui-state="open ? &#x27;open&#x27;: &#x27;&#x27;" class="border-b border-blue-300 dark:border-slate-700" x-data="{open: false}">
          <div :data-headlessui-state="open ? &#x27;open&#x27;: &#x27;&#x27;" class="flex items-center justify-between w-full px-4 py-4 text-lg font-medium text-left hover:bg-blue-200 dark:hover:bg-slate-900" x-on:click="open = !open">
            Berapa lama pengerjaan website?
            <div><i class="fas fa-chevron-down" style="color: #004080;"></i></div>
            <span x-show="dynamic === &#x27;_disO&#x27;" class="inline-block text-2xl"><svg stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"></path>
              </svg></span><span x-show="dynamic === &#x27;&#x27;" class="inline-block text-2xl"><svg stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0V0z"></path>
                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
              </svg></span></div>
          <div :data-headlessui-state="open ? &#x27;open&#x27;: &#x27;&#x27;" class="px-4 mt-2 mb-4 text-base" x-show="open">
            Pengerjaan website minimal satu bulan dan data diserahkan kepada team Algotech maksimal 1 minggu setelah tanda tangan projek.</div>
        </div>
        
        {{-- FAQ 1 --}}
        <div :data-headlessui-state="open ? &#x27;open&#x27;: &#x27;&#x27;" class="border-b border-blue-300 dark:border-slate-700" x-data="{open: false}">
          <div :data-headlessui-state="open ? &#x27;open&#x27;: &#x27;&#x27;" class="flex items-center justify-between w-full px-4 py-4 text-lg font-medium text-left hover:bg-blue-200 dark:hover:bg-slate-900" x-on:click="open = !open">
            Apakah Algotech menyediakan jasa SEO?
            <div><i class="fas fa-chevron-down" style="color: #004080;"></i></div>
            <span x-show="dynamic === &#x27;_disO&#x27;" class="inline-block text-2xl"><svg stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"></path>
              </svg></span><span x-show="dynamic === &#x27;&#x27;" class="inline-block text-2xl"><svg stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0V0z"></path>
                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
              </svg></span></div>
          <div :data-headlessui-state="open ? &#x27;open&#x27;: &#x27;&#x27;" class="px-4 mt-2 mb-4 text-base" x-show="open">
            Kami menyediakan jasa SEO untuk website yang sudah ada, dan kami juga membantu website anda agar mudah di cari dalam pencarian google.</div>
        </div>
        
        {{-- FAQ 1 --}}
        <div :data-headlessui-state="open ? &#x27;open&#x27;: &#x27;&#x27;" class="border-b border-blue-300 dark:border-slate-700" x-data="{open: false}">
          <div :data-headlessui-state="open ? &#x27;open&#x27;: &#x27;&#x27;" class="flex items-center justify-between w-full px-4 py-4 text-lg font-medium text-left hover:bg-blue-200 dark:hover:bg-slate-900" x-on:click="open = !open">
            Apakah Algotech menyediakan jasa maintenance website?
            <div><i class="fas fa-chevron-down" style="color: #004080;"></i></div>
            <span x-show="dynamic === &#x27;_disO&#x27;" class="inline-block text-2xl"><svg stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"></path>
              </svg></span><span x-show="dynamic === &#x27;&#x27;" class="inline-block text-2xl"><svg stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0V0z"></path>
                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
              </svg></span></div>
          <div :data-headlessui-state="open ? &#x27;open&#x27;: &#x27;&#x27;" class="px-4 mt-2 mb-4 text-base" x-show="open">
            Ya, selain pembuatan website, Algotech juga menyediakan jasa maintenance dan pemeliharaan website.
          </div>
        </div>
        
        {{-- FAQ 1 --}}
        <div :data-headlessui-state="open ? &#x27;open&#x27;: &#x27;&#x27;" class="border-b border-blue-300 dark:border-slate-700" x-data="{open: false}">
          <div :data-headlessui-state="open ? &#x27;open&#x27;: &#x27;&#x27;" class="flex items-center justify-between w-full px-4 py-4 text-lg font-medium text-left hover:bg-blue-200 dark:hover:bg-slate-900" x-on:click="open = !open">
            Apakah Algotech Menyediakan jasa manajemen sosial media?
            <div><i class="fas fa-chevron-down" style="color: #004080;"></i></div>
            <span x-show="dynamic === &#x27;_disO&#x27;" class="inline-block text-2xl"><svg stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"></path>
              </svg></span><span x-show="dynamic === &#x27;&#x27;" class="inline-block text-2xl"><svg stroke="currentColor" fill="currentColor" strokeWidth="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0V0z"></path>
                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
              </svg></span></div>
          <div :data-headlessui-state="open ? &#x27;open&#x27;: &#x27;&#x27;" class="px-4 mt-2 mb-4 text-base" x-show="open">
            Jika anda mempunyai sosial media untuk usaha atau perusahaan anda dan ingin mendapatkan citra baik kepada client anda, kami dapat membantu dalam menajemen sosial media anda.</div>
        </div>

      </div>
    </div>
  </div>

@endsection