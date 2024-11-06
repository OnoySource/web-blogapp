<div class="overflow-x-auto bg-white shadow-md rounded-lg">
    <table class="min-w-full table-auto">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">No</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Title</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">URL</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Author</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Slug</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Views</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Created At</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $post)
                <tr class="border-b">
                    <td class="px-4 py-2 text-sm text-gray-800">{{ $loop->iteration}}</td>
                    <td class="px-4 py-2 text-sm text-gray-800">{{ $post->title }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800">
                        <a href="{{route('article.articles', $post->slug)}}" class="text-blue-500 hover:underline">{{ $post->url }} -></a>
                    </td>
                    <td class="px-4 py-2 text-sm text-gray-800">{{ $post->author }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800">{{ Str::limit($post->slug, 50) }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800">{{ $post->views ?? '0' }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800">{{ $post->created_at->format('d M Y') }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800 flex space-x-2">
                        <!-- Edit Button -->
                        <a href="" class="text-blue-500 hover:text-blue-700">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        
                        <!-- Delete Button -->
                        <form action="" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
