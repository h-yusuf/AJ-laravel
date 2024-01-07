@extends('layout.main')

@section('konten')
    <div class="px-32">
        <div class="my-12">
            <div class="rounded-md border  p-8 py-12 grid gap-4 ">
                @forelse ($jasa as $item)
                    {{-- @dd($item); --}}
                <form action="{{ route('tambahItem') }}" method="POST" class="grid mx-12 gap-4 ">
                    @csrf
                    <h1 class="text-xl font-semibold text-center ">Detail Jasa</h1>
                    <div class="w-full flex justify-center mb-4">

                        <div class="w-1/3 border rounded-lg p-4 flex justify-between  items-center bg-primary bg-opacity-5">
                            <div class="flex gap-6 items-center">
                                <img class="rounded-full w-24 h-24" src="{{ $item->img_jasa }}" alt="">
                                <div class="">
                                    <h2 class="font-semibold text-xl"> {{ $item->product_name }} </h2>
                                    <h2 class="text-gray-400 font-semibold"> {{ $item->categories }} </h2>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="w-full p-4 rounded-lg  bg-primary bg-opacity-5">
                        <h2 class="text-lg">Tentang Jasa :</h2>
                        <p class="text-base text-gray-500 ">
                            Menyediakan solusi terdepan untuk perbaikan, pemeliharaan, dan peningkatan kinerja perangkat Anda. Tim profesional kami ahli dalam menangani berbagai masalah teknis, mulai dari perbaikan perangkat keras hingga pemulihan data. Kami menawarkan layanan cepat dan andal untuk memastikan perangkat Anda berfungsi optimal. Dengan layanan pelanggan yang ramah dan harga yang kompetitif, kami berkomitmen memberikan pengalaman pelayanan yang memuaskan. Percayakan perangkat Anda kepada kami, dan biarkan kami mengembalikan kinerja maksimalnya.
                        </p>
                    </div>
                    <h2 class="text-lg">Layanan Utama</h2>
                    <div class="flex gap-4 btn-group text-black" >
                        {{-- @dd($item); --}}
                            @foreach ($jasa as $items)
                                
                            <label
                                class="option w-full border border-primary rounded-lg flex justify-between items-center bg-primary bg-opacity-10 text-black">
                                <input type="radio" value="{{ $items->layananUtama->id_LU }}" name="layananUtama">
                                <span class="btn-option w-full p-4 rounded-lg bg-opacity-10 ">
                                   
                                    
                                    <div class="flex gap-6">
                                        <img class="rounded-md w-24 h-24" src="{{ $items->layananUtama->imgLU }}" alt="">
                                        {{-- @dd($items->layananUtama->imgLU); --}}
                                        <div class=" ">
                                            <h2 class="font-semibold text-xl">{{ $items->layananUtama->nameLU }}</h2>
                                            <h2>{{ $items->layananUtama->desk }}</h2>
                                            <h3>Rp {{ $items->layananUtama->price }}</h3>
                                        </div>
                                    </div>
                                </span>
    
                            </label>
                            @endforeach

                      

                        {{-- <label
                            class="option w-full border border-primary rounded-lg flex justify-between items-center bg-primary bg-opacity-10 text-black">
                            <input type="radio" value="Service Laptop" name="layananUtama">
                            <span class="btn-option w-full p-4 rounded-lg bg-opacity-10 ">

                                <div class="flex gap-6">
                                    <img class="rounded-md w-24 h-24" src="asset/laptop.png" alt="">
                                    <div class="">
                                        <h2 class="font-semibold text-xl">Service Laptop</h2>
                                        <h2>Normal</h2>
                                        <h3>Rp 110.000</h3>
                                    </div>
                                </div>
                            </span>

                        </label> --}}
                    </div>

                    <h2 class="text-lg">Layanan Tambahan</h2>
                    <div class="flex gap-4 btn-group">

                        <input type="hidden" name="idJasa" value="{{ $item->idJasa }}">
                        @foreach ($jasa as $items)

                        <label
                        class="option w-full border border-primary rounded-lg flex justify-between items-center bg-primary bg-opacity-10 text-black">
                        <input type="radio" value="{{ $items->layananTambahan->id_LT }}" name="layananTambahan">
                        <span class="btn-option w-full p-4 rounded-lg bg-opacity-10 ">
                           
                            
                            <div class="flex gap-6">
                                <img class="rounded-md w-24 h-24" src="{{ $items->layananTambahan->imgLT }}" alt="">
                                {{-- @dd($items->layananTambahan->imgLU); --}}
                                <div class=" ">
                                    <h2 class="font-semibold text-xl">{{ $items->layananTambahan->nameLT }}</h2>
                                    <h2>{{ $items->layananTambahan->desk }}</h2>
                                    <h3>Rp {{ $items->layananTambahan->price }}</h3>
                                </div>
                            </div>
                        </span>

                    </label>

                        @endforeach

                        {{-- <label
                            class="option w-full border border-primary rounded-lg flex justify-between items-center bg-primary bg-opacity-10 text-black">
                            <input type="radio" value="Fast Service" name="layananTambahan">
                            <span class="btn-option w-full p-4 rounded-lg bg-opacity-10 ">

                                <div class="flex gap-6">
                                    <img class="rounded-md w-24 h-24" src="asset/slow.png" alt="">
                                    <div class="">
                                        <h2 class="font-semibold text-xl">Service Fast</h2>
                                        <h2>Non-garansi</h2>
                                        <h3>Rp 140.000</h3>
                                    </div>
                                </div>
                            </span>

                        </label> --}}
                    </div>

                    <!-- datete time -->

                    <div class="grid grid-cols-3 py-4">

                        <h2 class="text-lg ">Pilih Tanggal :</h2>
                        <h2 class="text-lg ">Pilih Jam :</h2>
                    </div>
                    <div class="flex justify-between gap-20">

                        <div class="grid gap-3">
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input datepicker datepicker-orientation="bottom right" type="text" name="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 "
                                    placeholder="Select date">
                            </div>
                            <div inline-datepicker></div>
                        </div>

                        <div class=" gap-2 w-full ">



                            <select id="countries" name="time" disabled
                                class="bg-gray-50 border mb-8 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected>Selec Time</option>
                                <option value="09:00 AM">09:00 AM</option>
                                <option value="10:00 AM">10:00 AM</option>
                                <option value="11:00 AM">11:00 AM</option>
                                <option value="01:00 PM">01:00 PM</option>
                                <option value="02:00 PM">02:00 PM</option>
                                <option value="04:00 PM">04:00 PM</option>
                                <option value="07:00 PM">07:00 PM</option>
                                <option value="08:00 PM">08:00 PM</option>
                            </select>

                            <div class="grid grid-cols-3 gap-2 w-full h-1/2 btn-group">
                                <label
                                    class="option bg-secondary rounded-lg text-white">
                                    <input type="radio" value="09:00 AM" name="time">
                                    <span class="flex justify-center btn-option py-2.5 px-5 w-full h-full items-center rounded-lg ">09:00 AM</span>
                                </label>

                                <label
                                    class="option bg-white rounded-lg text-black border border-primary">
                                    <input type="radio" value="10:00 AM" name="time">
                                    <span class="flex justify-center btn-option py-2.5 px-5 w-full h-full items-center rounded-lg ">10:00 AM</span>
                                </label>
                                <label
                                    class="option bg-white rounded-lg text-black border border-primary">
                                    <input type="radio" value="11:00 AM" name="time">
                                    <span class="flex justify-center btn-option py-2.5 px-5 w-full h-full items-center rounded-lg ">11:00 AM</span>
                                </label>
                                <label
                                    class="option bg-white rounded-lg text-black border border-primary">
                                    <input type="radio" value="12:00 AM" name="time">
                                    <span class="flex justify-center btn-option py-2.5 px-5 w-full h-full items-center rounded-lg ">12:00 AM</span>
                                </label>
                                <label
                                    class="option bg-secondary rounded-lg text-white">
                                    <input type="radio" value="13:00 AM" name="time">
                                    <span class="flex justify-center btn-option py-2.5 px-5 w-full h-full items-center rounded-lg ">13:00 AM</span>
                                </label>
                                <label
                                    class="option bg-white rounded-lg text-black border border-primary">
                                    <input type="radio" value="15:00 AM" name="time">
                                    <span class="flex justify-center btn-option py-2.5 px-5 w-full h-full items-center rounded-lg ">15:00 AM</span>
                                </label>
                                <label
                                    class="option bg-white rounded-lg text-black border border-primary">
                                    <input type="radio" value="16:00 AM" name="time">
                                    <span class="flex justify-center btn-option py-2.5 px-5 w-full h-full items-center rounded-lg ">16:00 AM</span>
                                </label>
                                <label
                                    class="option bg-white rounded-lg text-black border border-primary">
                                    <input type="radio" value="20:00 AM" name="time">
                                    <span class="flex justify-center btn-option py-2.5 px-5 w-full h-full items-center rounded-lg ">20:00 AM</span>
                                </label>
                                <label
                                    class="option bg-secondary rounded-lg text-white">
                                    <input type="radio" value="21:00 AM" name="time">
                                    <span class="flex justify-center btn-option py-2.5 px-5 w-full h-full items-center rounded-lg ">21:00 AM</span>
                                </label>

                            </div>

                        </div>

                    </div>
                    <h2 class="text-lg">Alamat</h2>

                    <input class="w-full p-4 rounded-lg  text-gray-400 bg-primary bg-opacity-5" name="alamat"
                        value="condcat/depok/sleman">
                    <input class="w-full p-4 rounded-lg  bg-primary bg-opacity-5" name="ciriRumah"
                        placeholder="Tambahkan ciri-ciri rumah...">
                    <h2 class="text-lg">Catatan :</h2>

                    <textarea name="note"
                        class="w-full h-32  rounded-lg flex justify-between resize-none items-center bg-primary bg-opacity-5">
                    </textarea>
                    <div class="flex gap-4">
                        <button class="w-full py-4 rounded-lg bg-primary font-semibold" type="submit"> <a
                                class="w-full text-white">Buat Pesanan</a></button>
                        <button class="p-2 px-4 rounded-lg bg-primary bg-opacity-10">
                            <svg class="w-6 h-6 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M16 5h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-2v3l-4-3H8m4-13H2a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h2v3l4-3h4a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                            </svg>
                        </button>
                    </div>
                </form>
                @empty
                    
                @endforelse
            </div>

        </div>
    @endsection
