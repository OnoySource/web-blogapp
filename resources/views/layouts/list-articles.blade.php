<div class="text-left text-slate-700 sm:bg-bue-800 md:bg-geen-300 lg:bg-wite w-full">
  <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 md:gap-6 lg:gap-2 xl:gap-10">
      @foreach ($articles as $item)
      <a href="{{ route('article.articles', $item->slug) }}" class="">

      <div class="w-full shadow-xl  rounded-lg  flex md:flex-col lg:flex-col sm:flex-row shadow-lg bg-white border-[1px] border-white-300 p-4 shadow-slate-300">
          <!-- Gambar -->
          <img class="w-full sm:w-1/2 h-auto object-cover lg:rounded-lg sm:rounded-none sm:rounded-l-lg md:w-full lg:w-full hover:brightness-50" src="{{ Storage::url($item->image_path) }}" alt="{{ $item->title }}">
          
          <!-- Konten Artikel -->
          <div class="mb-2 flex flex-col justify-center w-full sm:w-1/2 md:w-full text-center sm:text-left">
              <h1 class="font-bold mt-2 text-sm lg:text-lg hover:text-indigo-500 transition-colors duration-300 ease-in-out">
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

<div class="">
  <!-- Menampilkan pagination -->
<div class="pagination py-4">
</div>
  {{ $articles->links() }}
</div>