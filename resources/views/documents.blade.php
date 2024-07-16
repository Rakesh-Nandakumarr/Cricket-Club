
<x-app-layout>
<div class="max-w-5xl mx-auto mt-10 pb-5">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6">Documents</h1>

        @foreach ($documentsByType as $type => $documents)
            <div class="mb-10">
                <h2 class="text-xl font-semibold mb-4">{{ $type }}</h2>
                @foreach ($documents as $document)
                    <div class="bg-white p-4 rounded-lg shadow-md mb-4 flex justify-between">
                        <div>
                        <h3 class="text-lg font-semibold">{{ $document->file_name }}</h3>
                        <p class="text-gray-600">Published at: {{ $document->updated_at }}</p>
                        </div>
                        <a href="{{ asset('storage/' . $document->file_path) }}" class="mr-5 text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" /> </svg>
                        </a>
                    </div>
                @endforeach

                <div class="mt-4">
                    {{ $documents->appends(request()->except($type))->links() }}
                </div>
            </div>
        @endforeach
    </div>
</div>
</x-app-layout>

