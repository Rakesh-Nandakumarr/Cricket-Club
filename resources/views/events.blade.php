<x-app-layout>  
    <div class="max-w-5xl mx-auto mt-8">
        @if($nextEvent)
        <h2 class="text-3xl font-bold">Next Event</h2>
    </div>
<a href="{{ '/events/'.$nextEvent->slug }}">
    <div class="max-w-5xl mx-auto p-6 bg-white shadow-md rounded-lg mt-10 transition duration-500 ease-in-out transform hover:scale-105">
        <div class="mb-4">
            <h1 class="text-4xl font-bold text-gray-900 mb-5">{{ $nextEvent->title }}</h1>
            <p class="text-gray-600 mt-2 flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" /></svg> {{ $nextEvent->location }}</p>
            <p class="text-gray-600 mt-1">Starts: {{ $nextEvent->start_date->format('F j, Y g:i A') }}</p>
        </div>
            <div class="mb-6 mt-5">
                <h2 class="text-2xl font-semibold text-gray-800">Description</h2>
                    <p class="mt-2 text-gray-700 leading-relaxed">{{ $nextEvent->description }}</p>
                    <br>
                </div>
            @endif
    </div>    
</a>
    <div class="max-w-5xl mx-auto mt-10">
        <div x-data="{ currentTab: 'upcoming' }" class="mb-8">
            <div class="flex justify-center mb-4">
                <button :class="{ 'bg-gradient-to-r from-cyan-600 to-blue-600 hover:scale-105 transition ease-in-out duration-300 text-white': currentTab === 'upcoming' }" @click="currentTab = 'upcoming'" class="px-4 py-2 mr-2 bg-gray-200 rounded hover:scale-105 transition ease-in-out duration-300 ">Upcoming</button>
                <button :class="{ 'bg-gradient-to-r from-cyan-600 to-blue-600 hover:scale-105 transition ease-in-out duration-300 text-white': currentTab === 'ongoing' }" @click="currentTab = 'ongoing'" class="px-4 py-2 mr-2 bg-gray-200 rounded hover:scale-105 transition ease-in-out duration-300 ">Ongoing</button>
                <button :class="{ 'bg-gradient-to-r from-cyan-600 to-blue-600 hover:scale-105 transition ease-in-out duration-300 text-white': currentTab === 'previous' }" @click="currentTab = 'previous'" class="px-4 py-2 bg-gray-200 rounded hover:scale-105 transition ease-in-out duration-300 ">Previous</button>
            </div>

            <div x-show="currentTab === 'upcoming'">
                <h2 class="text-2xl font-bold mb-4">Upcoming Events</h2>
                @forelse($upcomingEvents as $event)
                <a href="{{ '/events/'.$event->slug }}">
                    <div class="bg-white shadow-md rounded-lg p-4 mb-4 transition duration-500 ease-in-out transform hover:scale-105">
                        <h3 class="text-xl font-bold">{{ $event->title }}</h3>
                        <p class="text-gray-600">{{ \Illuminate\Support\Str::limit($event->description, 150, '...') }}</p>
                        
                        <p class="text-gray-500">Starts: {{ $event->start_date->format('F j, Y g:i A') }}</p>
                    </div>
                </a>
                @empty
                    <p class="text-gray-600">No upcoming events.</p>
                @endforelse
            </div>

            <div x-show="currentTab === 'ongoing'">
                <h2 class="text-2xl font-bold mb-4">Ongoing Events</h2>
                @forelse($ongoingEvents as $event)
                    <a href="{{ '/events/'.$event->slug }}">
                    <div class="bg-white shadow-md rounded-lg p-4 mb-4 transition duration-500 ease-in-out transform hover:scale-105">
                        <h3 class="text-xl font-bold">{{ $event->title }}</h3>
                        <p class="text-gray-600">{{ \Illuminate\Support\Str::limit($event->description, 150, '...') }}</p>
                        
                        <p class="text-gray-500">Ends: {{ $event->end_date->format('F j, Y g:i A') }}</p>
                    </div>
                    </a>
                @empty
                    <p class="text-gray-600">No ongoing events.</p>
                @endforelse
            </div>

            <div x-show="currentTab === 'previous'">
                <h2 class="text-2xl font-bold mb-4">Previous Events</h2>
                @forelse($previousEvents as $event)
                    <a href="{{ '/events/'.$event->slug }}">
                    <div class="bg-white shadow-md rounded-lg p-4 mb-4 transition duration-500 ease-in-out transform hover:scale-105">
                        <h3 class="text-xl font-bold">{{ $event->title }}</h3>
                        <p class="text-gray-600">{{ \Illuminate\Support\Str::limit($event->description, 150, '...') }}</p>
                        
                        <p class="text-gray-500">Ended: {{ $event->end_date->format('F j, Y g:i A') }}</p>
                    </div>
                    </a>
                @empty
                    <p class="text-gray-600">No previous events.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>