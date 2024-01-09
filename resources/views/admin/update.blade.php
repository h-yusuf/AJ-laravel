<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description"
            content="Get started with a free dashboard template featuring hundreds of UI components and pages based on the Soft UI Design System, Flowbite, and Tailwind CSS">
        <meta name="author" content="Creative Tim">
        <meta name="generator" content="Hugo 0.93.2">
        <title>Products - Soft UI Flowbite</title>
        <link rel="canonical" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro-flowbite">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
            rel="stylesheet" />
        <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-flowbite/nucleo-icons.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
        <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-flowbite/nucleo-svg.css" />
        <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-flowbite/app.css" />
        <link rel="apple-touch-icon" sizes="180x180"
            href="https://demos.creative-tim.com/soft-ui-flowbite/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32"
            href="https://demos.creative-tim.com/soft-ui-flowbite/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16"
            href="https://demos.creative-tim.com/soft-ui-flowbite/favicon-16x16.png">
        <link rel="icon" type="image/png" href="https://demos.creative-tim.com/soft-ui-flowbite/favicon.ico">
        <link rel="manifest" href="https://demos.creative-tim.com/soft-ui-flowbite/site.webmanifest">
        <link rel="mask-icon" href="https://demos.creative-tim.com/soft-ui-flowbite/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
    
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@">
        <meta name="twitter:creator" content="@">
        <meta name="twitter:title" content="Products - Soft UI Flowbite">
        <meta name="twitter:description"
            content="Get started with a free dashboard template featuring hundreds of UI components and pages based on the Soft UI Design System, Flowbite, and Tailwind CSS">
        <meta name="twitter:image" content="https://demos.creative-tim.com/soft-ui-flowbite/">
    
        <meta property="og:url" content="https://demos.creative-tim.com/soft-ui-flowbite/products/">
        <meta property="og:title" content="Products - Soft UI Flowbite">
        <meta property="og:description"
            content="Get started with a free dashboard template featuring hundreds of UI components and pages based on the Soft UI Design System, Flowbite, and Tailwind CSS">
        <meta property="og:type" content="article">
        <meta property="og:image" content="https://demos.creative-tim.com/soft-ui-flowbite/">
        <meta property="og:image:type" content="image/png">
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-6"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
    
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
    
            gtag('config', 'UA-141734189-6');
        </script>
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-THQTXJ7');
        </script>
    </head>
    
</head>
<body class="">
    {{-- @foreach ($Update as $item) --}}
        
    <div id="" tabindex="-1" aria-hidden="true"
    class=" overflow-y-auto overflow-x-hidden flex  justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative px-4 w-full max-w-2xl h-full md:h-auto">

        

            <div class="flex justify-between items-start p-5 rounded-t border-b">
                <h3 class="text-xl font-semibold">
                    Edit product
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-2xl text-sm p-1.5 ml-auto inline-flex items-center"
                    data-modal-toggle="product-modal">
                    
                </button>
            </div>
{{-- @dd($idJasa) --}}
            <div class="p-6 space-y-6">
                {{-- @dd($jasa) --}}
                <form action="{{ route('update',$jasa->idJasa) }}"  method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id-jasa" value="{{ $jasa->idJAsa }}">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="product-name"
                                class="block mb-2 text-sm font-medium text-gray-900">Product
                                Name</label>
                            <input type="text" name="productName" value="{{ $jasa->product_name }}"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="Starkom" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                            <input type="text" name="kategory" value="{{ $jasa->categories }}"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="Electronics" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="brand"
                                class="block mb-2 text-sm font-medium text-gray-900">id_utama</label>
                            <input type="number" name="utama" value="{{ $jasa->id_LU }}"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="" required>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="price"
                                class="block mb-2 text-sm font-medium text-gray-900">id_tambahan</label>
                            <input type="number" name="tambahan" value="{{ $jasa->id_LT }}"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="" required>
                        </div>
                        <div class="col-span-full">
                            <label for="product-details"
                                class="block mb-2 text-sm font-medium text-gray-900">Lokasi</label>
                            <input type="text" name="lokasi" value="{{ $jasa->location }}"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="sleman" required>
                        </div>
                        <div class="col-span-full">
                            <label for="product-details"
                                class="block mb-2 text-sm font-medium text-gray-900">image</label>
                            <input type="text" name="productImg" value="{{ $jasa->img_jasa }}"
                                class="shadow-lg-sm border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5"
                                placeholder="asset/IT.png" required>
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
                                <p class="py-1 text-sm text-gray-600">
                                    Upload a file or drag and drop
                                </p>
                                <p class="text-xs text-gray-500">PNG,
                                    JPG, GIF up to 10MB</p>
                            </div>
                            <input type="file" class="hidden" />
                        </label>
                    </div>

                    <div class="p-6 rounded-b border-t border-gray-200">
                        <button
                            class="text-white font-medium text-sm px-5 py-2.5 text-center rounded-lg bg-gradient-to-br from-pink-500 to-voilet-500 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform"
                            type="submit">Update</button>
                    </div>
                </form>
            </div>

        
    </div>
</div>
    {{-- @endforeach --}}

</body>
</html>