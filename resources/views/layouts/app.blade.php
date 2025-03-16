<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>@yield('title')</title>
  @vite(['resources/css/app.css','resources/js/app.js'])

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5b1ce4bbe7.js" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    *{
      borer: 1px solid red;
    }
  </style>
</head>
<body class="bg-gray-50 text-slate-700 text-sm sm:text-base lg:text-lg">

  @include('layouts.navbar')

  <div id="container" class="p-4 lg:px-0 xl:px-4 sm:p-6 md:px-8  bg-gray-50 lg:max-w-7xl xl:max-w-7xl mx-auto ">
    <div class="w-full h-auto bg-gray-50 rounded-xl flex flex-col  sm:p-4 lgp-8 gap-6">

      <!-- Bagian Header -->
      <div class="w-full lg:w-full ">
        <h1 class="font-bold text-lg sm:text-xl text-slate-700 lg:text-2xl xl:text-2xl">
          Mau baca artikel apa {{ $greeting }}?
        </h1>
        <p class="text-slate-700">Waktu saat ini → {{ $currentTime->format('H : i') }} WIB</p>  
        <p class="text-slate-700">Total Site Visits: {{ $visitorCount }}</p>
        <p class="font-semibold text-gray-600 text-xs sm:text-sm lg:text-md">
          Cari tahu apa yang ingin kamu ketahui
        </p>
        <hr class="mt-4 mb-2">
      </div>

      <!-- Bagian Kategori -->
      <div class="flex flex-wrap items-center gap-3 sm:gap-4">
        <img class="w-8 h-auto object-cover lg:w-10" src="{{ asset('images/categories.png') }}" alt="not image">
        
        <div class="flex flex-wrap gap-2 sm:gap-4">
          <a href="#" class="text-xs font-bold px-4 py-1 sm:px-4 sm:py-2 bg-gray-200 text-sky-600 hover:bg-indigo-700 hover:text-white rounded-full">
            Teknologi
          </a>
          <a href="#" class="text-xs font-bold px-4 py-1 sm:px-4 sm:py-2 bg-gray-200 text-sky-600 hover:bg-indigo-700 hover:text-white rounded-full">
            Self Development
          </a>
        </div>
      </div>

      <!-- Form Pencarian -->

<form action="" class="relative flex justify-between items-center bg-white p-2 sm:p-3 rounded-md border border-slate-100 w-full ">
  @csrf
  <h2 class="w- lg:text-xl font-bold">Postingan terbaru</h2>
  <div class="relative w-full">
      
      <input type="search" id="default-search" class="block w-full p-2 ps-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 outline-none" placeholder="Cari tulisan terbaru..." required />
      <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800  font-medium rounded-lg text-sm ">
        Pencarian
      </button>
  </div>
</form>


      <!-- LIST ARTIKEL -->

    </div>
    @include('layouts.list-articles')


  @include('layouts.footer')

</body>
</html>
