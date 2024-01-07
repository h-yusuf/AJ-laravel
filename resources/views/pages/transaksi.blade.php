@extends('layout.main')

@section('konten')
    <div class="px-32">
        <div class="my-12">
            <div class="rounded-md border min-w-max p-12 px-16 grid gap-4">

                <div class="flex  mb-8">
                    <h1 class=" flex items-center  text-xl text-primary w-full font-semibold">Riwayat Transaksi</h1>

                    <form class="w-1/2">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 end-0 flex items-center pe-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full px-4 py-2 text-sm outline-none border-2 border-gray-300 rounded-lg"
                                placeholder="Anda bisa cari berdasarkan nama toko, nama jasa.. " required />
                        </div>
                    </form>

                </div>

                {{-- @dd($dataTransaksi); --}}

                @forelse ($dataTransaksi as $item)
                    <div class="grid gap-8" id="preview-container">
                        <div class="flex justify-between">
                            <div class="flex items-center gap-8">
                                <img src="asset/warung.png" width="40">
                                <div class="w-35"><span class="font-semibold">
                                        {{ $item->jasa->product_name }} </span>
                                    <p class="text-sm text-gray-400"> {{ $item->jasa->categories }} </p>
                                </div>
                                <img src="asset/bx_chat.png" width="30" class="-mt-2">
                            </div>
                            <div class="grid justify-items-end gap-2">
                                <form action="{{ route('deleteItem') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="item_id" value="{{ $item->id_transaksi }}">
                                    <button type="submit">
                                        <svg class="w-6 h-6 text-primary" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z" />
                                        </svg>
                                    </button>
                                </form>
                                <a href="">
                                </a>
                                <h2>{{ $item->date }} </h2>
                                <h1 class="font-semibold text-lg text-end pt-4">Rp. {{ $item->price }} </h1>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="flex items-start justify-between w-full">
                                <div class="flex gap-5">
                                    <img src="{{ $item->jasa->layananUtama->imgLU }}" width="60">
                                    <div class="w-40">
                                        <h5 class="font-semibold">{{ $item->jasa->layananUtama->nameLU }}</h5>
                                        <p class="text-sm text-gray-400">
                                            {{ $item->jasa->layananTambahan->nameLT }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <button type="button"
                                    class=" h-[40px] w-[150px] bg-primary text-white  border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 ">Nilai</button>
                                <button type="button"
                                    class="text-primary h-[40px] w-[150px] hover:text-white border border-primary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 ">Pesan
                                    Lagi</button>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-8">
                @empty
                    <p class="text-gray-500">Tidak ada data keranjang.</p>
                @endforelse
            </div>


            {{-- {{ $dataKeranjang->links() }} --}}

        </div>
    </div>
    </div>

    @if ($message = Session::get('succes'))
        <script>
            Swal.fire({
                icon: "success",
                title: "yeay",
                text: "{{ $message }}",
            });
        </script>
    @endif
@endsection
