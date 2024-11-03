<!doctype html>
<html lang="en">
<head>
 {{--<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
  <meta charset="utf-8"> --}}
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <style>
    *{
      borer:2px solid red;
    }
  </style>
</head>
<body class="text-slate-700 bg-white text-sm text-base lg:text-lg  ">
  @include('layouts.navbar')
<div id="container" class="p-8 lg:px-28">
  <section class="w-full h-auto   mb-8">

    <div class="w-full h-auto bg-inigo-400   text-slate-500  lg:w-full lg:h-full lg:px-20">
      <h3 class="font-semibold lg:text-lg ">Selamat datang di <span class="text-xl lg:text-xl font-bold">MindCode's</span></h3>
      <blockquote class="mt-2 text-[12px] lg:text-lg font-semibold italic tet-center">
          "Satu-satunya kebijaksanaan sejati adalah mengetahui bahwa anda tidak tahu apa-apa."
          <p class="font-bold text-right mt-2 mr-10"> - Socrates</p>
      </blockquote>
  </div>
</section>
<br>
<br>
  @include('layouts.list-articles')
</div>
  @include('layouts.footer')
</body>
</html>