<div class="w-full h-auto">
  <h1 class="font-bold">Mau baca artikel apa malam ini?</h1>
  <p class="font-semibold text-slate-500 text-[12px] lg:text-md">Cari tau apa yang ingin kamu tahu</p>
  <hr class="mt-4 mb-2">
</div>


<div class=" ">
  <form action=""class="bg-rd-800 relative flex justify-between items-center">
    @csrf
    <img class="w-8 h-auto object-cover lg:w-10" src="{{asset('images/categories.png')}}" alt="not image">
    <input class="w-70 border-[1px] lg:w-96  border-slate-300 p-2 lg:p-3 rounded-md outline-none" type="text"name="search"placeholder="cari artikel">
    <button class="w-10 h-auto lg:w-12 p-[4px] bg-cyan-500 rounded-r-md absolute right-0  " type="submit">
      <img src="{{asset('images/find.png')}}" alt="not image" class="overflow-hidden ">
    </button>
  </form>
  <h1 class="font-bold py-4">Kategori saat ini : Teknologi</h1>
</div>

<div class="w-full grid grid-cols-2 gap-4 sm:grid-cols-2 lg:w-full lg:grid lg:grid-cols-4 text-justify text-slate-700 ">
  @for ($i = 0; $i < 8; $i++)
  <div class="w-full h-auto shadow-xl rounded-lg">
    <img class="w-70 h-auto lg:w-full aspect-video object-cover rounded-b-none rounded-lg" src="{{asset('images/istockphoto-1738752533-612x612.jpg')}}" alt="">
      <div class="w-full h-auto p-2 rounded-lg ">
        <h1 class="font-bold mb-2 text-sm lg:text-lg ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1> 
           <p class="text-[11px] leading-4 lg:text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem aperiam incidunt obcaecati aperiam incidunt obcaecati.</p>
      </div>
  </div>
  
  @endfor
  
</div>

<div class="">
  <div class=" py-4">
    <ul class="w-full h-auto flex text-center text-white font-bold gap-4">
      @for ($i = 0; $i < 10; $i++)
        <li class="w-8 py-2  lg:w-12 rounded-md bg-cyan-400"><a href="">{{$i + 1}}</a></li>
      @endfor
    </ul>
  </div>
</div>