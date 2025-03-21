<div class="text-justify hyphens-auto text-slate-700 w-full   lg:max-w-7xl ">
  <div class="container mx-auto  sm:px-6 md:px-8 lg:px-0  bg-re-300 ">
    <div class="grid grid-cols-1 mt-8 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4 md:gap-6">

      @foreach ($articles as $item)
        <a href="{{ route('article.articles', $item->slug) }}" class="w-full">
          <div class="w-full h-full shadow-xl hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 rounded-xl flex flex-col bg-background p-4 min-h-[220px]">
    
            <!-- Gambar -->
            <img class="w-full aspect-[16/9] object-cover rounded-xl brightness-90 hover:brightness-100 transition-all duration-300"
              src="{{asset('images/img-java.png')}}" 
              alt="{{ $item->title }}">
            
            <!-- Konten Artikel -->
            <div class="flex flex-col flex-grow justify-between mt-3">
              <h1 class="font-bold text-lg md:text-xl text-gray-800 hover:text-indigo-500 transition-colors duration-300 ease-in-out line-clamp-2">
                {{ $item->title }}
              </h1>
              <p class="text-sm text-gray-600 mt-1">
                {{ \Carbon\Carbon::parse($item->created_at)->format('d-M-Y') }}
              </p>
            </div>
          
          </div>
          
        </a>
      @endforeach
    
    </div>
    
  </div>
</div>

<!-- Pagination -->
<div class="flex justify-center py-6">
  {{ $articles->links() }}
</div>
