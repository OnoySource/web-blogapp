<div class="text-justify hyphens-auto text-slate-700 w-full   lg:max-w-7xl bg-gray-50">
  <div class="container mx-auto  sm:px-6 md:px-8 lg:px-0  bg-re-300 ">
    <div class="grid grid-cols-1 mt-8 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4 md:gap-6">

      @foreach ($articles as $item)
        <a href="{{ route('article.articles', $item->slug) }}" class="w-full">
          <div class="w-full h-full shadow-xl rounded-lg flex flex-col bg-white p-4 min-h-[200px]">
    
            <!-- Gambar -->
            <img class="w-full h-48 sm:h-52 md:h-56 lg:h-64 object-cover rounded-lg hover:brightness-50 transition-all duration-300"
              src="{{ Storage::url($item->image_path) }}" 
              alt="{{ $item->title }}">
    
            <!-- Konten Artikel -->
            <div class="flex flex-col flex-grow justify-between mt-3">
              <h1 class="font-bold text-base sm:text-lg md:text-xl hover:text-indigo-500 transition-colors duration-300 ease-in-out line-clamp-2">
                {{ $item->title }}
              </h1>
              <p class="text-xs sm:text-sm md:text-base text-gray-600 mt-1">
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
