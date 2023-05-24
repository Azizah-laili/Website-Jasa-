@extends('layouts.front')
@section('title','About Us')
@section('content')

<!-- HERO SECTION ABOUT US -->
<div class="relative overflow-hidden bg-no-repeat bg-cover" style=" background-position: 50%; background-image: url('{{ asset('/images/hero-About.png') }}'); height: 500px;">
    <div class="absolute top-0 bottom-0 left-0 right-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.75)">
      <div class="flex items-center justify-center h-full">
        <div class="px-6 text-center text-gray-500 md:px-12">
          <h3 class="max-w-4xl mb-8 text-lg font-extrabold sm:text-2xl">“ Dalam 5 tahun kedepan Algotech akan membangun system informasi yang berkualitas untuk akademik kampus dan digunakan di seluruh kampus di Sumatera-utara. ”</h3>
        </div>
      </div>
    </div>
  </div>
<!--END HERO SECTION ABOUT US -->

<!-- TENTANG ALGOTECH -->
  <div class="py-10 md:py-16">
    <div class="max-w-7xl mx-auto flex items-center gap-6 px-5 flex-col py-14 md:flex-row lg:py-2 xl:py-0 2xl:max-w-[1500px]">
      <div class="flex flex-col mr-3 gap-7 lg:w-8/12 xl:w-3/5">
        <h1 class="text-4xl font-bold tracking-tight text-blue-900 dark:text-slate-100">TENTANG ALGOTECH</h1>
        <p class="text-base text-justify max-w-7xl lg:text-lg 2xl:text-gray-500">Algotech adalah sebuah perusahaan yang bergerak dibidang pelayanan teknologi informasi yang berdiri pada tanggal 1 Januari 2013. Algotech didirikan untuk membantu pengguna jasa informasi dalam hal memberikan solusi yang terbaik dalam bidang teknologi informasi dan memberikan sebuah gambaran bagaimana teknologi informasi dapat memberikan kontribusi yang banyak terhadap produktivitas perusahaan.
          Untuk mencapai tujuan tersebut kami lebih focus untuk memberikan solusi dari permasalahan yang ada dalam perusahaan. Dan kepuasan konsumen yang kami lihat bukan pada permasalahan saat ini saja, tetapi juga bagaimana membuat informasi teknologi yang ada dapat mencapai tujuan dari perusahaan tersebut.</p>
        <p class="max-w-2xl text-base text-justify lg:text-lg 2xl:text-gray-500">Kepercayaan konsumen merupakan asset yang berharga bagi kami. Untuk alasan tersebut kami akan selalu berintegrasi dan berkomitmen dalam hal kepuasan konsumen. Kami akan selalu meningkatkan pengetahuan dan keahlian kami untuk menjadi yang terdepan dalam hal teknologi informasi untuk mendukung tujuan kami yaitu kepuasan komsumen.</p>
      </div>
      <div class="w-full lg:w-7/12"><img class="sm:mx-9 sm:-my-16 md:mx-0 md:my-0 lg:w-full" alt="No alt" src="{{ asset('/images/Misi-About.jpg') }}" /></div>
    </div>
  </div>
<!--END TENTANG ALGOTECH -->

<!-- MISI ALGOTECH -->
  <div class="">
    <div class="px-4 py-12 mx-auto text-gray-700 max-w-7xl dark:text-gray-100 ">
      <h2 class="text-4xl font-extrabold tracking-tight text-center text-blue-900 dark:text-slate-100 sm:px-3 md:max-w-xl md:mx-auto lg:px-5 ">MISI ALGOTECH</h2>
      
      <div class="flex flex-col mt-5 lg:flex-row lg:max-w-6xl lg:mx-auto lg:mt-11 xl:items-center ">
        <img class="rounded-md lg:w-full lg:px-4 lg:mr-5 xl:h-min" alt="Misi Algotech" src="{{ asset('/images/COLABORATION.jpg') }}" />

        <div class="flex flex-col pl-5 mt-10 gap-y-10 lg:mt-0 lg:w-5/12 xl:w-4/12 2xl:w-full">
          <div class="mt-5">
            <div class="flex items-center gap-x-4">
              <div class="">
                <p class="flex items-center justify-center w-8 h-8 text-lg text-white rounded-full bg-primary">1</p>
              </div>
              <h1 class="text-lg text-slate-900 dark:text-slate-100">Mengembangkan Produk IT yang Kompetitif</h1>
            </div>
          </div>

          <div class="mt-5">
            <div class="flex items-center gap-x-4">
              <div class="">
                <p class="flex items-center justify-center w-8 h-8 text-lg text-white rounded-full bg-primary">2</p>
              </div>
              <h1 class="text-lg text-slate-900 dark:text-slate-100">Mengedepankan profesionalisme dan teamwork dalam
                menghasilkan layanan yang berkualitas</h1>
            </div>
          </div>
          <div class="mt-5">
            <div class="flex items-center gap-x-4">
              <div class="">
                <p class="flex items-center justify-center w-8 h-8 text-lg text-white rounded-full bg-primary">3</p>
              </div>
              <h1 class="text-lg text-slate-900 dark:text-slate-100">Memberikan layanan yang terbaik kepada klien</h1>
            </div>
          </div>
          <div class="mt-5">
            <div class="flex items-center gap-x-4">
              <div class="">
                <p class="flex items-center justify-center w-8 h-8 text-lg text-white rounded-full bg-primary">4</p>
              </div>
              <h1 class="text-lg text-slate-900 dark:text-slate-100">Mengembangkan kerjasama dan kemitraan usaha yang
                saling menguntungkan</h1>
            </div>
          </div>
          <div class="mt-5">
            <div class="flex items-center gap-x-4">
              <div class="">
                <p class="flex items-center justify-center w-8 h-8 text-lg text-white rounded-full bg-primary">5</p>
              </div>
              <h1 class="text-lg text-slate-900 dark:text-slate-100">Mengembangkan inovasi teknologi terbaik dan terkini
                dalam setiap produk</h1>
            </div>
          </div>
          <div class="mt-5">
            <div class="flex items-center gap-x-4">
              <div class="">
                <p class="flex items-center justify-center w-8 h-8 text-lg text-white rounded-full bg-primary">6</p>
              </div>
              <h1 class="text-lg text-slate-900 dark:text-slate-100">Meningkatkan benefit dan nilai tambah bagi klien</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection