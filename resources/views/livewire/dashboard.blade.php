<div class="overflow-x-auto bg-white shadow-md rounded-lg max-w-full">
  <div class="overflow-y-auto max-h-screen"> 
    <table class="min-w-full table-autoborder-collapse ">
        <thead class=" ">
            <tr class="">
                <th class="bg-slate-300 text-center sticky top-0 z-20 border-2 border-slate-200 px-4 py-2 text-left text-sm font-semibold text-gray-600">Total</th>
                <th class="bg-slate-300 text-center sticky top-0 z-20 border-2 border-slate-200 px-4 py-2 text-left text-sm font-semibold text-gray-600">postingan 200</th>
                <th class="bg-slate-300 text-center sticky top-0 z-20 border-2 border-slate-200 px-4 py-2 text-left text-sm font-semibold text-gray-600">-</th>
                <th class="bg-slate-300 text-center sticky top-0 z-20 border-2 border-slate-200 px-4 py-2 text-left text-sm font-semibold text-gray-600">-</th>
                <th class="bg-slate-300 text-center sticky top-0 z-20 border-2 border-slate-200 px-4 py-2 text-left text-sm font-semibold text-gray-600">-</th>
                <th class="bg-slate-300 text-center sticky top-0 z-20 border-2 border-slate-200 px-4 py-2 text-left text-sm font-semibold text-gray-600">700k</th>
                <th class="bg-slate-300 text-center sticky top-0 z-20 border-2 border-slate-200 px-4 py-2 text-left text-sm font-semibold text-gray-600">-</th>
                <th class="bg-slate-300 text-center sticky top-0 z-20 border-2 border-slate-200 px-4 py-2 text-left text-sm font-semibold text-gray-600">-</th>
            </tr>
            <tr class="">
                <th class="bg-slate-300 text-center sticky top-0 z-20 border-2 border-slate-200 px-4 py-2 text-left text-sm font-semibold text-gray-600">No</th>
                <th class="bg-slate-300 text-center sticky top-0 z-20 border-2 border-slate-200 px-4 py-2 text-left text-sm font-semibold text-gray-600">Title</th>
                <th class="bg-slate-300 text-center sticky top-0 z-20 border-2 border-slate-200 px-4 py-2 text-left text-sm font-semibold text-gray-600">URL</th>
                <th class="bg-slate-300 text-center sticky top-0 z-20 border-2 border-slate-200 px-4 py-2 text-left text-sm font-semibold text-gray-600">Author</th>
                <th class="bg-slate-300 text-center sticky top-0 z-20 border-2 border-slate-200 px-4 py-2 text-left text-sm font-semibold text-gray-600">Slug</th>
                <th class="bg-slate-300 text-center sticky top-0 z-20 border-2 border-slate-200 px-4 py-2 text-left text-sm font-semibold text-gray-600">Views</th>
                <th class="bg-slate-300 text-center sticky top-0 z-20 border-2 border-slate-200 px-4 py-2 text-left text-sm font-semibold text-gray-600">Created At</th>
                <th class="bg-slate-300 text-center sticky top-0 z-20 border-2 border-slate-200 px-4 py-2 text-left text-sm font-semibold text-gray-600">Actions</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $post)
                <tr class="text-center">
                    <td class="px-4 py-2 border-2 border-slate-200 text-sm text-gray-800 ">{{ $loop->iteration}}</td>
                    <td class="px-4 py-2 border-2 border-slate-200 text-sm text-gray-800 text-left">{{ $post->title }}</td>
                    <td class="px-4 py-2 border-2 border-slate-200 text-sm text-gray-800">
                        <a href="{{route('article.articles', $post->slug)}}" class="text-blue-500 hover:underline">{{ $post->url }} -></a>
                    </td>
                    <td class="px-4 py-2 border-2 border-slate-200 text-sm text-gray-800">{{ $post->author }}</td>
                    <td class="px-4 py-2 border-2 border-slate-200 text-sm text-gray-800 text-left">{{ Str::limit($post->slug, 50) }}</td>
                    <td class="px-4 py-2 border-2 border-slate-200 text-sm text-gray-800">{{ $post->views ?? '0' }}</td>
                    <td class="px-4 py-2 border-2 border-slate-200 text-sm text-gray-800">{{ $post->created_at->format('d M Y') }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800 flex justify-center items-center space-x-2 ">
                        <!-- Edit Button -->
                        <a href="" class="text-blue-500 hover:text-blue-700 text-center">
                            <i class="fas fa-edit"></i>
                        </a>
                        <span class="text-slate-500">|</span>
                        <!-- Delete Button -->
                        <form action="" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 text-center">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                
                </tr>
            @endforeach
        </tbody>
       
    </table>
    </div>
</div>
