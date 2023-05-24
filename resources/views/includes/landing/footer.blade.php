<!-- FOOTER SECTION -->
<div class="bg-gray-900 md:p-6">
    <footer class="px-4 mx-auto max-w-screen-2xl md:px-8">
      <div class="grid grid-cols-1 gap-12 pt-10 mb-16 md:grid-cols-3 lg:grid-cols-4 lg:gap-2 lg:pt-12">
        <div class="col-span-full lg:col-span-1">
          <div class="mb-4 lg:-mt-2 lg:w-full">
            
            <a class="inline-flex items-center gap-2 text-xl font-bold text-gray-100 md:text-2xl" href="#">
            <img class="w-1/6" src="{{ asset('/images/logoAlgotechMini.png') }}" alt="">
            <span class="">ALGOTECH</span></a></div>
            <p class="mb-6 text-justify text-gray-400 sm:pr-8 lg:max-w-sm ">Algotech perusahaan dan jasa pembuatan website di medan, sudah berdiri sejak tahun 2013 dan berpengalaman lebih dari 50 perusahaan telah ditangani.</p>
            
            <div class="flex items-center gap-5 pt-10 justify-normal">
              <a href="{{ url('https://www.instagram.com/algotech.co.id/') }}" target="_blank" rel="noopener noreferrer"><i  class="socmed fab fa-instagram fa-lg"></i></a>
              <a href="{{ url('https://twitter.com/Algo_tech') }}" target="_blank" rel="noopener noreferrer"><i class="socmed fab fa-twitter fa-lg"></i></a>
              <a href="{{ url('https://web.facebook.com/algotech.id?_rdc=1&_rdr') }}" target="_blank" rel="noopener noreferrer"><i class="socmed fab fa-facebook-f fa-lg"></i></a>
              <a href="{{ url('https://www.linkedin.com/in/algotech/') }}" target="_blank" rel="noopener noreferrer"><i class="socmed fab fa-linkedin-in fa-lg" target="_blank" rel="noopener noreferrer"></i></a>
              <a href="{{ url('https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=info@algotech.co.id') }}" target="_blank" rel="noopener noreferrer"><i class=" socmed far fa-at fa-lg"></i></a>
            </div>
            
            <a href="{{ url('https://www.bloggermedan.com/') }}" target="_blank" rel="noopener noreferrer">
              <img class="w-24 py-5" src="{{ asset('/images/Logo BLOG M.png') }}" alt="">
            </a>
        </div>
        
        <div class="">
          <div class="mb-4 font-bold tracking-widest text-gray-100 uppercase ">Contact</div>
          <nav class="flex flex-col gap-4">

            <div class="flex items-center pt-5 justify-normal">
              <i class="px-4 fas fa-map-marker-alt fa-lg"></i>
              <p class="text-sm text-gray-400">Jl Mongonsidi No 6 (Indigo Space Telkom)
                Medan, Sumatera Utara, Indonesia</p>
            </div>
      
            <div class="flex items-center pt-5 justify-normal">
              <i class="px-4 fas fa-envelope fa-lg"></i>
              <p class="text-sm text-gray-400">info@algotech.co.id<br>
                algoritma.tech@gmail.com</p>
            </div>
      
            <div class="flex items-center pt-5 justify-normal">
              <i class="px-4 fas fa-phone-alt fa-lg"></i>
              <p class="text-sm text-gray-400">0812 6363 0633</p>
            </div>
          </nav>
        </div>

        <div class="w-1/2">
          <div class="mb-4 font-bold tracking-widest text-gray-100 uppercase"> Products</div>
          <nav class="flex flex-col gap-4">
            <div class=""><a class="text-gray-400 transition duration-100 hover:text-orange-500 active:text-orange-600" href="Domain.html">Domain</a></div>
            <div class=""><a class="text-gray-400 transition duration-100 hover:text-orange-500 active:text-orange-600" href="Hosting.html">Hosting</a></div>
            <div class=""><a class="text-gray-400 transition duration-100 hover:text-orange-500 active:text-orange-600" href="website.html">Website</a></div>
            <div class=""><a class="text-gray-400 transition duration-100 hover:text-orange-500 active:text-orange-600" href="jasa_logo.html">Desain Logo</a></div>
            <div class=""><a class="text-gray-400 transition duration-100 hover:text-orange-500 active:text-orange-600" href="jasa_feed.html">Desain Sosmed</a></div>
            <div class=""><a class="text-gray-400 transition duration-100 hover:text-orange-500 active:text-orange-600" href="jasa_admin.html">Admin Sosmed</a></div>
            <div class=""><a class="text-gray-400 transition duration-100 hover:text-orange-500 active:text-orange-600" href="jasa_certificate.html">Desain Sertifikat</a></div>
          </nav>
        </div>

        <div class="w-1/2">
          <div class="mb-4 font-bold tracking-widest text-gray-100 uppercase">Company</div>
          <nav class="flex flex-col gap-4">
            <div class=""><a class="text-gray-400 transition duration-100 hover:text-orange-500 active:text-orange-600" href="{{ route('index') }}">Dashboard</a></div>
            <div class=""><a class="text-gray-400 transition duration-100 hover:text-orange-500 active:text-orange-600" href="{{ route('aboutUs.landing') }}">About Us</a></div>
            <div class=""><a class="text-gray-400 transition duration-100 hover:text-orange-500 active:text-orange-600" href="#">Article</a></div>
            <div class=""><a class="text-gray-400 transition duration-100 hover:text-orange-500 active:text-orange-600" href="{{ route('index') }}">FAQ</a></div>
            <div class=""><a class="text-gray-400 transition duration-100 hover:text-orange-500 active:text-orange-600" href="{{ route('contact.landing') }}">Contact</a></div>
            <div class=""><a class="text-gray-400 transition duration-100 hover:text-orange-500 active:text-orange-600" href={{ url('"https://api.whatsapp.com/send?phone=6281263630633&text=Halo%20algotech,%20Saya%20mau%20order') }}" target="_blank" rel="noopener noreferrer">Customer Service</a></div>
          </nav>
        </div>
      </div>
      <div class="py-8 text-sm text-center text-gray-400 border-t border-gray-800">© 2023 - Present Algotech. All rights reserved.</div>
    </footer>
  </div>
<!-- END FOOTER SECTION -->