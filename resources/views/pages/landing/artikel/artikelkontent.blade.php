@extends('layouts.front')
@section('title','About Us')
@section('content')

<section class="pt-20 bg-gray-50">
  <div class="px-20 lg:py-10 md:mx-5 lg:my-20 md:flex justify-normal">

<main class="w-10/12 pt-8 pb-16 lg:px-12 lg:pt-16 lg:pb-24 dark:bg-gray-900 lg:mt-10">
  <div class="flex justify-between min-w-full p-6 mx-auto bg-white ">
      <article class="w-full mx-auto max-w-7xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-5xl dark:text-white">{{ $artikel->name_artikel }}</h1>
          </header>
          <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
          <div class="max-w-3xl py-5 mx-auto max-h-fit">
          <img class="mx-auto" src="{{ url('storage/' . $artikel->foto_artikel) }}" alt="">
          <div class=""><p>Dipublish pada: {{ date('j F Y', strtotime($artikel->created_at))}}</p></div>
          </div>
          
          <div class="text-base md:p-40 md:text-md ">{!!$artikel->deskripsi_artikel!!}</div>

          
      </article>
  </div>
</main>

<aside aria-label="Related articles" class="py-8 lg:py-24 dark:bg-gray-800">
  <div class="max-w-screen-xl px-4 mx-auto lg:mt-10">
      <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Related articles</h2>
      <div class="grid grid-cols-2 gap-10 md:hidden">
          <article class="max-w-xs">
              <a href="#">
                  <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png" class="mb-5 rounded-lg" alt="Image 1">
              </a>
              <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                  <a href="#">Our first office</a>
              </h2>
              <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many changes! After months of preparation.</p>
              <a href="#" class="inline-flex items-center font-medium text-blue-600 underline underline-offset-4 dark:text-primary-500 hover:no-underline">
                  Read in 2 minutes
              </a>
          </article>
          <article class="max-w-xs">
              <a href="#">
                  <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-2.png" class="mb-5 rounded-lg" alt="Image 2">
              </a>
              <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                  <a href="#">Enterprise design tips</a>
              </h2>
              <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many changes! After months of preparation.</p>
              <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                  Read in 12 minutes
              </a>
          </article>
          <article class="max-w-xs">
              <a href="#">
                  <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-3.png" class="mb-5 rounded-lg" alt="Image 3">
              </a>
              <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                  <a href="#">We partnered with Google</a>
              </h2>
              <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many changes! After months of preparation.</p>
              <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                  Read in 8 minutes
              </a>
          </article>
          <article class="max-w-xs">
              <a href="#">
                  <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-4.png" class="mb-5 rounded-lg" alt="Image 4">
              </a>
              <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                  <a href="#">Our first project with React</a>
              </h2>
              <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many changes! After months of preparation.</p>
              <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                  Read in 4 minutes
              </a>
          </article>
      </div>

      <div class="hidden md:grid md:grid-cols-1">
        @foreach ($artikels as $artikel)
        <article class="max-w-xs">
          <form action="{{ route('section_artikel', $artikel) }}" method="get">
            <button type="submit">
            <a href="#">
                <img src="{{ url('storage/' . $artikel->foto_artikel) }}" class="mb-5 rounded-lg" alt="Image 1">
            </a>
            <h2 class="mb-1 text-base font-bold leading-tight text-justify text-gray-900 dark:text-white">
                <a href="#">{{ $artikel->name_artikel }}</a>
            </h2>
            <p class="mb-4 font-light text-left text-gray-500 dark:text-gray-400">{{ date('j F Y', strtotime($artikel->created_at))}}</p>
            </button>
          </form>
        </article>
        @endforeach

    </div>
  </div>
</aside>

</div>



  
</section>

@endsection