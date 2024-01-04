@extends('layout.main')

@section('konten')

  <div class="px-8 py-12">
    <div id="gallery" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="../../asset/banner.png"
            class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
          <img src="../../asset/bersihrumah.png"
            class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="../../asset/manjur.png"
            class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="../../asset/welcom.png"
            class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" />
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="../../asset/banner.png"
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

    <div class="grid gap-8">
      <h1 class="text-2xl font-medium font-poppins">Kategori Jasa</h1>
      <div class="grid gap-8 grid-cols-3 px-14">
        <a href="/kategory"
          class="flex kategory gap-8 items-center p-4 borde-shadow-sm w-full roun rounded-xl hover:bg-blue-50 ">
          <img class="h-10" src="../../icon/Kategory/ic_outline-laptop.png" alt="" />
          <h1 class="text-2xl font-medium">Teknologi</h1>
        </a>

        <div
          class="flex gap-8 kategory items-center p-4  drop-shadow-sm w-full rounded-xl hover:bg-blue-50 ">
          <img class="h-10" src="../../icon/Kategory/bi_house-gear.png" alt="" />
          <h1 class="text-2xl font-medium">Rumah</h1>
        </div>

        <div
          class="flex gap-8 kategory items-center p-4  drop-shadow-sm w-full rounded-xl hover:bg-blue-50 ">
          <img class="h-10" src="../../icon/Kategory/carbon_vehicle-services.png" alt="" />
          <h1 class="text-2xl font-medium">Bengkel</h1>
        </div>

        <div
          class="flex gap-8 kategory items-center p-4  drop-shadow-sm w-full rounded-xl hover:bg-blue-50 ">
          <img class="h-10" src="../../icon/Kategory/Frame 597.png" alt="" />
          <h1 class="text-2xl font-medium">Kesehatan</h1>
        </div>

        <div
          class="flex gap-8 kategory items-center p-4  drop-shadow-sm w-full rounded-xl hover:bg-blue-50 ">
          <img class="h-10" src="../../icon/Kategory/mingcute_broom-line.png" alt="" />
          <h1 class="text-2xl font-medium">Kebersihan</h1>
        </div>

        <div
          class="flex gap-8 kategory items-center p-4  drop-shadow-sm w-full rounded-xl hover:bg-blue-50 ">
          <img class="h-10" src="../../icon/Kategory/mdi_excavator.png" alt="" />
          <h1 class="text-2xl font-medium">Alat Berat</h1>
        </div>
      </div>
    </div>

    <!-- Jasa Popular -->

    <div class="w-full grid border rounded-lg mt-10 p-8">
      <div class="flex justify-between">
        <h1 class="text-2xl font-poppins font-medium">Jasa Popular</h1>
        <h1 class="text-base font-poppins font-medium">Lihat Semua</h1>
      </div>

      <!-- card jasa popular -->

      @include('partials.card')

    <!-- Jasa Rekomendasi -->

      <div class="w-full grid border rounded-lg mt-5 p-8">
        <div class="flex justify-between">
          <h1 class="text-2xl font-poppins font-medium">Jasa Rekomendasi</h1>
          <h1 class="text-base font-poppins font-medium">Lihat Semua</h1>
        </div>
  
        <!-- card jasa popular -->
  
       @include('partials.card')
  
      </div>
    </div>

    




  </div>

  <!-- Chat Popup -->

  <div class=" bottom-6 right-6 fixed px-6 py-2 bg-primary rounded-md">
    <a href="">
      <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 18"
        fill="currentColor">
        <path
          d="M18 4H16V9C16 10.0609 15.5786 11.0783 14.8284 11.8284C14.0783 12.5786 13.0609 13 12 13H9L6.846 14.615C7.17993 14.8628 7.58418 14.9977 8 15H11.667L15.4 17.8C15.5731 17.9298 15.7836 18 16 18C16.2652 18 16.5196 17.8946 16.7071 17.7071C16.8946 17.5196 17 17.2652 17 17V15H18C18.5304 15 19.0391 14.7893 19.4142 14.4142C19.7893 14.0391 20 13.5304 20 13V6C20 5.46957 19.7893 4.96086 19.4142 4.58579C19.0391 4.21071 18.5304 4 18 4Z"
          fill="currentColor" />
        <path
          d="M12 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V9C0 9.53043 0.210714 10.0391 0.585786 10.4142C0.960859 10.7893 1.46957 11 2 11H3V13C3 13.1857 3.05171 13.3678 3.14935 13.5257C3.24698 13.6837 3.38668 13.8114 3.55279 13.8944C3.71889 13.9775 3.90484 14.0126 4.08981 13.996C4.27477 13.9793 4.45143 13.9114 4.6 13.8L8.333 11H12C12.5304 11 13.0391 10.7893 13.4142 10.4142C13.7893 10.0391 14 9.53043 14 9V2C14 1.46957 13.7893 0.960859 13.4142 0.585786C13.0391 0.210714 12.5304 0 12 0Z"
          fill="currentColor" />
      </svg>
    </a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @if($message = Session::get('succes'))
  <script>
  Swal.fire({
    icon: "success",
    title: "Login Success",
    text: "{{ $message }}",
  });
  </script>
  @endif

  @endsection