<!doctype html>
<html lang="en">
<head>
 {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <title>@yield('title', 'Default Title')</title>

  @vite(['resources/css/app.css','resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5b1ce4bbe7.js" crossorigin="anonymous"></script>

  <style>
    *{
      boder: 1px solid red;
    }
  </style>
</head>

<body class="bg-background font-secondary text-base text-slate-800 lg:text-lg ">
  @include('layouts.navbar')
  <div id="container" class="p-2  lg:px-40 mx-auto lg:max-w-screen-xl h-auto bg-re-300">

<section class="w-full h-auto bg-gray-50 rounded-xl overflow-x-auto  border-[1px] p-4  sm:p-12 md:p-16 lg:p-16 mx-auto  "> 
  
  <div class="w-full h-auto flex justify-between gap-4 items-center text-xs text-slate-700  bg-gren-200">
    <div class="usr  w-full flex items-center gap-2 bg-rd-200">
      <img class="w-10 h-auto bg-slate-300   -[2px] border-[2px] border-gray-500 brightness-90  rounded-full " src="{{asset('images/author.jpeg')}}" alt="not image"> 
      <span class="">Triyono -&MediumSpace;{{ $article->created_at->format('d M Y') }}</>
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
     <h1 class="leading-text tracking-tight text-pretty  text-xl w-full sm:text-[18px] md:w-full  md:text-xl text-left lg:text-5xl font-primary  font-bold text-slate-800 ">{{$article->title}}</h1>
      <hr class="border border-slate-300 mt-6 abolute w-full">
    <div class="tag w-full text-left m-4 text-md  flex justify-start gap-4 text-slate-600">
      <div class="bg-gray-200 px-4 rounded-full">#tag</div>
        <div class="bg-gray-200 px-4 rounded-full">#teknologi</div>
        <div class="bg-gray-200 px-4 rounded-full">dilihat : {{$article->views}}</div>
      
    </div>
    
      <div class=" w-full h-auto sm:h-auto lg:w-full ">
          <img class="w-full aspect-video md:w-full lg:max-w-full lg:h-auto lazyloaded md:aspect-video lg:aspect-video  object-cover object-center rounded-md shadow-md " src="{{ Storage::url($article->image_path) }}" alt="">
      </div>
      <br> <br> 
     
      <p class="text-sm font-secondary font-semibold sm:text-sm md:text-base lg:text-lg o"style="">{!! $article->content !!} </p> 

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