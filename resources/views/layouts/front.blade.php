<!DOCTYPE html>
<html x-data="{colorMode: localStorage.getItem('colorMode') || localStorage.setItem('colorMode', 'light')}" x-init="$watch('colorMode', val => localStorage.setItem('colorMode', val))" x-bind:class="{'dark': colorMode === 'dark' || (colorMode === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)}" class="scroll-smooth">

<head>
    <!-- META -->
    @include('includes.landing.meta')
    <title>@yield('title') | ALGOTECH</title>
  
    <!-- CSS STYLE -->
    @stack('before-style')
    @include('includes.landing.style')
    @stack('after-style')

</head>

<body x-data="{'openDialogId': ''}" x-on:keydown.escape="openDialogId=''" class="font-body antialiased text-[#41454c] bg-[#FFFFFF] dark:text-[#b3c3d9] dark:bg-[#000000]">
  
    @include('includes.landing.header')

    @yield('content')

    @include('includes.landing.footer')

    <!-- JS -->
    @stack('before-script')
    @include('includes.landing.script')
    @stack('after-script')

</body>
</html>