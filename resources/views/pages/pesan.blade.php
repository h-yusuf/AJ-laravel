@extends('layout.main')

@section('konten')
<div class="px-32">
    <div class="my-12">
        <div class="rounded-md border min-w-max px-24  py-12 grid gap-4">
            <h1 class="text-xl font-semibold text-center ">PesanJasa</h1>
            <div class="grid  gap-4">
                <h2 class="text-lg">Jasa</h2>
                <div class="">
                    <div class="w-full border rounded-lg p-4 flex justify-between  items-center bg-primary bg-opacity-5">
                        <div class="flex gap-6">
                            <img class="rounded-md w-24 h-24" src="../../asset/kategory.png" alt="">
                            <div class="">
                                <h2 class="font-semibold text-xl"> {{ $data['layanan_utama'] }}</h2>
                                <h2>{{ $data['layanan_tambahan'] }}</h2>
                                <h3>Rp 110.000</h3>
                            </div>
                        </div>
                        <a href="#" class="mr-6">
                          <svg class="w-6 h-6 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
                        </svg>
                        </a>
                    </div>
                </div>
                <div class=" flex justify-between">
                    <h2 class="text-base">Waktu </h2>
                    <h2 class="text-base flex gap-4"><span> {{ $data['date'] }}</span> {{ $data['time'] }}</h2>

                </div>
            </div>

            <div class="grid  gap-4">
                <h2 class="text-lg">Catatan :</h2>

                <div
                    class="w-full p-4 rounded-lg flex justify-between items-center bg-primary bg-opacity-5 text-gray-500">
                    {{ $data['note'] }}
                </div>


                <div class="flex justify-between ">
                    <div class="flex gap-2 items-center">
                    <svg class="w-6 h-6 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 17 21">
                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                            <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            <path
                                d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
                        </g>
                    </svg>
                    <h3 class=" text-base leading-4 text-primary">
                        {{ $data['alamat'] }}
                    </h3> </div>
                    <button  class="text-third underline">edit</button>
                </div>

            </div>
            <div class="w-full p-4  rounded-lg   bg-primary bg-opacity-5"> {{ $data['ciriRumah'] }}
                <!-- <h2 class="text-xl text-gray-500">
                                Rumah tingkat warna cream tembok batu bata, di pagar ada tulisan “Ada kucing Hitam”
                             </h2> -->
            </div>

            <div class="w-full p-4 rounded-lg flex justify-between bg-primary bg-opacity-5">
                <h2 class="text-base text-gray-500">
                    Total Pesanan
                </h2>
                <h2 class="text-base text-gray-500">
                    (1 jasa pada pukul {{ $data['time'] }})
                </h2>
            </div>
            <div class="flex flex-col gap-2">
                <div class="flex justify-between items-center">

                    <div class="flex gap-2 items-center">

                        <svg class="w-5 h-5 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m7 13 6-6m-5-.5h.01m2.98 7H11m1.007-11.313a2.75 2.75 0 0 0 2.1.87 2.745 2.745 0 0 1 2.837 2.837 2.749 2.749 0 0 0 .87 2.1 2.747 2.747 0 0 1 0 4.014 2.748 2.748 0 0 0-.87 2.1 2.746 2.746 0 0 1-2.837 2.837 2.75 2.75 0 0 0-2.1.87 2.748 2.748 0 0 1-4.014 0 2.75 2.75 0 0 0-2.1-.87 2.744 2.744 0 0 1-2.837-2.837 2.749 2.749 0 0 0-.87-2.1 2.747 2.747 0 0 1 0-4.014 2.75 2.75 0 0 0 .87-2.1 2.745 2.745 0 0 1 2.838-2.837 2.749 2.749 0 0 0 2.1-.87 2.748 2.748 0 0 1 4.013 0Z" />
                        </svg>
                        <h2 class="text-lg text-primary font-medium">
                            Voucer
                        </h2>
                    </div>
                    <div id="small" class=" flex gap-2 items-center py-4">
                        <select id="underline_select"
                            class="block py-2.5 px-3 w-40 text-base text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option class="text-base text-primary w-32" selected>Diskon 20%</option>
                            <option value="Diskon 50%">Diskon 50%</option>
                            <option value="Diskon 10%">Diskon 10%</option>
                            <option value="Cash Back 50%">Cash Back 50%</option>
                            <option value="Diskon 20%">Diskon 50%2/option>
                            
                        </select>
                    </div>


                </div>
                <div class="flex justify-between items-center">

                    <div class="flex gap-2 items-center">

                        <ion-icon name="cash-outline" class="w-5 h-5 text-primary"></ion-icon>
                        <h2 class="text-lg text-primary font-medium">
                            Metode Pembayaran
                        </h2>
                    </div>
                    <div  class=" flex  items-center py-4">
                      <select id="underline_select"
                          class="block py-2.5 px-3 w-full text-base text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                          <option class="text-base text-primary " selected>Saldo AdaJasa</option>
                          <option value="Mandiri">Mandiri</option>
                          <option value="BRI">BRI</option>
                          <option value="Muamalat">Muamalat</option>
                          <option value="BNI">BNI</option>
                        
                      </select>
                  </div>

                </div>
                <hr>

                <div class="flex justify-between items-center mt-4 mb-2">

                    <div class="flex gap-2 items-center">

                        <svg class="w-5 h-5 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="18" height="20" fill="none" viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M12 2h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m6 0v3H6V2m6 0a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1M5 5h8m-5 5h5m-8 0h.01M5 14h.01M8 14h5" />
                        </svg>
                        <h2 class="text-lg text-primary font-medium">
                            Rincian
                        </h2>
                    </div>
                </div>
                <div class="flex justify-between  items-center">
                    <div class="flex gap-2 items-center">
                        <h5 class="text-lg font-medium">
                            Harga Jasa
                        </h5>
                    </div>
                    <div class="flex gap-2 items-center ">
                        <h2 class="text-lg ">
                            Rp 110.000
                        </h2>
                    </div>
                </div>

                <div class="flex justify-between  items-center">
                    <div class="flex gap-2 items-center">
                        <h2 class="text-lg font-medium">
                            Diskon
                        </h2>
                    </div>
                    <div class="flex gap-2 items-center ">
                        <h2 class="text-lg ">
                            Rp 20.000
                        </h2>
                    </div>

                </div>
                <div class="flex justify-between  items-center">
                    <div class="flex gap-2 items-center">
                        <h2 class="text-lg font-medium">
                            Total Pembayaran
                        </h2>
                    </div>
                    <div class="flex gap-2 items-center ">
                        <h2 class="text-lg ">
                            Rp 90.000
                        </h2>
                    </div>

                </div>
            </div>

            <!--  -->

            <div class="flex gap-4">
                <form class="w-full" action="{{ route('simpanData') }}" method="POST" >
                    @csrf
                    @foreach ($data as $key => $value)
                        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                    @endforeach
                    <button class="w-full py-4 rounded-lg bg-primary text-white font-semibold"
                        type="submit">Bayar Sekarang</button>

                </form>

                <button class="p-2 px-4 rounded-lg bg-primary bg-opacity-10">
                    <svg class="w-6 h-6 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 5h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-2v3l-4-3H8m4-13H2a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h2v3l4-3h4a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

  @endsection