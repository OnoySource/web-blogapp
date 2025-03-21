<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>@yield('title')</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5b1ce4bbe7.js" crossorigin="anonymous"></script>
  {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> --}}

  <style>
    *{
      boder:1px solid red;
    }
  </style>
</head>
<body class="bg-background font-secondary text-slate-800 text-base sm:text-base lg:text-lg">

  @include('layouts.navbar')

  <div id="container" class="p-4 lg:px-0 xl:px-4 sm:p-6 md:px-8 bg-container lg:max-w-7xl xl:max-w-7xl mx-auto ">
    <div class="w-full h-auto rounded-xl flex flex-col  sm:p-4 lgp-8 gap-6">

      <!-- Bagian Header -->
      <div class="w-full lg:w-full font-primary">
        <h1 class="font-bold text-lg sm:text-xl text-slate-700 lg:text-2xl xl:text-2xl">
          Mau baca artikel apa {{ $greeting }}?
        </h1>
        <p class="text-slate-800">Waktu saat ini → {{ $currentTime->format('H : i') }} Wib</p>  
        <p class="text-slate-800">Total Site Visits: {{ $visitorCount }}</p>
        <p class="font-semibold text-slate-300 text-sm sm:text-sm lg:text-md">
          Cari tahu apa yang ingin kamu ketahui
        </p>
        <hr class="mt-4 mb-2">
      </div>

      <!-- Bagian Kategori -->
      <div class="font-jaini flex flex-wrap items-center gap-3 sm:gap-4">
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
      <form action="" class="relative font-jaini flex items-center bg-white p-2 sm:p-3 rounded-md border border-slate-100 w-full gap-2">
        @csrf
        <div class="relative w-full">
            <input type="search" id="default-search" 
                class="blck w-full p-2  text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 outline-none" 
                placeholder="Cari tulisan terbaru..." required />
            <button type="submit" 
                class="text-white font-primary font-bold absolute end-2.5 top-1/2 -translate-y-1/2 px-4 py-2 bg-blue-700 hover:bg-blue-800 rounded-lg text-base">
              &emsp13; Pencarian
            </button>
        </div>
      </form>
      <h2 class="text-lg lg:text-xl font-bold">Postingan terbaru</h2>
      


      <!-- LIST ARTIKEL -->

    </div>
    @include('layouts.list-articles')
  </div> {{-- container --}}

  @include('layouts.footer')

</body>
</html>
