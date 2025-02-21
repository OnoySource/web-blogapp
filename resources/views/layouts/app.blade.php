<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
 {{--<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
  <meta charset="utf-8"> --}}
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5b1ce4bbe7.js" crossorigin="anonymous"></script>
  <!-- Font Awesome CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <style>
    *{
      borer:2px solid red;
    }
 
  </style>
</head>
<body class="text-slate-700 bg-gray-100 text-sm text-base lg:text-lg  ">
  @include('layouts.navbar')

  
<div id="container" class="p-6 lg:px-20 mx-auto lg:max-w-screen-xl bg-ed-900">
  
<div class="w-full h-auto bg-gray-50 h-max-screen rounded-xl flex md:flex-col lg:flex-col lg:p-20 sm:flex-row shadow-lg border-[1px] border-slate-300  shadow-gray-300">
<div class="w-full h-auto">
  <h1 class="font-bold">Mau baca artikel apa {{$greeting}}? </h1>
  <p>Waktu saat ini -> {{ $currentTime->format('H : i') }} Wib</p>  
  <p>Total Site Visits: {{ $visitorCount }}</p>
  <p class="font-semibold text-slate-500 text-[12px] lg:text-md">Cari tau apa yang ingin kamu tahu</p>
  <hr class="mt-4 mb-2">
</div>

{{-- ------------------------------------------- --}}

<div class=" ">
  <form action=""class="bg-rd-800 relative flex justify-between items-center">
    @csrf
    <img class="w-8 h-auto object-cover lg:w-10" src="{{asset('images/categories.png')}}" alt="not image">

    <div class="tag w-full text-left m-4 text-md  flex justify-start gap-4 text-slate-800 font-bold">
      <div class="bg-gray-200 px-4 py-2 text-sky-600 hover:bg-indigo-700 hover:text-white rounded-full">
        <a href="#">Teknologi</a>
      </div>
        <div class="bg-gray-200 px-4 py-2 text-sky-600 hover:bg-indigo-700 hover:text-white rounded-full">
          <a href="#">Self Development</a>
        </div>
    </div>
    <input class="w-70 border-[1px] lg:w-96  border-slate-300 p-2 lg:p-3 rounded-md outline-none" type="text"name="search"placeholder="cari artikel">
    <button class="w-10 h-auto lg:w-12 p-[4px] hover:bg-gray-200 rounded-r-md absolute right-0  " type="submit">
      <img src="{{asset('images/find.png')}}" alt="not image" class="overflow-hidden ">
    </button>
  </form>
  <h1 class="font-bold py-4 mt-2">Postingan Terbaru</h1>
  
</div>

{{-- ------------------------------------------- --}}



{{-- ------------------------------------------- --}}

<br>
@include('layouts.list-articles')
</div>


</div>
  @include('layouts.footer')
</body>
</html>