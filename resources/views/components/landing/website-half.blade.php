
<!-- WEBSITE -->
<section class="py-8 my-20 leading-7 sm:py-12 md:py-16 lg:py-24" id="website">
    <div class="box-border px-4 mx-auto border-solid sm:px-6 lg:px-8 max-w-7xl">
      <div class="flex flex-col items-center py-10 leading-7 text-center border-0 border-gray-200 text-color-second">
        <h2 class="box-border m-0 text-3xl font-black leading-tight tracking-tight border-solid text-color-second dark:text-white md:text-4xl lg:text-4xl">PROMO WEBSITE MURAH</h2>
        <p class="box-border mt-2 text-xl tracking-tight text-gray-500 border-solid dark:text-white md:text-lg">Garansi 3 bulan setelah pengerjaan</p>
      </div>
      
      <div class="grid grid-cols-1 gap-4 mt-4 leading-7 border-0 border-gray-200 dark:border-primary-500 sm:mt-6 sm:gap-6 md:mt-8 md:gap-0 lg:grid-cols-3 xl:max-w-8xl xl:mx-auto" data-aos="fade-up">
        
        @foreach ($websites as $website)
        <div class="relative z-10 flex flex-col items-center max-w-md gap-5 p-6 mx-auto my-0 border border-solid rounded-global dark:border-gray-700 sm:p-6 md:my-8 md:p-8 lg:-mr-3">
          <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight border-0 border-gray-200 text-color-second dark:text-white sm:text-3xl md:text-4xl">{{ $website->name_website }}</h3>
          <div class="grid items-center justify-center grid-cols-1 mt-3 leading-7 text-center border-0 border-gray-200 md:flex text-color-second">
            <p class="rupiah">Rp</p>
            <p class="box-border m-0 text-4xl font-semibold leading-none border-solid md:text-6xl text-primary-500">{{ $website->harga_website }}</p>
            <p class="">/Tahun</p>
          </div>
          <div class="flex-1 w-full p-0 px-4 mt-4 ml-5 leading-7 text-gray-700 border-0 border-gray-200 item">
            {!!$website->deskripsi_website!!}
          </div>

          @if (Route::has('login'))
          @auth

          <form action="{{ route('cart_website.landing', $website) }}" method="get">
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
<!-- END WEBSITE -->