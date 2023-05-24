@extends('layouts.front')
@section('title','Jasa domain')
@section('content')

<!-- HERO DOMAIN SECTION -->
<section class="py-5 md:py-20">
  <div class="py-10" style="background-image:url(/images/domain.png)">
    <div class="container px-6 py-16 mx-auto text-center md:py-20  2xl:py-[50px]">
      <div class="max-w-4xl mx-auto md:max-w-2xl  2xl:max-w-[900px]">
        <h1 class="text-3xl font-bold text-white md:text-5xl">Tentukan Domain kamu Sekarang!</h1>
        <p class="mt-6 text-white xl:max-w-full xl:mx-auto ">Cek nama domain yang Anda inginkan, dan temukan domain impian Anda di sini
        </p>

        <div class="w-full max-w-lg mx-auto mt-6 bg-transparent border shadow-xl rounded-global focus-within:border-blue-400 focus-within:ring focus-within:ring-blue-300 focus-within:ring-opacity-40 dark:border-gray-700 dark:focus-within:border-blue-300 2xl:border-blue-500">
          <form class="flex flex-col rounded-sm bg-blue-50 md:flex-row">
            <input class="flex-1 h-10 px-4 py-2 m-1 placeholder-gray-400 bg-white border-none appearance-none focus:outline-none focus:placeholder-transparent focus:ring-0" />
            <select class="border-none form-control" id="position-option" name="position_id">
             @foreach ($domains as $domain)
                 <option value="{{ $domain->id }}">{{ $domain->tld }}</option>
              @endforeach 
           </select>
           @if (Route::has('login'))
          @auth
          <form action="{{ route('cart_domain.landing', $domain) }}" method="get">
            <button type="submit" class="h-10 px-4 py-2 m-1 text-white transition-colors duration-200 transform bg-primary-500 rounded-global hover:bg-primary-300 focus:outline-none focus:bg-blue-400 2xl:px-[30px]">
              <p class="">Checkout</p>
           </button>
          </form>

          @else
          <form action="{{ route('login') }}" method="get">
            <button type="submit"class="h-10 px-4 py-2 m-1 text-white transition-colors duration-200 transform bg-primary-500 rounded-global hover:bg-primary-300 focus:outline-none focus:bg-blue-400 2xl:px-[30px]">
              <p class="">Checkout</p>
           </button>
          </form>
          @endauth
          @endif
           {{--  <button id="fhxDdA" class="h-10 px-4 py-2 m-1 text-white transition-colors duration-200 transform bg-primary-500 rounded-global hover:bg-primary-300 focus:outline-none focus:bg-blue-400 2xl:px-[30px]">Search</button></form> --}}
        </div>

      </div>
    </div>
    <!-- KONFIRMASI DOMAIN -->
    <div class="pb-[50px]">
      <div class="bg-green-100  rounded-lg max-w-2xl flex justify-center items-center  mx-auto px-2 py-3 sm:px-6 sm:py-[5px] lg:px-8  xl:px-10 " data-aos="fade-up-right">
        <div class="w-auto sm:flex justify-between items-center px-[5px] lg:pr-8 xl:pr-0">
          <span class="block ">
            <i class="mx-auto fas fa-check" style="color: #008040;"></i>
          </span>

          <p class="w-full max-w-xl px-5 my-auto text-lg font-medium tracking-wider text-green-600 xl:mt-3 xl:text-xl"> Selamat! Azizahlailiporto.xyz Belum Terdaftar!</p>

        </div>
      </div>
    </div>
    <!--END KONFIRMASI DOMAIN -->
  </div>
</section>
<!-- HERO DOMAIN SECTION -->

<!-- PROMO DOMAIN -->
<div class="grid-cols-2 mx-auto dark:bg-gray-900">
  <div class="grid grid-cols-3 gap-2 px-6 mx-auto gap-y-8 lg:grid-cols-4 xl:max-w-5xl xl:grid-cols-6" data-aos="fade-left">
    <div class="pl-3 bg-blue-100 border-l-4 border-primary-500">
      <h1 class="font-black text-gray-700 dark:text-gray-100">.com</h1>
      <p class="font-semibold text-gray-500 dark:text-gray-200">200.000</p>
    </div>
    <div class="pl-3 border-l-4 bg-blue-50 border-primary-500">
      <h1 class="font-black text-gray-700 dark:text-gray-200">.co.id</h1>
      <p class="font-semibold text-gray-500 dark:text-gray-200">300.000</p>
    </div>
    <div class="pl-3 border-l-4 bg-blue-50 border-primary-500 2xl:pl-3">
      <h1 class="font-black text-gray-700 dark:text-gray-200">.id</h1>
      <p class="font-semibold text-gray-500 dark:text-gray-200">200.000</p>
    </div>
    <div class="pl-3 border-l-4 bg-blue-50 border-primary-500">
      <h1 class="font-black text-gray-700 dark:text-gray-200">.sch.id</h1>
      <p class="font-semibold text-gray-500 dark:text-gray-200">200.000</p>
    </div>
    <div class="pl-3 border-l-4 bg-blue-50 border-primary-500">
      <h1 class="font-black text-gray-700 dark:text-gray-100">.com</h1>
      <p class="font-semibold text-gray-500 dark:text-gray-200">200.000</p>
    </div>
    <div class="pl-3 border-l-4 bg-blue-50 border-primary-500">
      <h1 class="font-black text-gray-700 dark:text-gray-100">.com</h1>
      <p class="font-semibold text-gray-500 dark:text-gray-200">200.000</p>
    </div>
  </div>
</div>
<!-- END PROMO DOMAIN -->

<!-- DAFTAR HARGA DOMAIN -->
<div class="py-20 mx-auto my-10">
  <table class="max-w-[1200px] mx-auto table-auto w-full min-w-[500px] 2xl:w-full" data-aos="fade-down">
    
    <tr class="h-[50px] font-bold tracking-widest text-[19px] bg-blue-100 border-b">
      <th class="w-[100px] bg-blue-100">TLD</th>
      <th class="w-[100px]">YEAR</th>
      <th class="bg-gradient-to-br from-indigo-500 to-blue-600 text-white w-[150px]">REGISTER</th>
      <th class="w-[150px]">TRANSFER</th>
      <th class="w-[150px]">RENEW</th>
    </tr>
    
    @foreach ($domains as $domain)
    <tr class="text-center text-lg h-[50px] border-solid border-b">
      <td class="">{{ $domain->tld }}</td>
      <td class="">{{ $domain->year}}</td>
      <td class="text-white bg-blue-600">{{ $domain->register}}</td>
      <td class="">{{ $domain->transfer }}</td>
      <td class="">{{ $domain->renew }}</td>
    </tr>
    @endforeach

  </table>
</div>
<!--END DAFTAR HARGA DOMAIN -->
{{-- CS SECTION --}}
@include('components.landing.cs')

{{-- PARTNER AND CLIENT SECTION --}}
@include('components.landing.mitra')

{{-- ARTICLE SECTION --}}
@include('components.landing.article-half')

@endsection