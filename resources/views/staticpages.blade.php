<x-app-layout>
    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-2xl rounded-lg">
                <div class="p-6 sm:px-20 border-b border-gray-300">
                    @foreach ($page->content as $block)
                        @if ($block['type'] === 'heading')
                            <h{{ $block['data']['level'] }} class="font-bold text-gray-800 mt-4 mb-2 text-{{ $block['data']['level'] === 1 ? '3xl' : ($block['data']['level'] === 2 ? '2xl' : 'xl') }}">
                                {{ $block['data']['content'] }}
                            </h{{ $block['data']['level'] }}>
                        @elseif ($block['type'] === 'paragraph')
                            <p class="text-gray-600 leading-relaxed mb-4">{{ $block['data']['content'] }}</p>
                        @elseif ($block['type'] === 'image')
                            <div class="my-6 flex justify-center">
                                <img src="{{ Storage::url($block['data']['url']) }}" alt="{{ $block['data']['alt'] }}" class="max-w-full h-auto rounded-lg shadow-md object-cover">
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
