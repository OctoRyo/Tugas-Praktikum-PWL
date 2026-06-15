<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Filter kategori aktif --}}
    @if(isset($category) && $category)
        <div class="mb-4 p-3 bg-blue-50 border border-blue-200 rounded">
            <span class="text-sm text-blue-700">
                Menampilkan postingan dengan kategori: <strong>{{ $category }}</strong>
            </span>
            <a href="/blog" class="ml-3 text-sm text-red-500 hover:underline">Tampilkan semua</a>
        </div>
    @endif

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/blog/{{ $post->slug }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h2>
            </a>

            <div class="text-base text-gray-500 flex flex-wrap gap-x-2 items-center">
                <a href="#">{{ $post->author }}</a>
                <span>|</span>
                <span>{{ $post->published_at ? $post->published_at->format('d F Y') : '-' }}</span>
                <span>|</span>
                <a href="/blog?category={{ $post->category }}"
                   class="inline-block px-2 py-0.5 bg-blue-100 text-blue-700 text-xs rounded-full hover:bg-blue-200">
                </a>
            </div>

            <p class="my-4 font-light">{{ Str::limit($post->body, 150) }}</p>

            <a href="/blog/{{ $post->slug }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach

    @if($posts->isEmpty())
        <p class="py-8 text-gray-500">Tidak ada postingan ditemukan untuk kategori <strong>{{ $category }}</strong>.</p>
    @endif

</x-layout>
