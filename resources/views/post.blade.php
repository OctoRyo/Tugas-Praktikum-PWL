<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">
            {{ $post->title }}
        </h2>

        <div class="text-base text-gray-500 flex flex-wrap gap-x-2 items-center mb-4">
            <a href="#" class="hover:underline">{{ $post->author }}</a>
            <span>|</span>
            <span>{{ $post->published_at ? $post->published_at->format('d F Y') : '-' }}</span>
            <span>|</span>
            <a href="/blog?category={{ $post->category }}"
               class="inline-block px-2 py-0.5 bg-blue-100 text-blue-700 text-xs rounded-full hover:bg-blue-200">
            </a>
        </div>

        <p class="my-4 font-light text-justify leading-relaxed">
        </p>

        <a href="/blog" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
    </article>
</x-layout>
