<x-app-layout>
    
    <div class="max-w-7xl mx-auto py-10 px-6">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden fade-in">
            <div class="relative">
                <img class="w-full h-64 object-cover" src="{{ $blog->banner_image }}" alt="{{ $blog->title }}">
                <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4 w-full">
                    <h1 class="text-3xl font-bold">{{ $blog->title }}</h1>
                    <p class="text-sm">{{ $blog->publish_at }}</p>
                </div>
            </div>
            <div class="p-6">
                <img class="w-full h-48 object-cover mb-4 rounded-lg" src="{{ $blog->teaser_image }}" alt="{{ $blog->title }}">
                <div class="prose lg:prose-xl max-w-none">
                    {!! $blog->content !!}
                </div>
                <div class="mt-6">
                    <span class="inline-block px-3 py-1 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full mr-2">Keywords:</span>
                    @foreach(explode(',', $blog->keywords) as $keyword)
                        <span class="inline-block px-3 py-1 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full mr-2">{{ $keyword }}</span>
                    @endforeach
                </div>
            </div>
            <div class="bg-gray-100 p-6 rounded-b-lg">
                <p class="text-gray-600 text-sm">Published: {{ $blog->is_published ? 'Yes' : 'No' }}</p>
            </div>
        </div>
    </div>
</x-app-layout>