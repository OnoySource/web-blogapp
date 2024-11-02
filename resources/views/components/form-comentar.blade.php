<div class="w-full ">
    <div class="w-full h-auto  py-2 relative flex justify-end gap-2 items-center opacity-50">
      <span class="absolute left-0 font-semibold justify-center items-center">tulis komentar / opsional</span>
        <a href="">
          <img src="{{asset('images/instagram.png')}}" alt="no image" class="w-8 h-auto rounded-md">
        </a>
        <a href="">
          <img src="{{asset('images/github.png')}}" alt="no image" class="w-8 h-auto rounded-md">
        </a>        
      </div>
    <form action="" method="">
      @csrf
     <textarea name="" class="w-full h-32 p-2 border-[0.5px] border-slate-200 rounded-lg shadow-md outline outline-none"></textarea>
     <button type="submit" class="px-4 py-2 text-base border-[2px] hover:border-cyan-200 rounded-md shadow-md font-semibold">kirim</button>
    </form>
  </div>