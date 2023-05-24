@extends('layouts.front')
@section('title','Checkout')
@section('content')
<!-- ALL CART SECTION -->
<section class="w-full px-3 py-20 md:px-10">
    <div class="pt-20 pb-10"><h1 class="text-xl font-bold text-center text-gray-700">ALL CART ITEMS</h1></div>
    
    <div class="grid w-full grid-cols-1 gap-5 md:px-5 justify-normal lg:grid-cols-3 ">

    {{-- CART WEBSITE --}}
    @foreach ($cartwebsites as $cartwebsite)
   {{--  @dd($cartwebsite->trx()) --}}

    <div class="w-full p-5 bg-white border border-black rounded-lg shadow-lg">
       
        <div class="flex items-center justify-between pb-5">
            <form action="{{ route('delete_cartwebsite', $cartwebsite) }}" method="post">
                @method('delete')
                @csrf
             <button class="px-3 bg-red-400 rounded-full shadow-md"type="submit">
                <i class="fas fa-times fa-xs" style="color: white;"></i>
            </button>
            </form>
            
            <h1 class="p-2 text-white bg-red-500 rounded-lg">
                UNPAID
            </h1>
        </div>

        <div class="grid justify-between grid-cols-2 ">
            <h1 class="text-xl font-bold text-left text-gray-700"> INVOICE <span class="text-xl font-bold text-left text-blue-700">{{ $cartwebsite->id}}</span></h1>

            <div class="grid justify-center grid-cols-2 mx-auto">
                <p class="text-xs text-gray-500">Invoice date</p>
                <p class="text-xs text-gray-500">{{ date('j F Y', strtotime($cartwebsite->created_at))}}</p>
            </div>
        </div>

        <div class="grid justify-between grid-cols-1 pt-5 pb-5 md:items-center md:grid-cols-2">
            <h2 class="text-base font-bold text-left text-blue-800 md:text-lg"> {{$cartwebsite->website ? $cartwebsite->website->name_website : ''}}</h2>
            
            <h2 class="text-base font-bold text-right text-blue-800 md:text-lg">Rp {{$cartwebsite->website ? $cartwebsite->website->harga_website : ''}}</h2>
        </div>


        <div class="grid items-center grid-cols-1 gap-2 mx-auto md:py-4 md:justify-end md:grid-cols-2">
        
        @if ($cartwebsite->trx()->is_paid != 0 )
        <P> INVOICE</P>
        @else
        <form action="{{ route('checkout') }}" class="p-2 text-center text-white bg-blue-800 rounded-lg shadow-lg hover:bg-blue-800" method="get">
            @csrf
                <input type="hidden" name="product_id" value="{{$cartwebsite->id }}">
                <input type="hidden" name="product_name" value="cartwebsite">
            <button type="submit" > Check Out</button>
            </form>

            <form action="{{ route('edit_cartwebsite', $cartwebsite) }}" class="flex items-center justify-center" method="get">
                <button type="submit" class="flex items-center justify-center gap-1 p-2 md:mr-4">
                <i class="fas fa-edit fa-xs" style="color: #f92b2b;"></i>
                <p class="mt-1 text-red-500 text-md ">Edit</p>
                </button>
            </form>
        @endif
            

        </div>
    </div>
    @endforeach

    {{-- CART WEBSITE --}}
    @foreach ($carthostings as $carthosting)
    <div class="w-full p-5 bg-white border border-black rounded-lg shadow-lg">
       
        <div class="flex items-center justify-between pb-5">
            <form action="{{ route('delete_carthosting', $carthosting) }}" method="post">
                @method('delete')
                @csrf
             <button class="px-3 bg-red-400 rounded-full shadow-md"type="submit">
                <i class="fas fa-times fa-xs" style="color: white;"></i>
            </button>
            </form>
            
            <h1 class="p-2 text-white bg-red-500 rounded-lg">
                UNPAID
            </h1>
        </div>

        <div class="grid justify-between grid-cols-2 ">
            <h1 class="text-xl font-bold text-left text-gray-700"> INVOICE <span class="text-xl font-bold text-left text-blue-700">{{ $carthosting->id}}</span></h1>

            <div class="grid justify-center grid-cols-2 mx-auto">
                <p class="text-xs text-gray-500">Invoice date</p>
                <p class="text-xs text-gray-500">{{ date('j F Y', strtotime($carthosting->created_at))}}</p>
            </div>
        </div>

        <div class="grid justify-between grid-cols-1 pt-5 pb-5 md:items-center md:grid-cols-2">
            <h2 class="text-base font-bold text-left text-blue-800 md:text-lg"> {{$carthosting->hosting ? $carthosting->hosting->name_hosting : ''}}</h2>
            
            <h2 class="text-base font-bold text-right text-blue-800 md:text-lg">Rp {{$carthosting->hosting ? $carthosting->hosting->harga_hosting : ''}}</h2>
        </div>


        <div class="grid items-center grid-cols-1 gap-2 mx-auto md:py-4 md:justify-end md:grid-cols-2">
            
            <form action="{{ route('checkout') }}" class="p-2 text-center text-white bg-blue-800 rounded-lg shadow-lg hover:bg-blue-800" method="get">
            @csrf
                <input type="hidden" name="product_id" value="{{$carthosting->id }}">
                <input type="hidden" name="product_name" value="carthosting">
            <button type="submit" > Check Out</button>
            </form>

            <form action="{{ route('edit_carthosting', $carthosting) }}" class="flex items-center justify-center" method="get">
                <button type="submit" class="flex items-center justify-center gap-1 p-2 md:mr-4">
                <i class="fas fa-edit fa-xs" style="color: #f92b2b;"></i>
                <p class="mt-1 text-red-500 text-md ">Edit</p>
                </button>
            </form>
        </div>
    </div>
    @endforeach

    {{-- CART CERTIFICATE, LOGO, ADMIN SOSMED, DESAIN SOSMED--}}
    @foreach ($cartdesigns as $cartdesign)
    <div class="w-full p-5 bg-white border border-black rounded-lg shadow-lg">
       
        <div class="flex items-center justify-between pb-5">
            <form action="{{ route('delete_cartdesign', $cartdesign) }}" method="post">
                @method('delete')
                @csrf
             <button class="px-3 bg-red-400 rounded-full shadow-md" type="submit">
                <i class="fas fa-times fa-xs" style="color: white;"></i>
            </button>
            </form>
            
            <h1 class="p-2 text-white bg-red-500 rounded-lg">
                UNPAID
            </h1>
        </div>

        <div class="grid justify-between grid-cols-2 ">
            <h1 class="text-xl font-bold text-left text-gray-700"> INVOICE <span class="text-xl font-bold text-left text-blue-700">{{ $cartdesign->id}}</span></h1>

            <div class="grid justify-center grid-cols-2 mx-auto">
                <p class="text-xs text-gray-500">Invoice date</p>
                <p class="text-xs text-gray-500">{{ date('j F Y', strtotime($cartdesign->created_at))}}</p>
            </div>
        </div>

        <div class="grid justify-between grid-cols-1 pt-5 pb-5 md:items-center md:grid-cols-2">
            <h2 class="text-base font-bold text-left text-blue-800 md:text-lg"> 
                {{$cartdesign->logo ? $cartdesign->logo->name_logo : ''}}
                {{ $cartdesign->certificate ? $cartdesign->certificate->name_certificates : '' }}
                {{-- {{$cartdesign->certificate && $cartdesign->certificate->name_certificates ? $cartdesign->certificate->name_certificates : ''}} --}}</h2>
            
            <h2 class="text-base font-bold text-right text-blue-800 md:text-lg">Rp 
                {{$cartdesign->logo ? $cartdesign->logo->harga_logo : ''}}
                {{ $cartdesign->certificate ? $cartdesign->certificate->harga_certificates : '' }}
                {{-- {{$cartdesign->certificate && $cartdesign->certificate->harga_certificates ? $cartdesign->certificate->harga_certificates : ''}} --}}</h2>
        </div>


        <div class="grid items-center grid-cols-1 gap-2 mx-auto md:py-4 md:justify-end md:grid-cols-2">
            <form action="{{ route('checkout') }}" class="p-2 text-center text-white bg-blue-800 rounded-lg shadow-lg hover:bg-blue-800" method="get">
                @if ($cartdesign->logo)
                    @php 
                    $partname ='logo';  
                    @endphp 
                @elseif($cartdesign->certificate)
                    @php 
                    $partname ='certificate';   
                    @endphp
                @elseif($cartdesign->admin_sosmed)
                    @php 
                    $partname ='adminsosmed';   
                    @endphp
                @elseif($cartdesign->design_sosmed)
                    @php 
                    $partname ='designsosmed';   
                    @endphp
                @endif
                <input type="hidden" name="product_id" value="{{$cartdesign->id }}">
                <input type="hidden" name="product_name" value="{{ $partname }}">
            <button type="submit" > Check Out</button>
            </form>

            <form action="{{ route('edit_cartdesign', $cartdesign) }}" class="flex items-center justify-center" method="get">
                <button type="submit" class="flex items-center justify-center gap-1 p-2 md:mr-4">
                <i class="fas fa-edit fa-xs" style="color: #f92b2b;"></i>
                <p class="mt-1 text-red-500 text-md ">Edit</p>
                </button>
            </form>
        </div>
    </div>
    @endforeach
    </div>
</section>
<!-- ALL CART SECTION -->
@endsection