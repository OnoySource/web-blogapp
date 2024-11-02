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
<body class="text-slate-700 sm:bg-blue-400 bg-white text-sm lg:text-lg  ">
  @include('layouts.navbar')
<div id="container" class="p-8 lg:px-28">
  <section class="w-full h-40   mb-8">
    <div class="w-full h-40 bg-indigo-500 rounded-lg relative py-7">

        <div class="bg-rd-200 w-full h-full rounded-md absolute -mt-7 z-0 overflow-hidden">
            <svg class="w-full h-auto " viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#818cf8" d="M51.5,-55C62.7,-51.9,65.1,-31.9,58.8,-17.8C52.4,-3.7,37.3,4.6,28.5,13.3C19.7,22,17.2,31.2,12.3,32.5C7.3,33.8,-0.1,27.1,-11.9,25.8C-23.7,24.5,-40,28.5,-53.7,22.5C-67.3,16.4,-78.4,0.3,-77.8,-15.5C-77.1,-31.3,-64.8,-46.9,-49.9,-49.3C-35,-51.8,-17.5,-41.1,1.3,-42.6C20.1,-44.2,40.2,-58.1,51.5,-55Z" transform="translate(150 100)" />
            </svg>
        </div>

        <div class="p-2 bg-indgo-400 absolute mt-6 inset-0  text-slate-50 z-10">
            <h3 class="font-semibold ">Selamat datang di <span class="text-xl font-bold">MindCode's</span></h3>
            <blockquote class="mt-2 font-semibold italic tet-center">
                "Satu-satunya kebijaksanaan sejati adalah mengetahui bahwa anda tidak tahu apa-apa."
                <p class="font-bold text-right mt-2 mr-10"> - Socrates</p>
            </blockquote>
        </div>
    </div>
</section>
  @include('layouts.list-articles')
</div>
  @include('layouts.footer')
</body>
</html>