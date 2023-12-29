@extends('layout.main')

@section('konten')
    <div class="px-32">
        <div class="my-12">
            <div class="rounded-md border  p-8 py-12 grid gap-4 ">
                <form action="{{ route('tambahItem') }}" method="POST" class="grid mx-12 gap-4 ">
                    @csrf
                    <h1 class="text-xl font-semibold text-center ">Detail Jasa</h1>
                    <div class="w-full flex justify-center mb-4">

                        <div class="w-1/3 border rounded-lg p-4 flex justify-between  items-center bg-primary bg-opacity-5">
                            <div class="flex gap-6 items-center">
                                <img class="rounded-full w-24 h-24" src="asset/account/p4.png" alt="">
                                <div class="">
                                    <h2 class="font-semibold text-xl">Well-Comp</h2>
                                    <h2 class="text-gray-400 font-semibold">Computer</h2>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="w-full p-4 rounded-lg  bg-primary bg-opacity-5">
                        <h2 class="text-lg">Tentang Jasa :</h2>
                        <p class="text-base text-gray-500 ">
                            layanan profesional yang menyediakan pijatan atau sentuhan terapeutik untuk mempromosikan
                            relaksasi, kesejahteraan, dan pengurangan stres. Pijet dapat dilakukan oleh terapis
                            berlisensi atau ahli pijat yang terampil, menggunakan teknik-teknik khusus untuk mengurangi
                            ketegangan otot, meningkatkan sirkulasi darah, dan meredakan berbagai masalah fisik.
                        </p>
                    </div>
                    <h2 class="text-lg">Layanan Utama</h2>
                    <div class="flex gap-4 btn-group">
                        <label
                            class="option w-full border rounded-lg flex justify-between  items-center bg-primary text-white">
                            <input type="radio" value="Service komputer" name="layananUtama">
                            <span class="btn-option w-full p-4 rounded-lg bg-opacity-10 ">

                                <div class="flex gap-6">
                                    <img class="rounded-md w-24 h-24" src="asset/kategory.png" alt="">
                                    <div class="">
                                        <h2 class="font-semibold text-xl">Service komputer</h2>
                                        <h2>Normal</h2>
                                        <h3>Rp 120.000</h3>
                                    </div>
                                </div>
                            </span>

                        </label>
                        <label
                            class="option w-full border rounded-lg flex justify-between  items-center bg-primary text-white">
                            <input type="radio" value="Service Laptop" name="layananUtama">
                            <span class="btn-option w-full p-4 rounded-lg bg-opacity-10 ">

                                <div class="flex gap-6">
                                    <img class="rounded-md w-24 h-24" src="asset/kategory.png" alt="">
                                    <div class="">
                                        <h2 class="font-semibold text-xl">Service Laptop</h2>
                                        <h2>Normal</h2>
                                        <h3>Rp 110.000</h3>
                                    </div>
                                </div>
                            </span>

                        </label>
                    </div>

                    <h2 class="text-lg">Layanan Tambahan</h2>
                    <div class="flex gap-4 btn-group">
                        <label
                            class="option w-full border rounded-lg flex justify-between  items-center bg-primary text-white">
                            <input type="radio" value="Fast Service Garansi" name="layananTambahan">
                            <span class="btn-option w-full p-4 rounded-lg bg-opacity-10 ">

                                <div class="flex gap-6">
                                    <img class="rounded-md w-24 h-24" src="asset/kategory.png" alt="">
                                    <div class="">
                                        <h2 class="font-semibold text-xl">Service Fast</h2>
                                        <h2>Garansi</h2>
                                        <h3>Rp 150.000</h3>
                                    </div>
                                </div>
                            </span>

                        </label>
                        <label
                            class="option w-full border rounded-lg flex justify-between  items-center bg-primary text-white">
                            <input type="radio" value="Fast Service" name="layananTambahan">
                            <span class="btn-option w-full p-4 rounded-lg bg-opacity-10 ">

                                <div class="flex gap-6">
                                    <img class="rounded-md w-24 h-24" src="asset/kategory.png" alt="">
                                    <div class="">
                                        <h2 class="font-semibold text-xl">Service Fast</h2>
                                        <h2>Non-garansi</h2>
                                        <h3>Rp 140.000</h3>
                                    </div>
                                </div>
                            </span>

                        </label>
                    </div>

                    <!-- datete time -->

                    <div class="grid grid-cols-3 py-4">

                        <h2 class="text-lg font-semibold">Pilih Tanggal :</h2>
                        <h2 class="text-lg font-semibold">Pilih Jam :</h2>
                    </div>
                    <div class="flex justify-between gap-20">

                        <div class="grid gap-3">
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input datepicker datepicker-orientation="bottom right" type="text" name="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date">
                            </div>
                            <div inline-datepicker></div>
                        </div>

                        <div class=" gap-2 w-full ">



                            <select id="countries" name="time" disabled
                                class="bg-gray-50 border mb-8 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                                    class="option bg-white">
                                    <input type="radio" value="09:00 AM" name="time">
                                    <span class="flex justify-center btn-option py-2.5 px-5 w-full h-full items-center rounded-lg ">09:00 AM</span>
                                </label>

                                <label
                                    class="option bg-primary rounded-lg text-white">
                                    <input type="radio" value="10:00 AM" name="time">
                                    <span class="flex justify-center btn-option py-2.5 px-5 w-full h-full items-center rounded-lg ">10:00 AM</span>
                                </label>
                                <label
                                    class="option bg-primary rounded-lg text-white">
                                    <input type="radio" value="11:00 AM" name="time">
                                    <span class="flex justify-center btn-option py-2.5 px-5 w-full h-full items-center rounded-lg ">11:00 AM</span>
                                </label>
                                <label
                                    class="option bg-primary rounded-lg text-white">
                                    <input type="radio" value="12:00 AM" name="time">
                                    <span class="flex justify-center btn-option py-2.5 px-5 w-full h-full items-center rounded-lg ">12:00 AM</span>
                                </label>
                                <label
                                    class="option bg-white">
                                    <input type="radio" value="13:00 AM" name="time">
                                    <span class="flex justify-center btn-option py-2.5 px-5 w-full h-full items-center rounded-lg ">13:00 AM</span>
                                </label>
                                <label
                                    class="option bg-primary rounded-lg text-white">
                                    <input type="radio" value="15:00 AM" name="time">
                                    <span class="flex justify-center btn-option py-2.5 px-5 w-full h-full items-center rounded-lg ">15:00 AM</span>
                                </label>
                                <label
                                    class="option bg-primary rounded-lg text-white">
                                    <input type="radio" value="16:00 AM" name="time">
                                    <span class="flex justify-center btn-option py-2.5 px-5 w-full h-full items-center rounded-lg ">16:00 AM</span>
                                </label>
                                <label
                                    class="option bg-primary rounded-lg text-white">
                                    <input type="radio" value="20:00 AM" name="time">
                                    <span class="flex justify-center btn-option py-2.5 px-5 w-full h-full items-center rounded-lg ">20:00 AM</span>
                                </label>
                                <label
                                    class="option bg-white">
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
                        <button class="w-full py-4 rounded-lg bg-primary bg-opacity-10  font-semibold" type="submit"> <a
                                class="w-full">Buat Pesanan</a></button>
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
            </div>

        </div>
    @endsection
