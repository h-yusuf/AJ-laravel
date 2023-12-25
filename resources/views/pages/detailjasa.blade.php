@extends('layout.main')

@section('konten')
<div class="px-32">
    <div class="my-12">
        <div class="rounded-md border  p-8 py-12 grid gap-4 ">
            <div class="grid mx-12 gap-4 ">
                <h1 class="text-xl font-semibold text-center ">Detail Jasa</h1>
                <div class="w-full flex justify-center mb-4">

                    <div
                        class="w-1/3 border rounded-lg p-4 flex justify-between  items-center bg-primary bg-opacity-5">
                        <div class="flex gap-6 items-center">
                            <img class="rounded-full w-24 h-24" src="asset/account/p4.png" alt="">
                            <div class="">
                                <h2 class="font-semibold text-xl">Pijet Mbah Manjur</h2>
                                <h2 class="text-gray-400 font-semibold">Pijet</h2>
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
                <div class="flex gap-4">
                    <div
                        class="w-full border rounded-lg p-4 flex justify-between  items-center bg-primary bg-opacity-5">
                        <div class="flex gap-6">
                            <img class="rounded-md w-24 h-24" src="asset/kategory.png" alt="">
                            <div class="">
                                <h2 class="font-semibold text-xl">Pijet Biasa</h2>
                                <h2>Pijet tanpa kretek</h2>
                                <h3>Rp 110.000</h3>
                            </div>
                        </div>

                    </div>

                    <div
                        class="w-full border rounded-lg p-4 flex justify-between  items-center bg-primary bg-opacity-5">
                        <div class="flex gap-6">
                            <img class="rounded-md w-24 h-24" src="asset/kategory.png" alt="">
                            <div class="">
                                <h2 class="font-semibold text-xl">Pijet Biasa</h2>
                                <h2>Pijet dengan kretek</h2>
                                <h3>Rp 110.000</h3>
                            </div>
                        </div>

                    </div>
                </div>
                <h2 class="text-lg">Layanan Tambahan</h2>
                <div class="flex gap-4">
                    <div
                        class="w-full border rounded-lg p-4 flex justify-between  items-center bg-primary bg-opacity-5">
                        <div class="flex gap-6">
                            <img class="rounded-md w-24 h-24" src="asset/kategory.png" alt="">
                            <div class="">
                                <h2 class="font-semibold text-xl">Pijet Luar Biasa</h2>
                                <h2>Pijet tanpa kretek</h2>
                                <h3>Rp 110.000</h3>
                            </div>
                        </div>

                    </div>

                    <div
                        class="w-full border rounded-lg p-4 flex justify-between  items-center bg-primary bg-opacity-5">
                        <div class="flex gap-6">
                            <img class="rounded-md w-24 h-24" src="asset/kategory.png" alt="">
                            <div class="">
                                <h2 class="font-semibold text-xl">Pijet Sangat Luar Biasa</h2>
                                <h2>Pijet tanpa kretek</h2>
                                <h3>Rp 110.000</h3>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- datete time -->

                <h2 class="text-lg">Pilih Tanggal</h2>
                <div class="flex justify-between gap-20">
                    <div inline-datepicker data-date="02/25/2022"></div>
                    <div class="grid grid-cols-3 gap-2 w-full h-1/2">
                        <button type="button"
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Alternative</button>
                        <button type="button"
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Alternative</button>
                        <button type="button"
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Alternative</button>
                        <button type="button"
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Alternative</button>
                        <button type="button"
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Alternative</button>
                        <button type="button"
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Alternative</button>
                        <button type="button"
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Alternative</button>
                        <button type="button"
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Alternative</button>
                        <button type="button"
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Alternative</button>

                    </div>

                </div>
                <h2 class="text-lg">Alamat</h2>
                <div class="w-full p-4 rounded-lg  bg-primary bg-opacity-5">
                    <p class="text-base text-gray-500 ">
                        condcat/depok/sleman
                    </p>
                </div>
                <input class="w-full p-4 rounded-lg  bg-primary bg-opacity-5"
                    placeholder="Tambahkan ciri-ciri rumah...">
                <h2 class="text-lg">Catatan :</h2>

                <textarea
                    class="w-full h-32  rounded-lg flex justify-between resize-none items-center bg-primary bg-opacity-5">
      </textarea>
                <div class="flex gap-4">
                    <a class="w-full" href="pesan">
                        <button class="w-full py-4 rounded-lg bg-primary bg-opacity-10  font-semibold"
                            type="submit">Buat Pesanan</button>
                    </a>
                    <button class="p-2 px-4 rounded-lg bg-primary bg-opacity-10">
                        <svg class="w-6 h-6 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 5h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-2v3l-4-3H8m4-13H2a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h2v3l4-3h4a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection