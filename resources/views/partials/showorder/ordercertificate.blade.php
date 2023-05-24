<!-- CHECKOUT -->
<div class="max-w-7xl mx-auto pt-20 md:p-[30px]">
    <div class="max-w-[500px] px-5 md:px-8 pt-10">
        <button id="pkazCk" class="px-4 py-2 text-white shadow-md bg-primary rounded-global">Unduh faktur</button>
    </div>
    
    <div class="flex flex-col p-5 mx-auto md:p-8 gap-y-5 md:py-12 md:grid md:grid-cols-2 gap-x-5 ">
      <div class="">

        <div class="shadow-md border border-gray-200 flex-col my-[7px] p-5 rounded-global  lg:relative lg:flex bg-white 2xl:p-[30px]">
          <p class="text-base font-normal text-gray-500">INVOICE ID {{ $product->id }} </p>
          <h1 class="text-base font-normal text-gray-500">Total pembayaran</h1>            
          <p class="mb-4 text-3xl font-black text-gray-900 ">Rp </p>
        </div>

        <p class="mt-5 text-xl font-black text-gray-900">Bank Transfer</p>
        <h1 class="mb-[5px] text-base font-normal text-gray-500">Gunakan bank untuk transaksi.</h1>
        <div class="shadow-md border border-gray-200 flex-col my-[7px] p-5 rounded-global  lg:relative lg:flex bg-white 2xl:p-[30px]">
          <h1 class="text-base font-normal text-gray-500">Semua atas nama</h1>
          <p class="mb-4 text-xl font-black text-gray-900 ">ALGOTECH</p>
          @foreach ($payements as $payement)
          <div class="flex flex-row items-center justify-between w-full">    
            <h1 class="text-base font-medium text-gray-900 ">{{ $payement->number }} / {{ $payement->name_bank }}</h1>
            <span class="">
              <div style="font-size:inherit;color:inherit;padding:2px"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M315.5 64h170.9v384L315.5 64zm-119 0H25.6v384L196.5 64zM256 206.1L363.5 448h-73l-30.7-76.8h-78.7L256 206.1z"></path></svg>
              </div>
            </span>
          </div>
          @endforeach
        </div>

        <div class="mt-5 shadow-md border border-gray-200 my-2.5 p-5 rounded-global lg:relative 2xl:flex bg-white 2xl:p-[30px]">
          <div class="sm:col-span-4 sm:flex sm:flex-col sm:justify-center">
            <p class="text-base font-normal text-gray-500">Nama paket</p>
            <h1 class="text-xl font-black text-gray-900 ">{{ $product->certificate->name_certificates }}</h1>
            <p class="text-base font-normal text-gray-500">Deskripsi paket</p>
            <h1 class="text-sm text-gray-900 ">{!! $product->certificate->deskripsi_certificates !!}</h1>
          </div>
        </div>

      </div>

      <div class="">
        <div class="flex p-5 bg-white border border-gray-200 shadow-md rounded-global">
          <div class="sm:col-span-4 sm:flex sm:flex-col sm:justify-center">
            <p class="my-4 text-sm">Silahkan lakukan transfer sebelum Anda melakukan konfirmasi dan kirimkan bukti pembayaran via WhatsApp dan bisa konsultasi kami jika Anda ragu!</p>
            <a href="{{ url('https://api.whatsapp.com/send?phone=6281263630633&text=Halo%20algotech,%20Saya%20mau%20order') }}" target="_blank" rel="noopener noreferrer" role="button"><button  class="items-center px-4 py-2 text-green-500 border-2 border-green-500 shadow-lg rounded-global w-fit hover:bg-green-200 hover:text-green-500 " >Whatsapp</button></a>
          </div>
        </div>

        <p class="mt-10 text-xl font-black text-gray-900">Konfirmasi pembayaran</p>
        <h1 class="mb-[5px] text-base font-normal text-gray-500">
          Pastikan melakukan konfirmasi setelah melakukan transfer.</h1>
        <div class="shadow-md border border-gray-200 flex-col my-[7px] flex p-5 rounded-global  xl:p-5 xl:grid-cols-2 2xl:bg-white 2xl:p-[30px]">
          <div class="px-4 mx-auto max-w-7xl md:px-8">
           
              <form  action="{{ route('store_confirm') }}" method="POST" class="grid max-w-screen-md gap-4 mx-auto sm:grid-cols-2">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product_id }}">
                <input type="hidden" name="product_name" value="{{ $product_name}}">

                <div class=""><label class="inline-block mb-2 text-sm text-gray-500">Bank Atas Nama</label>
                  <input name="name_user" type="text" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded outline-none bg-gray-50 focus:ring ring-indigo-300"  placeholder="Budi"/></div>

                <div class=""><label class="inline-block mb-2 text-sm text-gray-500">Bank Anda</label>
                  <input name="kind bank" type="text" class="w-full px-3 py-2 text-gray-800 transition duration-100 border rounded outline-none bg-gray-50 focus:ring ring-indigo-300" placeholder="BCA" /></div>

                <div class="sm:col-span-2"><label class="inline-block mb-2 text-sm text-gray-500">Transfer Pada</label>
                  <input name="date_bank" class="w-full px-3 py-2 text-gray-800 transition duration-100 border border-gray-200 rounded bg-gray-50 focus:ring ring-indigo-300" type="date"/></div>
  
                <div class="my-[5px] flex justify-between items-center sm:col-span-2">
                  <button type="submit" id="efzciz" class="inline-block px-8 py-3 font-semibold text-center text-white transition duration-100 bg-blue-500 rounded-lg outline-none hover:bg-blue-700 active:bg-blue-900 focus-visible:ring ring-blue-300 md:text-base">Konfirmasi</button></div>
            </form>
            
          </div>
        </div>
      </div>
    </div>

    <div class="max-w-[500px] px-8 my-2.5">
        <button id="htkCdb" class="px-4 py-2 mb-5 text-gray-900 bg-white border border-gray-500 shadow-lg rounded-global hover:bg-blue-200">Nanti saja</button></div>
  </div>
<!-- END CHECKOUT -->