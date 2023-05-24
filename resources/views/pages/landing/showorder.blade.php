@extends('layouts.front')
@section('title','Checkout')
@section('content')

  @if ($product_name=='cartwebsite')
      @include('partials.showorder.orderwebsite')

  @elseif($product_name=='logo')
  @include('partials.showorder.orderlogo')
  
  @elseif($product_name=='certificate')
  @include('partials.showorder.ordercertificate')

  @elseif($product_name=='carthosting'&& $product->hosting)
  @include('partials.showorder.orderhosting')

  @endif

@endsection