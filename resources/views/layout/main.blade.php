<!DOCTYPE html>
<html>

<head>
  <title>Ada Jasa Web</title>
  <link rel="website icon" style="border-radius: 50%" href="icon/icon.png" type="png" type="image/png" />
  <link rel="stylesheet" href="dist/output.css" />
  <link rel="stylesheet" href="{{ asset('pages/dist/output.css') }}">
  <link rel="icon" href="https://www.amikomsolo.ac.id/wp-content/uploads/2020/01/logo-amikom-surakarta-1.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
  <script src="../path/to/flowbite/dist/datepicker.js"></script>
  {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" /> --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
</head>

<body>
  <!-- Navbar -->
@include('partials.navbar')

@yield('konten')

@include('partials.footer')

</body>