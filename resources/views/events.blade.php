<x-app-layout>  
    <div class="max-w-5xl mx-auto mt-10">
        <h2 class="text-2xl font-bold">Next Event</h2>
        <br>
        <div class="bg-white shadow-md rounded-lg p-4 mb-4">
            @if($nextEvent)
                <h3 class="text-xl font-bold">{{ $nextEvent->title }}</h3>
                <br>
                <p class="text-gray-600">{{ $nextEvent->description }}</p>
                <br>
                <p class="text-gray-500">Starts: {{ $nextEvent->start_date }}</p>
            @else
                <p class="text-gray-600">No upcoming events.</p>
            @endif
        </div>
    </div>    
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
                <a href="#">
                    <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                        <h3 class="text-xl font-bold">{{ $event->title }}</h3>
                        <p class="text-gray-600">{{ \Illuminate\Support\Str::limit($event->description, 150, '...') }}</p>
                        
                        <p class="text-gray-500">Starts: {{ $event->start_date }}</p>
                    </div>
                </a>
                @empty
                    <p class="text-gray-600">No upcoming events.</p>
                @endforelse
            </div>

            <div x-show="currentTab === 'ongoing'">
                <h2 class="text-2xl font-bold mb-4">Ongoing Events</h2>
                @forelse($ongoingEvents as $event)
                    <a href="#">
                    <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                        <h3 class="text-xl font-bold">{{ $event->title }}</h3>
                        <p class="text-gray-600">{{ \Illuminate\Support\Str::limit($event->description, 150, '...') }}</p>
                        
                        <p class="text-gray-500">Ends: {{ $event->end_date }}</p>
                    </div>
                    </a>
                @empty
                    <p class="text-gray-600">No ongoing events.</p>
                @endforelse
            </div>

            <div x-show="currentTab === 'previous'">
                <h2 class="text-2xl font-bold mb-4">Previous Events</h2>
                @forelse($previousEvents as $event)
                    <a href="#">
                    <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                        <h3 class="text-xl font-bold">{{ $event->title }}</h3>
                        <p class="text-gray-600">{{ \Illuminate\Support\Str::limit($event->description, 150, '...') }}</p>
                        
                        <p class="text-gray-500">Ended: {{ $event->end_date }}</p>
                    </div>
                    </a>
                @empty
                    <p class="text-gray-600">No previous events.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>