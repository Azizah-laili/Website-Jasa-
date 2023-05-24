
@extends('layouts.front')
@section('title','Desain')
@section('content')
<!-- DESAIN CART SECTION -->

  <section class="py-20 bg-blue-50">
    <div class="mt-20 sm:py-8 lg:py-12">
      <div class="px-10 py-10 mx-auto bg-white rounded-lg shadow-2xl max-w-7xl dark:bg-gray-800 lg:flex-shrink-1 lg:p-12" data-aos="fade-right">
          <h3 class="text-3xl font-extrabold leading-8 text-gray-900 dark:text-white sm:leading-9 lg:text-4xl">KONFIGURASI PAKET</h3>
          <p class="mt-6 text-base leading-6 text-gray-500 dark:text-gray-200">Please review your packet selections and any addons that are available for them.</p>
          <div class="mt-8">
            <div class="flex items-center">
              <h4 class="flex-shrink-0 pr-4 text-sm font-semibold leading-5 tracking-wider uppercase bg-white dark:bg-gray-800 text-primary 2xl:text-lg">PACKET</h4>
              <div class="flex-1 border-t-2 border-gray-200 2xl:border-gray-400"> </div>
            </div>
            <p class="mt-6 mb-10 text-base leading-6 text-gray-400 dark:text-gray-200">Harga tertera masih estimasi dan belum harga final. Info lebih lanjut terkait biaya akan diinfokan oleh Account Manager kami*</p>
            <div class="grid mt-6 text-center sm:grid-cols-2 lg:max-w-7xl xl:max-w-6xl xl:mx-auto 2xl:text-left">
              <div class="px-5 py-6 bg-yellow-100 sm:bg-gradient-to-l sm:from-yellow-100 sm:to-white">
                <h1 class="text-2xl font-semibold 2xl:font-normal 2xl:text-lg">Nama Paket</h1> 
                <p class="font-extrabold text-base mt-4 text-gray-700 lg:max-w-xs lg:mx-auto 2xl:max-w-[500px] 2xl:text-4xl 2xl:mt-[25px]">{{ $logo ? $logo->name_logo:''}}{{ $certificate ? $certificate->name_certificates:''}}</p>
              </div>
              <div class="px-5 py-6 bg-teal-100 from-teal-100 sm:bg-gradient-to-r sm:to-white">
                <h1 class="text-2xl font-semibold 2xl:text-lg 2xl:font-normal">Estimasi Biaya Per Tahun*</h1>
                <p class="font-extrabold text-base mt-4 text-gray-700 lg:max-w-xs lg:mx-auto 2xl:text-4xl 2xl:mt-[25px] 2xl:max-w-[500px]">{{ $logo ? $logo->harga_logo:''}}{{ $certificate ? $certificate->harga_certificates:''}}</p>
              </div>
            </div>
          </div>
          <form  action="{{ route('update_cartdesign', $cartdesign) }}" method="POST" >
            @method('patch')
            @csrf
          <div class="mt-8">
            <div class="flex items-center">
              <h4 class="flex-shrink-0 pr-4 text-sm font-semibold leading-5 tracking-wider uppercase bg-white dark:bg-gray-800 text-primary 2xl:text-lg"> Pilih Durasi Paket</h4>
              <div class="flex-1 border-t-2 border-gray-200 2xl:border-gray-400"> </div>
            </div>
            <div class="w-full mt-4"><label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">
                <p class="">Deskripsikan desain yang anda inginkan?</p>
              </label><textarea name="deskripsi_desain" class="block w-full h-40 px-4 py-2 text-gray-700 bg-white border border-gray-400 rounded-global focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-blue-300 2xl:border-gray-400 2xl:bg-blue-50">
                {{ $cartdesign->deskripsi_desain }}  
              </textarea></div>
             
              <form class="flex justify-center gap-10 py-5 mx-auto my-5 ">
                <div class="flex justify-center gap-4 py-5 mx-auto my-5 ">
                  <a href="{{ route('logo.landing') }}" class="inline-block px-8 py-3 text-sm font-semibold text-center text-gray-900 transition duration-100 border border-indigo-500 rounded-lg outline-none hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 md:text-base 2xl:py-5" >
                    < Cancel</a>

                  <button type="submit" id="hmcpgs" class="inline-block px-8 py-3 text-sm font-semibold text-center text-white transition duration-100 bg-indigo-500 rounded-lg outline-none hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 md:text-base 2xl:py-5">
                Continue</button></form>

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

<!-- END DESAIN CART SECTION -->
@endsection