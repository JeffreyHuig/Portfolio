<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        </h2>
    </x-slot>
    <div class="flex-col border-2 border-gray-900/10 rounded-lg bg-white py-4 px-4 w-3/5 flex mb-8 mt-4 mx-auto shadow-md shadow-blue-800">
        <p><strong>Developers:</strong></p>
        <ul>
            @foreach ($game->developers as $developer)
                <li>{{ $developer->name }}</li>
            @endforeach
        </ul>

        <p><strong>Genres:</strong></p>
        <ul>
            @foreach ($game->genres as $genre)
                <li>{{ $genre->name }}</li>
            @endforeach
        </ul>

        <p><strong>Modes:</strong></p>
        <ul>
            @foreach ($game->modes as $mode)
                <li>{{ $mode->name }}</li>
            @endforeach
        </ul>

        <p><strong>Platforms:</strong></p>
        <ul>
            @foreach ($game->platforms as $platform)
                <li>{{ $platform->name }}</li>
            @endforeach
        </ul>
        <a href="{{ route('games.index') }}">Back to all games</a>
    </div>
</x-app-layout>