<x-app-layout :metakeywords='$blog->keywords'>
    <img class="w-full h-80 object-cover" src="{{ $blog->getBannerImage() }}" alt="{{ $blog->title }}">
    <div class="container mx-auto mb-8 p-8 bg-white shadow-lg rounded-lg">
        <h1 class="text-4xl font-bold mb-4">{{ $blog->title }}</h1>
        <div class="mb-6">
            <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 rounded-full uppercase font-semibold tracking-wide">
                {{ $blog->publish_at->format('M d, Y') }}
            </span>
        </div>
        <div class="flex flex-col lg:flex-row lg:items-start">
            <div class="w-full lg:w-1/3 mb-6 lg:mb-0">
                <img src="{{ $blog->getBannerImage() }}" alt="{{ $blog->title }}" class="w-full h-full object-cover rounded-lg shadow-md transition duration-500 ease-in-out transform hover:scale-105">
            </div>
            <div class="w-full lg:w-2/3 lg:pl-8">
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Blog Content</h2>
                    <p class="text-gray-700">{{ $blog->content }}</p>
                </div>
                @if ($blog->tags)
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Tags</h2>
                    <div class="flex flex-wrap">
                        @foreach(explode(',', $blog->tags) as $tag)
                            <span class="m-1 inline-block bg-gray-200 text-gray-800 text-xs px-2 rounded-full uppercase font-semibold tracking-wide">
                                {{ trim($tag) }}
                            </span>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
        <a href="{{ url('/') }}" class="inline-block mt-8 text-blue-600 hover:text-blue-800 transition duration-300 ease-in-out">Back to Blog List</a>
    </div>
</x-app-layout>
