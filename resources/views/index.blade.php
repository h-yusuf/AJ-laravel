<!DOCTYPE html>
<html>

<head>
  <title>Ada Jasa Web</title>
  
  <link rel="website icon" style="border-radius: 50%" href="icon/icon.png" type="png" />
  <link rel="stylesheet" href="css/output.css" type="text/css"/>
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" /> -->
   <!-- Scripts -->
   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <!-- Navbar -->
  <div class="sticky top-0 z-50 bg-white">
    <!-- Navbar -->
    <div class="flex justify-between  px-5 py-1 pb-2 shadow-sm" style="background-color: #ffffff">
      <a class="text-sm" href="#">Download AdaJasa App</a>
      <ul class="flex gap-4 text-sm">
        <li class="li-nav"><a href="">FaQ</a></li>
        <li class="li-nav"><a href="">Mulai Buka Jasa</a></li>
        <li class="li-nav"><a href=""> promo</a></li>
        <li class="li-nav"><a href="">About Us</a></li>
      </ul>
    </div>
    <nav class="flex py-4 px-6 shadow-md justify-between">
      <div class="flex items-center gap-8">
      <img src="icon/Ada jasa blue.png" alt="" />
        <a href="" class="flex gap-2">
          <svg class="w-6 h-6 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 17 21">
            <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
              <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
              <path
                d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
            </g>
          </svg>
          <h3 class="max-w-[245px] text-base leading-4 text-primary">
            Condongcatur, Depok, Sleman, Yogyakarta
          </h3>
        </a>
      </div>

      <div class="flex items-center gap-8 w-1/2 justify-end">
        <form class="w-1/2">
          <label for="default-search"
            class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
          <div class="relative">
            <div class="absolute inset-y-0 end-0 flex items-center pe-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
              </svg>
            </div>
            <input type="search" id="default-search"
              class="block w-full px-4 py-2 text-sm outline-none border-2 border-gray-300 rounded-lg"
              placeholder="Cari Jasa" required />
          </div>
        </form>
        <div class="flex gap-4 items-center">
          <button id="log_in" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
            class="text-white bg-primary  hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 font-medium rounded-lg text-sm py-2 p-0.5 px-5 text-center ">
            Log in
          </button>
          <button id="reg" data-modal-target="register" data-modal-toggle="register"
            class="relative inline-flex items-center justify-center p-0.5  overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-primary  group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200">
            <span
              class="relative px-5 py-1.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">
              Register
            </span>
          </button>
        </div>

        <!--modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
          class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                  Sign in to our platform
                </h3>
                <button type="button"
                  class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                  data-modal-hide="authentication-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                  </svg>
                  <span class="sr-only">Close modal</span>
                </button>
              </div>
              <!-- Modal body -->
              <div class="p-4 md:p-5">
                <form method="POST" action="{{ route('login') }}">
                  @csrf
          
                  <!-- Email Address -->
                  <div>
                      <x-input-label for="email" :value="__('Email')" />
                      <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
          
                  <!-- Password -->
                  <div class="mt-4">
                      <x-input-label for="password" :value="__('Password')" />
          
                      <x-text-input id="password" class="block mt-1 w-full"
                                      type="password"
                                      name="password"
                                      required autocomplete="current-password" />
          
                      <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  </div>
          
                  <!-- Remember Me -->
                  <div class="block mt-4">
                      <label for="remember_me" class="inline-flex items-center">
                          <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                          <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                      </label>
                  </div>
          
                  <div class="flex items-center justify-end mt-4">
                      @if (Route::has('password.request'))
                          <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                              {{ __('Forgot your password?') }}
                          </a>
                      @endif
          
                      <x-primary-button class="ms-3">
                          {{ __('Log in') }}
                      </x-primary-button>
                  </div>
              </form>
                {{-- old form log in --}}
                {{-- <form id="form" class="space-y-4" action="{{route('login')}}" method="POST">
                  @csrf
                  <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your
                      email</label>
                    <input type="email" name="email" id="email"
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                      placeholder="name@company.com" required>
                  </div>
                  <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your
                      password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••"
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                      required>
                  </div>
                  <div class="flex justify-between">
                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value=""
                          class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
                      </div>
                      <label for="remember" class="ms-2 text-sm font-medium text-gray-900">Remember
                        me</label>
                    </div>
                    <a href="#" class="text-sm text-blue-700 hover:underline">Lost Password?</a>
                  </div>
                  <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login
                    to your account</button>
                  <div class="text-sm font-medium text-gray-500">
                    Not registered? <a href="#" class="text-blue-700 hover:underline">Create
                      account</a>
                  </div>
                </form> --}}
              </div>
            </div>
          </div>
        </div>
       {{-- @if ($errors->get('name'))
          <div>error</div>
       @endif     --}}
        <div id="register" tabindex="-1" aria-hidden="true"
          class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative p-4 w-full max-w-md max-h-full ">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow pb-6">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-lg font-semibold text-gray-900">
                  Register
                </h3>
                <button type="button"
                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                  data-modal-toggle="register">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                  </svg>
                  <span class="sr-only">Close modal</span>
                </button>
              </div>
              <!-- Modal body -->
              <div class="p-4 md:p-5">
                <form method="POST" action="{{ route('register') }}">
                  @csrf
          
                  <!-- Name -->
                  <div>
                      <x-input-label for="name" :value="__('Name')" />
                      <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                      <x-input-error :messages="$errors->get('name')" class="mt-2" />
                  </div>
          
                  <!-- Email Address -->
                  <div class="mt-4">
                      <x-input-label for="email" :value="__('Email')" />
                      <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
          
                  <!-- Password -->
                  <div class="mt-4">
                      <x-input-label for="password" :value="__('Password')" />
          
                      <x-text-input id="password" class="block mt-1 w-full"
                                      type="password"
                                      name="password"
                                      required autocomplete="new-password" />
          
                      <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  </div>
          
                  <!-- Confirm Password -->
                  <div class="mt-4">
                      <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
          
                      <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                      type="password"
                                      name="password_confirmation" required autocomplete="new-password" />
          
                      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                  </div>
          
                  <div class="flex items-center justify-end mt-4">
                      <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                          {{ __('Already registered?') }}
                      </a>
          
                      <x-primary-button class="ms-4">
                          {{ __('Register') }}
                      </x-primary-button>
                  </div>
              </form>
              </div>

              {{-- old form register --}}
              
              {{-- <form class="max-w-sm mx-auto mt-6" action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-5">
                  <label for="repeat-password"
                    class="block mb-2 text-sm font-medium text-gray-900">Youre Name</label>
                  <input type="text" id="name" name="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required>
                </div>
                <div class="mb-5">
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your
                    email</label>
                  <input type="email" name="email" id="email"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="name@flowbite.com" required>
                </div>
                <div class="mb-5">
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your
                    password</label>
                  <input type="password" id="password" name="password"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required>
                </div>
               
                <div class="flex items-start mb-5">
                  <div class="flex items-center h-5">
                    <input id="terms" type="checkbox" value=""
                      class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300"
                      required>
                  </div>
                  <label for="terms" class="ms-2 text-sm font-medium text-gray-900">I agree with the
                    <a href="#" class="text-blue-600 hover:underline">terms and
                      conditions</a></label>
                </div>
                <button type="submit"
                  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Register
                  new account</button>
              </form> --}}

            </div>
          </div>
        </div>


      </div>
    </nav>
  </div>

  <div class="px-8 py-12 ">
    <div id="gallery" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden rounded-lg ">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="asset/banner.png"
            class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
          <img src="asset/manjur.png"
            class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="asset/welcom.png"
            class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="asset/tavel.png"
            class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="asset/bersihrumah.png"
            class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
        </div>
      </div>
      <!-- Slider controls -->
      <button type="button"
        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
          class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
          <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5 1 1 5l4 4" />
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button type="button"
        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
          class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
          <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 9 4-4-4-4" />
          </svg>
          <span class="sr-only">Next</span>
        </span>
      </button>
    </div>


    <div class="w-full grid border rounded-lg mt-10 p-8">
  
  
      <!-- card jasa popular -->
  
      <div class="mt-4 relative overflow-x-hidden">
        <div class="w-screen min-w-max flex gap-4">
          <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow"
          >
            <a href="#">
              <img
                class="rounded-t-lg w-full"
                src="asset/bengkel2.png"
                alt=""
              />
            </a>
            <div class="p-4 pt-3">
              <a href="#">
                <h5 class="text-lgS font-medium tracking-tight text-primary">
                  Bengkel Maju Makmur
                </h5>
              </a>
              <h5 class="text-gray-500">Bengkel</h5>
              <div class="flex justify-between py-2">
                <a class="flex gap-2 text-gray-800" href="">
                  <svg
                    class="w-5 h-5 text-gray-700"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 16 20"
                  >
                    <path
                      d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"
                    />
                  </svg>
                  Maguwoharjo</a
                >
                <div class="flex gap-2">
                  <svg
                    class="w-5 h-5 text-yellow-300"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 22 20"
                  >
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
                    />
                  </svg>
                  <p>4.0</p>
                </div>
              </div>
              <a
                href="#"
                class="inline-flex items-center justify-center px-3 py-4 text-sm font-medium text-center w-full bg-primary rounded-md text-white hover:bg-blue-700"
              >
                Pesan jasa
              </a>
            </div>
          </div>
  
          <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
          >
            <a href="#">
              <img
                class="rounded-t-lg w-full"
                src="asset/klinikoke.png"
                alt=""
              />
            </a>
            <div class="p-4 pt-3">
              <a href="#">
                <h5 class="text-lgS font-medium tracking-tight text-primary">
                  Klinik Fatamorgana
                </h5>
              </a>
              <h5 class="text-gray-500">Kesehatan</h5>
              <div class="flex justify-between py-2">
                <a class="flex gap-2 text-gray-800" href="">
                  <svg
                    class="w-5 h-5 text-gray-700"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 16 20"
                  >
                    <path
                      d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"
                    />
                  </svg>
                  Gejayan</a
                >
                <div class="flex gap-2">
                  <svg
                    class="w-5 h-5 text-yellow-300"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 22 20"
                  >
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
                    />
                  </svg>
                  <p>4.5</p>
                </div>
              </div>
              <a
                href="#"
                class="inline-flex items-center justify-center px-3 py-4 text-sm font-medium text-center w-full bg-primary rounded-md text-white hover:bg-blue-700"
              >
                Pesan jasa
              </a>
            </div>
          </div>
  
          <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
          >
            <a href="#">
              <img
                class="rounded-t-lg w-full"
                src="asset/beautyhouse.png"
                alt=""
              />
            </a>
            <div class="p-4 pt-3">
              <a href="#">
                <h5 class="text-lgS font-medium tracking-tight text-primary">
                  Beauty Home
                </h5>
              </a>
              <h5 class="text-gray-500">Kebersihan</h5>
              <div class="flex justify-between py-2">
                <a class="flex gap-2 text-gray-800" href="">
                  <svg
                    class="w-5 h-5 text-gray-700"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 16 20"
                  >
                    <path
                      d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"
                    />
                  </svg>
                  Condongcatur</a
                >
                <div class="flex gap-2">
                  <svg
                    class="w-5 h-5 text-yellow-300"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 22 20"
                  >
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
                    />
                  </svg>
                  <p>4.0</p>
                </div>
              </div>
              <a
                href="#"
                class="inline-flex items-center justify-center px-3 py-4 text-sm font-medium text-center w-full bg-primary rounded-md text-white hover:bg-blue-700"
              >
                Pesan jasa
              </a>
            </div>
          </div>
  
          <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow"
          >
            <a href="#">
              <img
                class="rounded-t-lg w-full"
                src="asset/IT.png"
                alt=""
              />
            </a>
            <div class="p-4 pt-3">
              <a href="#">
                <h5 class="text-lgS font-medium tracking-tight text-primary">
                  Well-Com
                </h5>
              </a>
              <h5 class="text-gray-500">Teknologi</h5>
              <div class="flex justify-between py-2">
                <a class="flex gap-2 text-gray-800" href="">
                  <svg
                    class="w-5 h-5 text-gray-700"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 16 20"
                  >
                    <path
                      d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"
                    />
                  </svg>
                  Condongcatur</a
                >
                <div class="flex gap-2">
                  <svg
                    class="w-5 h-5 text-yellow-300"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 22 20"
                  >
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
                    />
                  </svg>
                  <p>5.0</p>
                </div>
              </div>
              <a
                href="#"
                class="inline-flex items-center justify-center px-3 py-4 text-sm font-medium text-center w-full bg-primary rounded-md text-white hover:bg-blue-700"
              >
                Pesan jasa
              </a>
            </div>
          </div>
  
          <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow"
          >
            <a href="#">
              <img
                class="rounded-t-lg w-full"
                src="asset/kategory.png"
                alt=""
              />
            </a>
            <div class="p-4 pt-3">
              <a href="#">
                <h5 class="text-lgS font-medium tracking-tight text-primary">
                  Bengkel Las Rejeki Baja Hitam
                </h5>
              </a>
              <h5 class="text-gray-500">Bengkel</h5>
              <div class="flex justify-between py-2">
                <a class="flex gap-2 text-gray-800" href="">
                  <svg
                    class="w-5 h-5 text-gray-700"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 16 20"
                  >
                    <path
                      d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"
                    />
                  </svg>
                  Condongcatur</a
                >
                <div class="flex gap-2">
                  <svg
                    class="w-5 h-5 text-yellow-300"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 22 20"
                  >
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
                    />
                  </svg>
                  <p>4.9</p>
                </div>
              </div>
              <a
                href="#"
                class="inline-flex items-center justify-center px-3 py-4 text-sm font-medium text-center w-full bg-primary rounded-md text-white hover:bg-blue-700"
              >
                Pesan jasa
              </a>
            </div>
          </div>
  
          <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow"
          >
            <a href="#">
              <img
                class="rounded-t-lg w-full"
                src="asset/kategory.png"
                alt=""
              />
            </a>
            <div class="p-4 pt-3">
              <a href="#">
                <h5 class="text-lgS font-medium tracking-tight text-primary">
                  Bengkel Las Rejeki Baja Hitam
                </h5>
              </a>
              <h5 class="text-gray-500">Bengkel</h5>
              <div class="flex justify-between py-2">
                <a class="flex gap-2 text-gray-800" href="">
                  <svg
                    class="w-5 h-5 text-gray-700"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 16 20"
                  >
                    <path
                      d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"
                    />
                  </svg>
                  Condongcatur</a
                >
                <div class="flex gap-2">
                  <svg
                    class="w-5 h-5 text-yellow-300"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 22 20"
                  >
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
                    />
                  </svg>
                  <p>4.9</p>
                </div>
              </div>
              <a
                href="#"
                class="inline-flex items-center justify-center px-3 py-4 text-sm font-medium text-center w-full bg-primary rounded-md text-white hover:bg-blue-700"
              >
                Pesan jasa
              </a>
            </div>
          </div>
  
          <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow"
          >
            <a href="#">
              <img
                class="rounded-t-lg w-full"
                src="asset/kategory.png"
                alt=""
              />
            </a>
            <div class="p-4 pt-3">
              <a href="#">
                <h5 class="text-lgS font-medium tracking-tight text-primary">
                  Bengkel Las Rejeki Baja Hitam
                </h5>
              </a>
              <h5 class="text-gray-500">Bengkel</h5>
              <div class="flex justify-between py-2">
                <a class="flex gap-2 text-gray-800" href="">
                  <svg
                    class="w-5 h-5 text-gray-700"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 16 20"
                  >
                    <path
                      d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"
                    />
                  </svg>
                  Condongcatur</a
                >
                <div class="flex gap-2">
                  <svg
                    class="w-5 h-5 text-yellow-300"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 22 20"
                  >
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
                    />
                  </svg>
                  <p>4.9</p>
                </div>
              </div>
              <a
                href="#"
                class="inline-flex items-center justify-center px-3 py-4 text-sm font-medium text-center w-full bg-primary rounded-md text-white hover:bg-blue-700"
              >
                Pesan jasa
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer bar -->

  <footer class="bg-white ">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
      <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
          <a href="https://flowbite.com/" class="flex items-center">
            <img src="icon/Ada jasa blue.png" class="h-10 me-3"  />

          </a>
          <div class="flex py-4 gap-2 text-gray-500">
            <a href="" class=" hover:underline">Home</a>|
            <a href="" class=" hover:underline">About</a>|
            <a href="" class=" hover:underline">Contact</a>|
            <a href="" class=" hover:underline">Faq</a>|

          </div>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">
              Contact
            </h2>
            <ul class="text-gray-500 font-medium">
              <li class="mb-4">
                <a href="" class="hover:underline">WhatsApp</a>
              </li>
              <li>
                <a href="" class="hover:underline">Email</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">
              Follow us
            </h2>
            <ul class="text-gray-500 font-medium">
              <li class="mb-4">
                <a href="https://github.com/h-yusuf" class="hover:underline">Github</a>
              </li>
              <li>
                <a href="" class="hover:underline">Discord</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">
              Legal
            </h2>
            <ul class="text-gray-500 font-medium">
              <li class="mb-4">
                <a href="#" class="hover:underline">Privacy Policy</a>
              </li>
              <li>
                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center">© 2023
          <a href="https://flowbite.com/" class="hover:underline">AdaJasa™</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 sm:justify-center sm:mt-0">
          <a href="#" class="text-gray-500 hover:text-gray-900">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 8 19">
              <path fill-rule="evenodd"
                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                clip-rule="evenodd" />
            </svg>
            <span class="sr-only">Facebook page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 ms-5">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 21 16">
              <path
                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
            </svg>
            <span class="sr-only">Discord community</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 ms-5">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 20 17">
              <path fill-rule="evenodd"
                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                clip-rule="evenodd" />
            </svg>
            <span class="sr-only">Twitter page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 ms-5">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                clip-rule="evenodd" />
            </svg>
            <span class="sr-only">GitHub account</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 ms-5">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 15 15">
              <path fill-rule="evenodd"
                d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"
                clip-rule="evenodd" />
              <path d="M3 5.012H0V15h3V5.012Z" />
            </svg>

            <span class="sr-only">Dribbble account</span>
          </a>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- error register or login --}}

@if(count($errors) > 0)
<script>
    Swal.fire({
      icon: "error",
      title: "Failed."
    });
</script>
@endif
@if($message = Session::get('succes-register'))
<script>
    Swal.fire({
  icon: "success",
  title: "yeay",
  text: "{{ $message }}",
});
</script>
@endif

@if($message = Session::get('logout'))
<script>
    Swal.fire({
      icon: "success",
      title: "Logout",
      text: "{{ $message }}",
    });
</script>
@endif

@if($message = Session::get('warning'))
<script>
    Swal.fire({
  icon: "error",
  title: "Opps...",
  text: "{{ $message }}",
});
</script>
@endif
</body>

</html>