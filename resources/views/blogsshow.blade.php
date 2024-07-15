<x-app-layout>
    <head>
        <title>{{ $blog->title }} | Ceylon Sports Club</title>
        <meta name="description" content="{{ $blog->meta_description }}">
        <meta name="keywords" content="{{ $blog->meta_keywords }}">
    </head>
    <div class="relative">
        <img class="w-full h-80 object-cover" src="{{ $blog->getBannerImage() }}" alt="{{ $blog->title }}">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center">
                <h1 class="text-4xl lg:text-5xl font-extrabold text-white">{{ $blog->title }}</h1>
                <p class="text-md lg:text-lg text-gray-300 mt-2">{{ $blog->publish_at }}</p>
            </div>
        </div>
    </div>
    <div class="max-w-4xl mx-auto py-16 px-6">
        <article class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="w-full h-64 lg:h-80 object-cover" src="{{ $blog->getTeaserImage() }}" alt="{{ $blog->title }}">
            <div class="p-6 lg:p-8">
                <div class="prose prose-lg max-w-none">
                    {!! $blog->content !!}
                </div>
            </div>
        </article>
    </div>
</x-app-layout>
