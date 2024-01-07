{{-- @dd($datajasa); --}}

@extends('layout.main')

@section('konten')
<div class="relative px-4 w-full max-w-2xl h-full md:h-auto">

    <div class="relative bg-white rounded-2xl shadow-lg">

        <div class="flex justify-between items-start p-5 rounded-t border-b">
            <h3 class="text-xl font-semibold">
                Add product
            </h3>
            <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-2xl text-sm p-1.5 ml-auto inline-flex items-center"
                data-modal-toggle="add-product-modal">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <div class="p-6 space-y-6">
            <form action="#">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="product-name"
                            class="block mb-2 text-sm font-medium text-gray-900">Product
                            Name</label>
                        <input type="text" name="product-name" id="product-name"
                            class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                            placeholder="Starkom" required>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="category"
                            class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                        <input type="text" name="category" id="category"
                            class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                            placeholder="Electronics" required>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="brand"
                            class="block mb-2 text-sm font-medium text-gray-900">id_utama</label>
                        <input type="text" name="brand" id="brand"
                            class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                            placeholder="Apple" required>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="price"
                            class="block mb-2 text-sm font-medium text-gray-900">id_tambahan</label>
                        <input type="number" name="price" id="price"
                            class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                            placeholder="$2300" required>
                    </div>
                    <div class="col-span-full">
                        <label for="product-details"
                            class="block mb-2 text-sm font-medium text-gray-900">Product
                            Details</label>
                        <textarea id="product-details" rows="6"
                            class="block p-4 w-full text-gray-900 border border-gray-300 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300"
                            placeholder="e.g. 3.8GHz 8-core 10th-generation Intel Core i7 processor, Turbo Boost up to 5.0GHz, Ram 16 GB DDR4 2300Mhz"></textarea>
                    </div>
                </div>
                <div class="flex justify-center items-center mt-4 w-full">
                    <label
                        class="flex flex-col w-full h-32 rounded border-2 border-gray-300 border-dashed cursor-pointer hover:bg-gray-50">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <svg class="w-10 h-10 text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12">
                                </path>
                            </svg>
                            <p class="py-1 text-sm text-gray-600">Upload a file or drag and drop
                            </p>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                        </div>
                        <input type="file" class="hidden" />
                    </label>
                </div>
        </div>

        <div class="p-6 rounded-b border-t border-gray-200">
            <button
                class="text-white font-medium text-sm px-5 py-2.5 text-center rounded-lg bg-gradient-to-br from-pink-500 to-voilet-500 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform"
                type="submit">Add product</button>
        </div>
        </form>
    </div>
</div>
{{-- <div class="mt-4 relative overflow-x-auto"> --}}
    {{-- @forelse ($datajasa as $item)
        
    <div class="w-screen min-w-max flex gap-4">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <a href="#">
                <img class="rounded-t-lg w-full" src="asset/IT.png" alt="" />
            </a>
            <div class="p-4 pt-3">
                <a href="#">
                    <h5 class="text-lgS font-medium tracking-tight text-blue-900">
                        {{ $item->product_name }}
                    </h5>
                </a>
                <h5 class="text-gray-500"> {{ $item->categories }} </h5>
                <div class="flex justify-between py-2">
                    <a class="flex gap-2 text-gray-800" href="">
                        <svg class="w-5 h-5 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 16 20">
                            <path
                                d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                        </svg>
                        Condongcatur</a>
                    <div class="flex gap-2">
                        <svg class="w-5 h-5 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <p>5.0</p>
                    </div>
                </div>
                <a href="/detailjasa"
                    class="inline-flex items-center justify-center px-3 py-4 text-sm font-medium text-center w-full bg-primary rounded-md text-white hover:bg-blue-700">
                    Pesan jasa
                </a>
            </div>
        </div>
    </div>
    @empty
    <p class="text-gray-500">Tidak ada data Jasa.</p>
    @endforelse
  </div> --}}
  
@endsection