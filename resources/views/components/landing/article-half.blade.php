<!-- ARTICLE SECTION -->
<div class="py-10">
    <div class="container px-4 mx-auto">
      <div class=" md:w-5/6 md:mx-auto md:max-w-2xl">
        <h1 class="text-4xl font-bold text-center text-color-second dark:text-white sm:text-4xl">ARTICLE</h1>
        <a href="#" class="block mx-auto mt-2 mb-10 text-lg text-center ">SELENGKAPNYA >></a>
      </div>
    </div>

  {{-- CAROUSEL SECTION --}}
  <div class="wrapper">
    <div class="carousel owl-carousel ">
      @foreach ($artikels as $artikel)
      <form action="{{ route('section_artikel', $artikel) }}" method="get">
        <button type="submit">
          <div class="max-w-xs">
            <div class="relative">
              <img class="rounded-lg w-60" alt="ARTICLE" src="{{ url('storage/' . $artikel->foto_artikel) }}" />
              <div class=" right-3 left-3 bottom-3">

                <div class="p-4 bg-white left-3 bottom-3 rounded-global dark:bg-black">
                  <div class="flex items-center">
                    <p class="text-sm uppercase">{{ date('j F Y', strtotime($artikel->created_at))}} </p>
                  </div>
                  <h1 class="mt-2 mb-4 text-xl font-semibold text-justify text-black dark:text-white 2xl:text-2xl">{{  $artikel->name_artikel  }} </h1><a class="flex items-center gap-x-1.5" href="#">Read more<span class="order-last">
                      <div style="font-size:inherit;color:inherit;padding:2px"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                          <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                        </svg></div>
                    </span></a>
                </div>
              </div>
            </div>
          </div>
        </button>
      </form>
      @endforeach
      
</div>
{{-- end carousel --}}

    </div>
  </div>
<!--END ARTICLE SECTION -->