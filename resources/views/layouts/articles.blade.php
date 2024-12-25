<!doctype html>
<html lang="en">
<head>
 {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5b1ce4bbe7.js" crossorigin="anonymous"></script>
</head>
<body class="text-slate-900 bg-white text-sm sm:bg-gree-300 md:bg-blu-300 lg:text-lg ">
  @include('layouts.navbar')
  <div id="container" class="p-8 lg:p-8 lg:px-20 ">
        
<section class="bg-gren-300  pt-6 sm:p-20 md:p-20 lg:p-4 mx-auto lg:max-w-screen-lg "> 
  <span class="text-[11px] text-slate-400 text-left">{{ $article->created_at->format('d M Y') }}</span>
  <div class="lg:grid grid-rows-2 grid-flow-col gap-8 ">
    <div class="relative text-justify row-span-2 w-full md:row-span-4 flex flex-col items-center">
      
     <h1 class="text-lg w-full sm:text-[18px] md:w-full  md:text-xl lg:w-full text-left lg:text-2xl  font-bold -slate-800 ">{{$article->title}}</h1>
        <br> <br>
        <x-span-sosmed></x-span-sosmed>       
     <br>
      <div class=" w-full h-auto sm:h-auto lg:w-full ">
          <img class="w-full aspect-video md:w-full lg:w-full md:aspect-video lg:aspect-video  object-cover object-center rounded-md shadow-md " src="{{asset('images/pexels-photo-356056.jpeg')}}" alt="">
      </div>
      
      <p class="text-sm font-semibold text-slate-700 sm:text-sm md:text-base lg:text-lg">{{$article->content}}</p>
    <br>
    <div class="w-full h-auto  py-2 text-sm mt-8 md:text-md font-semibold rounded-md">
      <h3 class="">#Tag</h3>
      <p class="cl">#teknologi</p>
    </div>
    
    
</div>
</div> 
</section>

<br><br>
@include('layouts.list-articles')
</div>
@include('layouts.footer')
</body>
</html>