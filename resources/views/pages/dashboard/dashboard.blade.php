@extends('layouts.back')
@section('title','Create website')
@section('content')

<section class="relative w-full h-full overflow-y-auto bg-gray-100 lg:ml-64 dark:bg-gray-900">
    <div class="flex items-center w-full px-4 py-8 m-auto mx-auto mt-5 sm:mt-10 md:mt-20">
        <div class="flex flex-row gap-10 pb-3 pl-16 item xl:divide-x xl:divide-y-0">
            
            <div class="p-2 bg-white rounded-lg shadow-lg sm:w-1/2">
                <div class="flex flex-col">
                    <div class="flex flex-row items-center justify-between px-4 py-4">
                        <div class="flex mr-4">
                        <span class="items-center px-4 py-4 m-auto bg-blue-200 rounded-full hover:bg-blue-300">
                            <i class="fa-lg fas fa-tags" style=" color: #0080c0;"></i>
                        </span>
                        </div>
                        
                    <div class="flex-1 pl-1">
                        <div class="text-xl font-medium text-gray-600">13</div>
                            <div class="text-sm text-gray-400 sm:text-base">
                                Total semua produk
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-2 bg-white rounded-lg shadow-lg sm:w-1/2">
                <div class="flex flex-col">
                <div class="flex flex-row items-center justify-between px-4 py-4">
                    <div class="flex mr-4">
                    <span class="items-center px-4 py-4 m-auto bg-red-200 rounded-full hover:bg-red-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="items-center w-8 h-8 m-auto text-red-500 hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </span>
                    </div>
                    <div class="flex-1 pl-1">
                    <div class="text-xl font-medium text-gray-600">105</div>
                    <div class="text-sm text-gray-400 sm:text-base">
                        Pemesanan
                    </div>
                    </div>
                </div>
                
                </div>
            </div>

            <div class="p-2 bg-white rounded-lg shadow-lg sm:w-1/2">
                <div class="flex flex-col">
                <div class="flex flex-row items-center justify-between px-4 py-4">
                    <div class="flex mr-4">
                    <span class="items-center px-4 py-4 m-auto bg-yellow-200 rounded-full hover:bg-yellow-300">
                        <i class="fa-lg fas fa-envelope" style="color: #b73c00;"></i>
                    </span>
                    </div>
                    <div class="flex-1 pl-1">
                    <div class="text-xl font-medium text-gray-600">10</div>
                    <div class="text-sm text-gray-400 sm:text-base">
                        Pesan masuk
                    </div>
                    </div>
                </div>
                
                </div>
            </div>

            
            <div class="p-2 bg-white rounded-lg shadow-lg sm:w-1/2">
                <div class="flex flex-col">
                <div class="flex flex-row items-center justify-between px-4 py-4">
                    <div class="flex mr-4">
                    <span class="items-center px-4 py-4 m-auto bg-green-200 rounded-full hover:bg-green-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="items-center w-8 h-8 m-auto text-green-500 hover:text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                    </div>
                    <div class="flex-1 pl-1">
                    <div class="text-xl font-medium text-gray-600">25</div>
                    <div class="text-sm text-gray-400 sm:text-base">
                        Total artikel
                    </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-5">

        <div class="relative overflow-x-auto shadow-lg bg-yellow-50">
            <h1 class="py-8 text-base font-semibold text-center text-yellow-800 w-ful"> ALL MESSAGE</h1>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gmail
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Message
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($contacts as $contact)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $contact->firsname_contact }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $contact->subject_contact }}
                        </td>
                        <th scope="row" class="px-6 py-4">
                            {{ $contact->message_contact }}
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('edit_contact', $contact) }}" method="get">
                                <button type="submit" class="flex items-center px-3 py-2 text-sm font-medium text-center text-blue-700 border border-blue-500 rounded-lg hover:text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                Detail
                            </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>

        <div class="relative overflow-x-auto shadow-lg bg-yellow-50">
            <h1 class="py-8 text-base font-semibold text-center text-yellow-800 w-ful"> ALL MESSAGE</h1>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama pembeli
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bank pembeli
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ditransfer pada
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($contacts as $contact)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $contact->firsname_contact }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $contact->subject_contact }}
                        </td>
                        <th scope="row" class="px-6 py-4">
                            {{ $contact->message_contact }}
                        </td>
                        <td class="px-6 py-4 ">
                            <form action="{{ route('edit_contact', $contact) }}" method="get">
                                <button type="submit" class="flex items-center px-3 py-2 text-sm font-medium text-center text-blue-700 border border-blue-500 rounded-lg hover:text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="mr-2 text-blue-500 fas fa-file-invoice"></i>
                                    Invoice
                                </button>
                            </form>

                            <form action="{{ route('edit_contact', $contact) }}" method="get">
                                <button type="submit" class="flex items-center px-3 py-2 mt-3 text-sm font-medium text-center text-green-700 border border-green-500 rounded-lg hover:text-white hover:bg-green-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="mr-2 text-green-500 hover:bg-green-400 fas fa-check-circle"></i>
                                Confirm
                            </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
  

</section>

@endsection