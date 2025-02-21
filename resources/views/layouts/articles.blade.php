<!doctype html>
<html lang="en">
<head>
 {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5b1ce4bbe7.js" crossorigin="anonymous"></script>

  <style>
    
  </style>
</head>

<body class=" bg-gray-100 text-sm text-slate-800 sm:bg-gree-300 md:bg-blu-300 lg:text-lg ">
  @include('layouts.navbar')
  <div id="container" class="p-8  lg:px-40 mx-auto lg:max-w-screen-xl h-auto bg-re-300">

<section class="w-full h-auto bg-gray-50 rounded-xl shadow-lg border-[1px] border-slate-300 shadow-gray-300 p-8 sm:p-12 md:p-16 lg:p-16 mx-auto  "> 
  
  <div class="w-full h-auto flex justify-between gap-4 items-center text-md text-slate-700  bg-gren-200">
    <div class="usr  w-full flex items-center gap-4 bg-rd-200">
      <img class="w-10 h-auto bg-slate-300   p-[2px] border-[2px] border-blue-500 rounded-full " src="{{asset('images/user.png')}}" alt="not image"> 
      <span class="">Triyono &MediumSpace;| &MediumSpace;{{ $article->created_at->format('d M Y') }}</>
    </div>
   
      <div class="icon w-1/ flex iems-enter jusify-end gap-4 bg-rd-300">
        <i class="fa-brands fa-whatsapp fa-xl " style="color: green "></i> 
        <i class="fa-brands fa-instagram fa-xl" style="color: #ff0054;"></i> 
        <i class="fa-brands fa-linkedin fa-xl"></i>
      </div>
  </div>

  <div class="lg:grid grid-rows-2 grid-flow-col gap-8 ">
  

    <div class="relative text-justify row-span-2 w-full md:row-span-4 flex flex-col items-center">
    <br>
     <h1 class="leading-text tracking-tight text-pretty  text-lg w-full sm:text-[18px] md:w-full  md:text-xl text-left lg:text-5xl  font-bold text-slate-800 ">{{$article->title}}</h1>
      <hr class="border border-slate-300 mt-6 abolute w-full">
    <div class="tag w-full text-left m-4 text-md  flex justify-start gap-4 text-slate-600">
      <div class="bg-gray-200 px-4 rounded-full">#tag</div>
        <div class="bg-gray-200 px-4 rounded-full">#teknologi</div>
    </div>
    
      <div class=" w-full h-auto sm:h-auto lg:w-full ">
          <img class="w-full aspect-video md:w-full lg:max-w-full lg:h-auto lazyloaded md:aspect-video lg:aspect-video  object-cover object-center rounded-md shadow-md " src="{{ Storage::url($article->image_path) }}" alt="">
      </div>
      <br> <br> 
     
      <p class="text-sm font-semibold sm:text-sm md:text-base lg:text-lg "style="font-family:Georgia;">{!! $article->content !!} </p> 

      </p>
    <br>
    <div class="w-full h-auto  py-2 text-sm mt-8 md:text-md font-semibold rounded-md">
      <hr class="border border-slate-300 mb-6 abolute w-full">

      @include('layouts.list-articles')
    </div>
    
    
</div>
</div> 
</section>

<br><br>


</div>
@include('layouts.footer')
</body>
</html>