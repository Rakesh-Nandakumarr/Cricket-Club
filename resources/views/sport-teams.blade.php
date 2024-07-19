<x-app-layout> 
    <div class="container mx-auto px-5 py-10">
        <h1 class="text-4xl font-bold text-center mb-10 uppercase">{{$team->name }} TEAM</h1>
        <div class="max-w-6xl mx-auto mb-10">{{$team->description }}</div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ($players as $player)
                <div class="relative bg-white rounded-lg overflow-hidden shadow-md transform transition duration-200 hover:scale-105">
                    <div class="absolute top-0 left-0 bg-black text-white p-2 rounded-br-lg">
                        <span class="text-xl font-bold">{{ $player->jersey_number }}</span>
                    </div>
                    <img src="{{ $player->getPhoto() }}" alt="{{ $player->name }}" class="w-full">
                    <div class="p-4">
                        <h2 class="text-xl font-bold">{{ $player->getFullName() }}</h2>
                        <p class="text-gray-600">{{ $player->player_role }}</p>
                        <div class="mt-4">
                            <p class="text-gray-700"><strong>Batting Style:</strong> {{ $player->batting_style }}</p>
                            <p class="text-gray-700"><strong>Bowling Style:</strong> {{ $player->bowling_style }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
