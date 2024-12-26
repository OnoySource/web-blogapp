<!doctype html>
<html lang="en" class="scroll-smooth">
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
  <script src="https://kit.fontawesome.com/5b1ce4bbe7.js" crossorigin="anonymous"></script>
  <style>
    *{
      borer:2px solid red;
    }
  </style>
</head>
<body class="text-slate-700 bg-white text-sm text-base lg:text-lg  ">
  @include('layouts.navbar')
<div id="container" class="p-8 lg:p-8 mx-auto lg:max-w-screen-xl">
  <section class="w-full h-auto   mb-8">
    <div class="w-full relative rounded rounded-md ">
      <!-- Gambar sebagai background -->
      <img src="images/6aafe087e9670bbbd440e9341401b6c7.jpg" alt="" class="w-full h-auto opacity-50 rounded ">
      
      <!-- Blokquote yang berada di tengah gambar -->
      <div class="absolute rounded-md inset-0 flex justify-center items-center sm:px-10  bg-indigo-400 text-center text-white bg-opacity-50 hover:opacity-25 lg:w-full lg:px-20">
        <div class="text-center ">
          <blockquote class="mt-2 sm:mt-0 text-[12px] lg:text-xl font-semibold italic text-center">
            "Satu-satunya kebijaksanaan sejati adalah mengetahui bahwa anda tidak tahu apa-apa."
            <p class="font-bold text-right mt-2 mr-10">- Socrates</p>
          </blockquote>
    
          <br>
    
          <blockquote class="mt-2 text-[12px] lg:text-xl font-semibold italic text-center">
            "Hidup ini tidak tentang mendapatkan apa yang kamu inginkan, melainkan tentang bagaimana kamu merespons apa yang terjadi."
            <p class="font-bold text-right mt-2 mr-10">- Epictetus</p>
          </blockquote>
        </div>
      </div>
    </div>
</section>
<br>
<br>
<div class="w-full h-auto">
  <h1 class="font-bold">Mau baca artikel apa malam ini?</h1>
  <p class="font-semibold text-slate-500 text-[12px] lg:text-md">Cari tau apa yang ingin kamu tahu</p>
  <hr class="mt-4 mb-2">
</div>

{{-- ------------------------------------------- --}}

<div class=" ">
  <form action=""class="bg-rd-800 relative flex justify-between items-center">
    @csrf
    <img class="w-8 h-auto object-cover lg:w-10" src="{{asset('images/categories.png')}}" alt="not image">
    <input class="w-70 border-[1px] lg:w-96  border-slate-300 p-2 lg:p-3 rounded-md outline-none" type="text"name="search"placeholder="cari artikel">
    <button class="w-10 h-auto lg:w-12 p-[4px] hover:bg-gray-200 rounded-r-md absolute right-0  " type="submit">
      <img src="{{asset('images/find.png')}}" alt="not image" class="overflow-hidden ">
    </button>
  </form>
  <h1 class="font-bold py-4 mt-2">Postingan Terbaru</h1>
</div>

{{-- ------------------------------------------- --}}
<div class="text-left text-slate-700 sm:bg-blue-800 md:bg-green-300 lg:bg-white w-full">
  <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 md:gap-6 lg:gap-10 xl:gap-10">
      @foreach ($articles as $item)
      <a href="{{ route('article.articles', $item->slug) }}" class="">

      <div class="w-full shadow-xl rounded-lg mb-4 flex md:flex-col lg:flex-col sm:flex-row shadow-lg bg-d-800 shadow-slate-300">
          <!-- Gambar -->
          <img class="w-full sm:w-1/2 h-auto object-cover rounded-t-lg sm:rounded-none sm:rounded-l-lg md:w-full lg:w-full hover:brightness-50" src="{{ Storage::url($item->image_path) }}" alt="{{ $item->title }}">
          
          <!-- Konten Artikel -->
          <div class="p-4 flex flex-col justify-center w-full sm:w-1/2 md:w-full text-center sm:text-left">
              <h1 class="font-bold mb-2 text-sm lg:text-lg hover:text-indigo-500 transition-colors duration-300 ease-in-out">
                  {{ $item->title }}
              </h1>
              <p class="text-[11px] text-right mt-2 leading-4 lg:text-md">
                {{ \Carbon\Carbon::parse($item->created_at)->format('d-M-Y') }}
              </p>
          </div>
      </div>
      </a>
      @endforeach
  </div>
</div>


{{-- ------------------------------------------- --}}


<div class="">
  <div class=" py-4">
    <ul class="w-full h-auto flex text-center text-white font-bold gap-4">
      @for ($i = 0; $i < 10; $i++)
        <li class="w-8 py-2  lg:w-12 rounded-md bg-cyan-400"><a href="">{{$i + 1}}</a></li>
      @endfor
    </ul>
  </div>
</div>
</div>
  @include('layouts.footer')
</body>
</html>