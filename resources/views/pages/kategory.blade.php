@extends('layout.main')

@section('konten')
<div class="px-8 py-12">

    <p class="text-lg font-semibold mb-12">Bengkel Mobil Terdekat</p>
    <div class="grid gap-8 grid-cols-4">
      <div class="border rounded-xl py-6 px-10 flex flex-col gap-4 col-span-1">
        <div class="grid gap-2">
          <h1 class="text-base font-medium">WELL-COM</h1>
          <div class="flex items-center">
            <input id="vue-checkbox" type="checkbox" value=""
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox"
              class="w-full py-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Komputer</label>
          </div>
          <div class="flex items-center">
            <input id="vue-checkbox" type="checkbox" value=""
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox"
              class="w-full py-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laptop</label>
          </div>
          <div class="flex items-center">
            <input id="vue-checkbox" type="checkbox" value=""
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox"
              class="w-full py-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">HP</label>
          </div>
        </div>

        <div class="grid gap-2">
          <h1 class="text-base font-medium">Kota</h1>
          <div class="flex items-center">
            <input checked id="default-radio-1"  type="radio" value="" name="default-radio"
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox"
              class="w-full py-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sleman, Yogyakarta</label>
          </div>
          <div class="flex items-center gap-2">
            <input  id="default-radio-2" type="radio" value="" name="default-radio"
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <button id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500"
              data-dropdown-trigger="hover"
              class="  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  py-1.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              type="button">Other Location <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 4 4 4-4" />
              </svg>
            </button>
          </div>


          <!-- Dropdown menu -->
          <div id="dropdownDelay"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
              <li>
                <a href="#"
                  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Bantul</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kulon
                  Progo</a>
              </li>
              <li>
                <a href="#"
                  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yogyakarta</a>
              </li>
              <li>
                <a href="#"
                  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Gunung
                  Kidul</a>
              </li>
            </ul>
          </div>

        </div>

        <div class="grid gap-2">
          <h1 class="text-base font-medium">Kategori Lainya</h1>
          <div class="flex items-center">
            <input id="vue-checkbox" type="checkbox" value=""
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox"
              class="w-full py-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kesehatan</label>
          </div>
          <div class="flex items-center">
            <input id="vue-checkbox" type="checkbox" value=""
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox"
              class="w-full py-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Service Rumah</label>
          </div>
          <div class="flex items-center">
            <input id="vue-checkbox" type="checkbox" value=""
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox"
              class="w-full py-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alat Berat</label>
          </div>
          <div class="flex items-center">
            <input id="vue-checkbox" type="checkbox" value=""
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox"
              class="w-full py-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fashion</label>
          </div>
        </div>

        <div class="grid gap-2">
          <h1 class="text-base font-medium">Rating</h1>
          <div class="flex items-center">
            <input id="vue-checkbox" type="checkbox" value=""
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox"
              class="w-full py-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">******</label>
          </div>
          <div class="flex items-center">
            <input id="vue-checkbox" type="checkbox" value=""
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox"
              class="w-full py-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">*****</label>
          </div>
          <div class="flex items-center">
            <input id="vue-checkbox" type="checkbox" value=""
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox"
              class="w-full py-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">****</label>
          </div>
          <div class="flex items-center">
            <input id="vue-checkbox" type="checkbox" value=""
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox"
              class="w-full py-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">***</label>
          </div>
          <div class="flex items-center">
            <input id="vue-checkbox" type="checkbox" value=""
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox"
              class="w-full py-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">**</label>
          </div>
          <div class="flex items-center">
            <input id="vue-checkbox" type="checkbox" value=""
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox"
              class="w-full py-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">*</label>
          </div>
        </div>

        <div class="grid gap-2">
          <h1 class="text-base font-medium">Harga</h1>
          <div class="flex items-center">
            <input id="vue-checkbox" type="checkbox" value=""
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox"
              class="w-full py-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga Miimum</label>
          </div>

          <div class="flex items-center">
            <input id="vue-checkbox" type="checkbox" value=""
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox"
              class="w-full py-1 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga Maksimum</label>
          </div>
        </div>

      </div>

      <!-- Card -->

      <div class="flex flex-col gap-4 w-full col-span-3" style="  grid-column: span 3 / span 3;">

      <div class="w-full">
        @include('partials.card')
        @include('partials.card')
    </div>
      </div>
        
        
      </div>

      </div>
@endsection