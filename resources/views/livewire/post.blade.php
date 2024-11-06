<div class="bg-gray-200 rounded-t-none rounded-lg drop-shadow-lg">

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <form wire:submit.prevent="store()" class="bg-re-300 flex flex-col gap-4 p-6 ">
        <input type="text" wire:model="title"placeholder="masukan judul artikel" class="bg-slate-50  placeholder-slate-400 outline-none hover:outline-blue-500/50 border-[2px] border-slate-400 rounded-md p-2 px-4"> 
        @error('title ')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror
        <input type="text" wire:model="slug" placeholder="masukan slug artikel" class="outline-none hover:outline-blue-500/50 border-[2px] border-slate-400 rounded-md p-2 px-4"> 
        <textarea wire:model="content" id="" cols="30" rows="10" placeholder="tulis konten" class="outline-none hover:outline-blue-500/50 border-[2px] border-slate-400 rounded-md p-2 px-4"></textarea> 
        <input type="file" wire:model="image_path" placeholder="pilih gambar"> 
  
        <button type="submit" class="p-2 px-8 bg-cyan-600 rounded-md font-semibold text-white border-[1px] border-white outline  hover:outline-blue-500/50 ">Kirim</button>
    </form>

    <br>

    <h1>Menampilkan data dari livewire database</h1>

    @if ($articles->isNotEmpty())
        <ul>
            @foreach ( $articles as $item )
            <li>{{$item->title}}</li>
            <li>
             {{--   <img src="{{asset('storage/'. $item->image_path)}}" alt="" srcset=""> --}}
            </li>
            @endforeach
        </ul>
    @else
        <p>Belum ada data</p>
    @endif

  {{--  @if ($articles->isNotEmpty())
        <ul>
            @foreach ($articles as $item)
                <li> {{$item->title}}</li>
                <li> {{$item->content}}</li>
                <li> 
                    <img src="{{asset('storage/'. $item->image)}}" alt="" srcset="">
                </li>
            @endforeach 
        </ul>        
        @else
            <p>Belum ada data</p>
    @endif --}}
</div>
