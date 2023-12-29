<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Keranjang</title>

    <!-- Tambahkan tautan untuk Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .btn-group {

            .select {
                position: relative;

                input:checked+label {
                    background-color: #07ff51;

                    &:hover,
                    &:focus,
                    &:active {
                        background-color: #07ff51;
                    }
                }

                input {
                    opacity: 0;
                    position: absolute;
                }

                .button_select {
                    margin: 0 10px 10px 0;
                    display: flex;
                    background-color: transparent;

                    &:hover,
                    &:focus,
                    &:active {
                        background-color: transparent;
                    }
                }
            }

        }


        .option {
            position: relative;

            input {
                opacity: 0;
                position: absolute;
            }

            input:checked+span {
                background-color: #07ff51;

                &:hover,
                &:focus,
                &:active {
                    background-color: #07ff51;
                }
            }

            .btn-option {
                margin: 0 10px 10px 0;
                display: flex;
                background-color: transparent;

                &:hover,
                &:focus,
                &:active {
                    background-color: transparent;
                }
            }
        }

        h2 {
            margin-bottom: 0px;
        }
    </style>
</head>

<body class="bg-gray-100 p-8">

    <!-- resources/views/test.blade.php -->

    <form action="{{ route('process') }}" method="post">
        @csrf

        <div class="btn-group col-xs-12 ">
            <label class="option">
                <input type="radio" value="Pijet Biasa" name="optradio">
                <span
                    class="w-full border btn btn-warning btn-option rounded-lg p-4  flex justify-between  items-center ">
                    <div class="flex gap-6">
                        <img class="rounded-md w-24 h-24" src="asset/kategory.png" alt="">
                        <div class="flex flex-col items-start">
                            <h2 class="font-semibold text-xl">Pijet Biasa</h2>
                            <h2 class="font-semibold text-2xl">Pijet tanpa kretek</h2>
                            <h3 class="font-semibold text-xl">Rp 110.000</h3>
                        </div>
                    </div>

                </span>

            </label>
            <label class="option">
                <input type="radio" value="2000" name="optradio"><span class="btn btn-warning btn-option">Option
                    2</span>
            </label>
            <label class="option">
                <input type="radio" value="3000" name="optradio"><span class="btn btn-warning btn-option">Option
                    3</span>
            </label>

            <button type="submit">Submit</button>
        </div>
    </form>


    {{-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Layanan utama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Layanan tambahan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Note
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Action
                    </th>
                </tr>
            </thead>
            @forelse ($dataKeranjang as $item)

            <tbody>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $item->layanan_utama }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $item->layanan_tambahan }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->date }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->time }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->alamat }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->note }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>

            </tbody>
            @empty
            <p class="text-gray-500">Tidak ada data keranjang.</p>
        @endforelse
        </table>
    </div>  --}}

    {{-- {{-- <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <h1 class="text-2xl font-bold mb-4">Data Keranjang</h1> --}}

    {{-- Periksa apakah $dataKeranjang tidak kosong --}}
    {{-- @forelse ($dataKeranjang as $item)
            <div class="mb-4">
                <p class="text-lg font-semibold">Layanan Utama: {{ $item->layanan_utama }}</p>
                <p class="text-gray-600">Layanan Tambahan: {{ $item->layanan_tambahan }}</p>
                <!-- Tambahkan kolom-kolom lain sesuai kebutuhan -->
                <hr class="my-2">
            </div>
        @empty
            <p class="text-gray-500">Tidak ada data keranjang.</p>
        @endforelse --}}
    {{-- </div> --}}

    {{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Preview</title>
    <!-- Tambahkan tautan untuk CSS atau styling lainnya jika diperlukan -->
</head>
<body>

    <h1>Pesan Preview</h1>

    {{-- <ul>
        <li><strong>Layanan Utama:</strong> {{ $data['layanan_utama'] }}</li>
        <li><strong>Layanan Tambahan:</strong> {{ $data['layanan_tambahan'] }}</li>
        <li><strong>Date:</strong> {{ $data['date'] }}</li>
        <li><strong>Time:</strong> {{ $data['time'] }}</li>
        <li><strong>Alamat:</strong> {{ $data['alamat'] }}</li>
        <li><strong>Ciri Rumah:</strong> {{ $data['ciriRumah'] }}</li>
        <li><strong>Note:</strong> {{ $data['note'] }}</li>
    </ul>

    <!-- Tombol untuk menyimpan data ke dalam database -->
    <form action="{{ route('simpanData') }}" method="POST">
        @csrf
        @foreach ($data as $key => $value)
        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
    @endforeach
        <button type="submit">Simpan Data</button>
    </form> --}}

    {{-- </body>
</html> --}} --}}

</body>

</html>
