@extends('layout.main')

@section('konten')
<div class="px-32">
    <div class="my-12">
        <div class="rounded-md border min-w-max px-24  py-12 grid gap-4">
            <h1 class="text-xl font-semibold text-center ">Edit Lokasi</h1>
            <div class="grid  gap-4">
                <form method="POST" action="{{ route('updateAlamat', ['id' => $pesanan->id]) }}">
                    @csrf
                    @method('PUT')
                <h2 class="text-lg">Lokasi Sekarang</h2>
                <div class="flex gap-2 items-center">
                    <svg class="w-6 h-6 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 17 21">
                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                            <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            <path
                                d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
                        </g>
                    </svg>
                    <h3 class=" text-base leading-4 text-primary">
                        {{ $data['alamat'] }}
                    </h3>                    
                </div>
            </div>
            <h2 class="text-lg">Lokasi Baru</h2>
            <input class="w-full p-4 rounded-lg  text-gray-400 bg-primary bg-opacity-5" name="alamat"
            value="{{ $pesanan->alamat }}">
            <div class="flex flex-col gap-2">
                <div class="flex justify-between items-center">
                </div>                
                <hr>               
            </div>
            <div class="flex gap-4">               
                    <button class="w-full py-4 rounded-lg bg-primary text-white font-semibold"
                        type="submit">Ubah</button>
            </div>
        </form>
    </div>
</div>

  @endsection