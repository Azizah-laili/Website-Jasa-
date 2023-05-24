<!-- NAVBAR -->
<nav class="absolute z-40 w-full bg-indigo-200 drop-shadow-lg dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <a href="{{ route('index') }}" class="flex items-center">
            <img src="{{ asset('/images/logoAlgotech.png') }}" class="h-10 mr-3" alt="Algotech Logo" />
        </a>
        
        <div class="flex items-center md:order-2">   

            <button type="button" class="btn bg-gradient-to-br" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            <span class="sr-only">Open user menu</span>
            <span class="block p-2 text-sm font-semibold dark:text-white">Member</span>
            </button>

            @if(Auth::check()&&Auth::user()->is_admin)
            @auth
                <div class="hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                  <div class="px-4 py-3">
                      <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                      <span class="block text-sm text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                  </div>
                  <ul class="py-2" aria-labelledby="user-menu-button">
                      <li>
                      <a href="{{ route('index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Home</a>
                      </li>
                      <li>
                          <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                      </li>
                      <li>
                        <a href="{{ route('index_dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                     
                  </ul>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
                </div>
                @endauth
            @elseif (Route::has('login'))
            @auth
                <div class="hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                  <div class="px-4 py-3">
                      <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                      <span class="block text-sm text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                  </div>
                  <ul class="py-2" aria-labelledby="user-menu-button">
                      <li>
                      <a href="{{ route('index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Home</a>
                      </li>
                      <li>
                          <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                      </li>
                      <li>
                      <a href="{{ route('all_cart') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Cart</a>
                      </li>
                     
                  </ul>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
                </div>
                @else
                <div class="hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow lg:w-44 dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                  <ul class="py-2" aria-labelledby="user-menu-button">
                      <li>
                      <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Login</a>
                      </li>
                      <li>
                          <a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Register</a>
                      </li>
                  </ul>
                </div>
                @endauth
            @endif
            
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>

        <div class="items-center justify-between hidden w-full bg-indigo-200 md:flex md:w-auto md:order-1" id="mobile-menu-2">
          <ul class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="{{ route('index') }}" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
            </li>

            <li>
              <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                Semua Layanan
                <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg></button>
                
                <!-- DROPDOWN MENU -->
                <div id="dropdownNavbar" class="hidden w-auto px-4 py-2 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-2 text-base text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                      <li>
                        <a href="{{ route('domain.landing') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Domain</a>
                      </li>
                      <li>
                        <a href="{{ route('hosting.landing') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hosting</a>
                      </li>
                      <li>
                        <a href="{{ route('website.landing') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Paket Website</a>
                      </li>
                      <li>
                        <a href="{{ route('logo.landing') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Desain Logo</a>
                      </li>
                      <li>
                        <a href="{{ route('certificate.landing') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Desain Sertifikasi</a>
                      </li>
                      <li>
                        <a href="{{ route('design.landing') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Desain Sosial Media</a>
                      </li>
                      <li>
                        <a href="{{ route('admin.landing') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Admin Sosial Media</a>
                      </li>
                    </ul>
                </div>
            </li>

            <li>
            <a href="{{ route('semuaartikel.landing') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-indigo-200 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Article</a>
            </li>
            <li>
                <a href="{{ route('aboutUs.landing') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-indigo-200 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About Us</a>
            </li>
            <li>
                <a href="{{ route('contact.landing') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-indigo-200 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
            </li>
        </ul>
        </div>

    </div>
  </nav>
<!-- END NAVBAR-->