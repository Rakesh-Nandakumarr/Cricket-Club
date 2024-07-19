<x-app-layout>
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg mt-10 transition duration-500 ease-in-out transform hover:scale-105">
        <div class="mb-4">
            <h1 class="text-4xl font-bold text-gray-900 mb-5">{{ $event->title }}</h1>
            <p class="text-gray-600 mt-2 flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
            </svg> {{ $event->location }}</p> <br>
            <p class="text-gray-600 mt-1">Starts: {{ $event->start_date->format('F j, Y g:i A') }}</p>
            <p class="text-gray-600 mt-1">Ends: {{ $event->end_date->format('F j, Y g:i A') }}</p>
        </div>
<div class="mb-6">
    <h2 class="text-2xl font-semibold text-gray-800">Description</h2>
            <p class="mt-2 text-gray-700 leading-relaxed">{{ $event->description }}</p>
        </div>
        <div class="mt-6">
            <a href="/events" class="inline-block text-white rounded-lg bg-gradient-to-r from-cyan-600 to-blue-600 hover:scale-105 drop-shadow-md shadow-lg text-white font-bold px-4 py-2 rounded-lg mt-3 hover:bg-indigo-500 transition ease-in-out duration-300">Back to Events</a>
        </div>
    </div>
</x-app-layout>