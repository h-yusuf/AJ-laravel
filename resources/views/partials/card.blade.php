<div class="mt-4 relative overflow-x-auto">

    <div class="w-screen min-w-max flex gap-4">
        @forelse ($datajasa as $item)
        {{-- @dd($datajasa); --}}
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div style="width: 300px ; height:240px;" class=" rounded-t-lg overflow-hidden " href="#">
                    <img  class=" h-full " src="{{ $item->img_jasa }}" alt="" />
                </div>
                <div class="p-4 pt-3">
                    <a href="#">
                        <h5 class="text-lgS font-medium tracking-tight text-blue-900">
                            {{ $item->product_name }}
                        </h5>
                    </a>
                    <h5 class="text-gray-500">{{ $item->categories }}</h5>
                    <div class="flex justify-between py-2">
                        <a class="flex gap-2 text-gray-800" href="">
                            <svg class="w-5 h-5 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 16 20">
                                <path
                                    d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                            </svg>
                            {{ $item->location }}
                        </a>
                        <div class="flex gap-2">
                            <svg class="w-5 h-5 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <p>5.0</p>
                        </div>
                        {{-- <input type="text" value="{{ $item->id_jasa }}"> --}}
                    </div>
                    <form action="{{ route('sesionJasa') }}" method="POST"
                    {{-- class="inline-flex items-center justify-center px-3 py-4 text-sm font-medium text-center w-full bg-primary rounded-md text-white hover:bg-blue-700"> --}}
                    >
                        @csrf
                        <input type="hidden" name="sesion_jasa" value="{{ $item->idJasa }}">
                        <button  type="submit"
                        class="inline-flex items-center justify-center px-3 py-4 text-sm font-medium text-center w-full bg-primary rounded-md text-white hover:bg-blue-700">

                            Pesan jasa
                        </button>
                    </form>
                    {{-- <a href="{{ route('sesionJasa', ['id_jasa' => $item->id_jasa]) }}"
                        class="inline-flex items-center justify-center px-3 py-4 text-sm font-medium text-center w-full bg-primary rounded-md text-white hover:bg-blue-700">
                        Pesan jasa
                    </a> --}}
                </div>
            </div>
        @empty
            <p class="text-gray-500">Tidak ada data Jasa.</p>
        @endforelse
    </div>
</div>
