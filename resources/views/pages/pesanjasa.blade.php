@extends('layout.main')

@section('konten')
<div class="px-8 pt-12 font-roboto ">

    <div class="grid grid-cols-6">
      <div class="col-span-2 w-full ">

        <div class="flex gap-4 mb-5 items-center">
          <img src="../../asset/PP.png" alt="" class="rounded-full w-14 h-14">
          <div class="grid ">
            <h2 class="text-base font-semibold">Susilo Bambang Pamungkas</h2>
            <h5 class="text-base text-gray-500 font-roboto font-extralight">@subangkas_123</h5>
          </div>
        </div>
        <div class="grid gap-10 pe-8">
          <div class="grid gap-4">
            <h1 class="font-roboto text-xl  font-semibold">Messages</h1>
            <form class="me-8 h-[50px]">

              <div class="relative h-full">
                <div class="absolute inset-y-0 end-0 flex items-center pe-3 pointer-events-none">
                  <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                  </svg>
                </div>
                <input type="search" id="default-search"
                  class="block w-full h-full px-4 py-2 text-sm bg-gray-100 outline-none border-2 border-gray-300 rounded-lg"
                  placeholder="Search chat" required />
              </div>
            </form>
          </div>

          <!-- side chat -->

          <div class=" grid " id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
            <button class="flex gap-4 py-6 px-4  border-l-8 items-center hover:bg-gray-200 hover:bg-opacity-10"
              id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
              aria-selected="false">
              <img src="../../asset/account/p4.png" alt="" class="rounded-full w-14 h-14">
              <div class="grid ">
                <h2 class="text-base text-start font-semibold">Sewa Alat Pancing Mbah Manjur</h2>
                <h5 class="text-base  text-gray-500 font-roboto font-extralight">Hey there! 🌼 Did you catch the latest
                  ...</h5>
              </div>
              <div
                class=" inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-400 border-2 border-white rounded-full">
                2</div>
            </button>

            <div class="bg-gray-300 w-full h-[1px]"></div>

            <button id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
              aria-selected="false"
              class="flex gap-4 py-6 px-4  border-l-8 items-center hover:bg-gray-200 hover:bg-opacity-10 ">
              <img src="../../asset/account/p3.png" alt="" class="rounded-full w-14 h-14">
              <div class="grid ">
                <h2 class="text-base text-start font-semibold">Sewa Alat Berat UD.Dongkrak</h2>
                <h5 class="text-base  text-gray-500 font-roboto font-extralight">Hey there! 🌼 Did you catch the latest
                  ...</h5>
              </div>
              <div
                class=" inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-400 border-2 border-white rounded-full">
                2</div>
            </button>
            <div class="bg-gray-300 w-full h-[1px]"></div>

            <button id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
              aria-selected="false"
              class="flex gap-4 py-6 px-4 active:bg-primary active:bg-opacity-10 border-l-8 items-center hover:bg-gray-200 hover:bg-opacity-10 ">
              <img src="../../asset/account/p1.png" alt="" class="rounded-full w-14 h-14">
              <div class="grid ">
                <h2 class="text-base text-start font-semibold">Pijet Mbah Manjur</h2>
                <h5 class="text-base  text-gray-500 font-roboto font-extralight">Hey there! 🌼 Did you catch the latest
                  ...</h5>
              </div>
              <div
                class=" inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-400 border-2 border-white rounded-full">
                2</div>
            </button>
            <div class="bg-gray-300 w-full h-[1px]"></div>

            <button id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
              aria-selected="false"
              class="flex gap-4 py-6 px-4 border-l-8 items-center hover:bg-gray-200 hover:bg-opacity-10 ">
              <img src="../../asset/account/p2.png" alt="" class="rounded-full w-14 h-14">
              <div class="grid ">
                <h2 class="text-base text-start font-semibold">Jasa Angkut sampah</h2>
                <h5 class="text-base  text-gray-500 font-roboto font-extralight">Hey there! 🌼 Did you catch the latest
                  ...</h5>
              </div>
              <div
                class=" inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-400 border-2 border-white rounded-full">
                2</div>
            </button>
            <div class="bg-gray-300 w-full h-[1px]"></div>


          </div>

        </div>
      </div>

      <!-- kolom ke 2 chat -->

      <div id="default-tab-content" class="col-span-4">

        <!-- Chat konten -->

        <div id="profile" role="tabpanel" aria-labelledby="profile-tab"
          class="hidden min-w-full bg-gray-400 bg-opacity-10 h-screen relative">

          <div class="px-8 flex justify-between bg-white pb-4">
            <div class="gap-8 flex">
              <img class="w-10 h-10" src="../../icon/shop.svg" alt="">
              <div class="flex flex-col ">
                <h2 class="text-base font-semibold">Sewa Alat Pancing Mbah Manjur</h2>
                <h5 class="text-base text-gray-400 font-roboto font-extralight">Online</h5>
              </div>
            </div>
            <div class="p-2 flex items-center">
              <a href="">
                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor" viewBox="0 0 4 15">
                  <path
                    d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                </svg>
              </a>
            </div>
          </div>

          <div class="px-8 mt-8 grid gap-8 min-h-max">



            <div class="flex items-start  gap-2.5">
              <div
                class="flex flex-col w-full max-w-[426px] leading-1.5 p-4 border-gray-200 bg-white rounded-e-xl rounded-es-xl">

                <p class="text-base font-normal py-2.5 text-gray-900">Hey! 🍕 Don't forget our pizza
                  night at your place this Saturday. I'm bringing my famous veggie pizza..."</p>
                <div class="flex items-center justify-between">
                  <span class="text-base font-normal text-gray-500">Delivered</span>
                  <span class="text-base font-normal text-gray-500">11:46</span>
                </div>
              </div>
              <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                data-dropdown-placement="bottom-start"
                class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
                type="button">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                  <path
                    d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                </svg>
              </button>
              <div id="dropdownDots"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownMenuIconButton">
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Reply</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Forward</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Copy</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Report</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Delete</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="flex items-start justify-end gap-2.5">
              <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                data-dropdown-placement="bottom-start"
                class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
                type="button">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                  <path
                    d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                </svg>
              </button>
              <div
                class="flex flex-col w-full max-w-[426px] leading-1.5 p-4 border-gray-200 bg-primary rounded-e-xl rounded-es-xl">

                <p class="text-base font-normal py-2.5 text-white">Sounds delicious, Meera! 🤩 Can't wait for Saturday!
                  By
                  the way, do you think we should get some ice cream for dessert?""</p>
                <div class="flex items-center justify-between">
                  <span class="text-base font-normal text-gray-400 ">Read</span>
                  <span class="text-base font-normal text-gray-400 ">11:46</span>
                </div>
              </div>

              <div id="dropdownDots"
                class="z-10 hidden bg-white  divide-gray-100 rounded-lg shadow w-40">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownMenuIconButton">
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Reply</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Forward</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Copy</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Report</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Delete</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="flex items-start justify-end gap-2.5" id="messageArea">
            </div>
          </div>

          <!-- form input message -->

          <form id="form" class="flex items-center absolute bottom-8  right-8 left-8 ">
            <div class="relative w-full">
              <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-auto ">
                <a href="">
                  <img src="../../icon/link.svg" class="w-6 h-6" alt="">
                </a>
              </div>
              <input type="text" id="message"
                class="bg-gray-50 border h-14 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 "
                placeholder="Search Mockups, Logos, Design Templates..." required>
              <button type="submit" class="absolute inset-y-0 end-0 flex items-center gap-4 pe-3">
                <ion-icon class="w-8 h-8" name="happy-outline"></ion-icon>
                <div class="rounded-full bg-primary p-3 w-10 h-10 flex items-center justify-center">

                  <ion-icon class="w-6 h-6 text-white" name="send"></ion-icon>
                </div>

              </button>
            </div>

          </form>
        </div>

        <div id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab"
          class="hidden min-w-full bg-gray-400 bg-opacity-10 h-screen relative">

          <div class="px-8 flex justify-between bg-white pb-4">
            <div class="gap-8 flex">
              <img class="w-10 h-10" src="../../icon/shop.svg" alt="">
              <div class="flex flex-col ">
                <h2 class="text-base font-semibold">Sewa Alat Berat UD.Dongkrak</h2>
                <h5 class="text-base text-gray-400 font-roboto font-extralight">Online</h5>
              </div>
            </div>
            <div class="p-2 flex items-center">
              <a href="">
                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor" viewBox="0 0 4 15">
                  <path
                    d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                </svg>
              </a>
            </div>
          </div>

          <div class="px-8 mt-8 grid gap-8 min-h-max">



            <div class="flex items-start  gap-2.5">
              <div
                class="flex flex-col w-full max-w-[426px] leading-1.5 p-4 border-gray-200 bg-white rounded-e-xl rounded-es-xl">

                <p class="text-base font-normal py-2.5 text-gray-900">Hey! ku punya donat enak looo"</p>
                <div class="flex items-center justify-between">
                  <span class="text-base font-normal text-gray-500">Delivered</span>
                  <span class="text-base font-normal text-gray-500">11:46</span>
                </div>
              </div>
              <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                data-dropdown-placement="bottom-start"
                class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
                type="button">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                  <path
                    d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                </svg>
              </button>
              <div id="dropdownDots"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownMenuIconButton">
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Reply</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Forward</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Copy</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Report</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Delete</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="flex items-start justify-end gap-2.5">
              <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                data-dropdown-placement="bottom-start"
                class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
                type="button">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                  <path
                    d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                </svg>
              </button>
              <div
                class="flex flex-col w-full max-w-[426px] leading-1.5 p-4 border-gray-200 bg-primary rounded-e-xl rounded-es-xl">

                <p class="text-base font-normal py-2.5 text-white">sok asik lu :v</p>
                <div class="flex items-center justify-between">
                  <span class="text-base font-normal text-gray-400 ">Read</span>
                  <span class="text-base font-normal text-gray-400 ">11:46</span>
                </div>
              </div>

              <div id="dropdownDots"
                class="z-10 hidden bg-white  divide-gray-100 rounded-lg shadow w-40">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownMenuIconButton">
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Reply</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Forward</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Copy</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Report</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Delete</a>
                  </li>
                </ul>
              </div>
            </div>

          </div>

          <!-- form input message -->

          <form class="flex items-center absolute bottom-8  right-8 left-8 ">
            <label for="voice-search" class="sr-only">Search</label>
            <div class="relative w-full">
              <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-auto ">
                <a href="">
                  <img src="../../icon/link.svg" class="w-6 h-6" alt="">
                </a>
              </div>
              <input type="text" id="voice-search"
                class="bg-gray-50 border h-14 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 "
                placeholder="Search Mockups, Logos, Design Templates..." required>
              <button type="button" class="absolute inset-y-0 end-0 flex items-center gap-4 pe-3">
                <ion-icon class="w-8 h-8" name="happy-outline"></ion-icon>
                <div class="rounded-full bg-primary p-3 w-10 h-10 flex items-center justify-center">

                  <ion-icon class="w-6 h-6 text-white" name="send"></ion-icon>
                </div>

              </button>
            </div>

          </form>
        </div>

        <div id="settings" role="tabpanel" aria-labelledby="settings-tab"
          class="hidden min-w-full bg-gray-400 bg-opacity-10 h-screen relative">

          <div class="px-8 flex justify-between bg-white pb-4">
            <div class="gap-8 flex">
              <img class="w-10 h-10" src="../../icon/shop.svg" alt="">
              <div class="flex flex-col ">
                <h2 class="text-base font-semibold">Pijet Mbah Manjur</h2>
                <h5 class="text-base text-gray-400 font-roboto font-extralight">Offline</h5>
              </div>
            </div>
            <div class="p-2 flex items-center">
              <a href="">
                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor" viewBox="0 0 4 15">
                  <path
                    d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                </svg>
              </a>
            </div>
          </div>

          <div class="px-8 mt-8 grid gap-8 min-h-max">


            <div class="flex items-start justify-end gap-2.5">
              <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                data-dropdown-placement="bottom-start"
                class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
                type="button">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                  <path
                    d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                </svg>
              </button>
              <div
                class="flex flex-col w-full max-w-[426px] leading-1.5 p-4 border-gray-200 bg-primary rounded-e-xl rounded-es-xl">

                <p class="text-base font-normal py-2.5 text-white">Sounds delicious, Meera! 🤩 Can't wait for Saturday!
                  By
                  the way, do you think we should get some ice cream for dessert?""</p>
                <div class="flex items-center justify-between">
                  <span class="text-base font-normal text-gray-400 ">Read</span>
                  <span class="text-base font-normal text-gray-400 ">11:46</span>
                </div>
              </div>

              <div id="dropdownDots"
                class="z-10 hidden bg-white  divide-gray-100 rounded-lg shadow w-40">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownMenuIconButton">
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Reply</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Forward</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Copy</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Report</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Delete</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="flex items-start  gap-2.5">
              <div
                class="flex flex-col w-full max-w-[426px] leading-1.5 p-4 border-gray-200 bg-white rounded-e-xl rounded-es-xl">

                <p class="text-base font-normal py-2.5 text-gray-900">Hey! 🍕 Don't forget our pizza
                  night at your place this Saturday. I'm bringing my famous veggie pizza..."</p>
                <div class="flex items-center justify-between">
                  <span class="text-base font-normal text-gray-500">Delivered</span>
                  <span class="text-base font-normal text-gray-500">11:46</span>
                </div>
              </div>
              <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                data-dropdown-placement="bottom-start"
                class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
                type="button">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                  <path
                    d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                </svg>
              </button>
              <div id="dropdownDots"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownMenuIconButton">
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Reply</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Forward</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Copy</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Report</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Delete</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="flex items-start justify-end gap-2.5">
              <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                data-dropdown-placement="bottom-start"
                class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
                type="button">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                  <path
                    d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                </svg>
              </button>
              <div
                class="flex flex-col w-full max-w-[426px] leading-1.5 p-4 border-gray-200 bg-primary rounded-e-xl rounded-es-xl">

                <p class="text-base font-normal py-2.5 text-white">Sounds delicious, Meera! 🤩 Can't wait for Saturday!
                  By
                  the way, do you think we should get some ice cream for dessert?""</p>
                <div class="flex items-center justify-between">
                  <span class="text-base font-normal text-gray-400 ">Read</span>
                  <span class="text-base font-normal text-gray-400 ">11:46</span>
                </div>
              </div>

              <div id="dropdownDots"
                class="z-10 hidden bg-white  divide-gray-100 rounded-lg shadow w-40">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownMenuIconButton">
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Reply</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Forward</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Copy</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Report</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Delete</a>
                  </li>
                </ul>
              </div>
            </div>

          </div>

          <!-- form input message -->

          <form class="flex items-center absolute bottom-8  right-8 left-8 ">
            <label for="voice-search" class="sr-only">Search</label>
            <div class="relative w-full">
              <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-auto ">
                <a href="">
                  <img src="../../icon/link.svg" class="w-6 h-6" alt="">
                </a>
              </div>
              <input type="text" id="voice-search"
                class="bg-gray-50 border h-14 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 "
                placeholder="Search Mockups, Logos, Design Templates..." required>
              <button type="button" class="absolute inset-y-0 end-0 flex items-center gap-4 pe-3">
                <ion-icon class="w-8 h-8" name="happy-outline"></ion-icon>
                <div class="rounded-full bg-primary p-3 w-10 h-10 flex items-center justify-center">

                  <ion-icon class="w-6 h-6 text-white" name="send"></ion-icon>
                </div>

              </button>
            </div>

          </form>
        </div>

        <div id="contacts" role="tabpanel" aria-labelledby="contacts-tab"
          class="hidden min-w-full bg-gray-400 bg-opacity-10 h-screen relative">

          <div class="px-8 flex justify-between bg-white pb-4">
            <div class="gap-8 flex">
              <img class="w-10 h-10" src="../../icon/shop.svg" alt="">
              <div class="flex flex-col ">
                <h2 class="text-base font-semibold">Jasa Angkut sampah</h2>
                <h5 class="text-base text-gray-400 font-roboto font-extralight">Online</h5>
              </div>
            </div>
            <div class="p-2 flex items-center">
              <a href="">
                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor" viewBox="0 0 4 15">
                  <path
                    d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                </svg>
              </a>
            </div>
          </div>

          <div class="px-8 mt-8 grid gap-8 min-h-max">

            <div class="flex items-start justify-end gap-2.5">
              <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                data-dropdown-placement="bottom-start"
                class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
                type="button">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                  <path
                    d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                </svg>
              </button>
              <div
                class="flex flex-col w-full max-w-[426px] leading-1.5 p-4 border-gray-200 bg-primary rounded-e-xl rounded-es-xl">

                <p class="text-base font-normal py-2.5 text-white">Sounds delicious, Meera! 🤩 Can't wait for Saturday!
                  By
                  the way, do you think we should get some ice cream for dessert?""</p>
                <div class="flex items-center justify-between">
                  <span class="text-base font-normal text-gray-400 ">Read</span>
                  <span class="text-base font-normal text-gray-400 ">11:46</span>
                </div>
              </div>

              <div id="dropdownDots"
                class="z-10 hidden bg-white  divide-gray-100 rounded-lg shadow w-40">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownMenuIconButton">
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Reply</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Forward</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Copy</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Report</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Delete</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="flex items-start  gap-2.5">
              <div
                class="flex flex-col w-full max-w-[426px] leading-1.5 p-4 border-gray-200 bg-white rounded-e-xl rounded-es-xl">

                <p class="text-base font-normal py-2.5 text-gray-900">Hey! 🍕 Don't forget our pizza
                  night at your place this Saturday. I'm bringing my famous veggie pizza..."</p>
                <div class="flex items-center justify-between">
                  <span class="text-base font-normal text-gray-500">Delivered</span>
                  <span class="text-base font-normal text-gray-500">11:46</span>
                </div>
              </div>
              <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                data-dropdown-placement="bottom-start"
                class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
                type="button">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                  <path
                    d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                </svg>
              </button>

              <div id="dropdownDots"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownMenuIconButton">
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Reply</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Forward</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Copy</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Report</a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100">Delete</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- form input message -->

          <form class="flex items-center absolute bottom-8  right-8 left-8 ">
            <label for="voice-search" class="sr-only">Search</label>
            <div class="relative w-full">
              <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-auto ">
                <a href="">
                  <img src="../../icon/link.svg" class="w-6 h-6" alt="">
                </a>
              </div>
              <input type="text" id="voice-search"
                class="bg-gray-50 border h-14 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 "
                placeholder="Search Mockups, Logos, Design Templates..." required>
              <button type="button" class="absolute inset-y-0 end-0 flex items-center gap-4 pe-3">
                <ion-icon class="w-8 h-8" name="happy-outline"></ion-icon>
                <div class="rounded-full bg-primary p-3 w-10 h-10 flex items-center justify-center">
                  <ion-icon class="w-6 h-6 text-white" name="send"></ion-icon>
                </div>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @endsection