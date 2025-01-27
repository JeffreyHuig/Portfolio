<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Over Mij') }}
        </h2>
    </x-slot>

    @foreach ($games as $game)
        <div class="flex-col border-2 border-gray-900/10 rounded-lg bg-white py-4 px-4 w-3/5 flex mb-8 mt-4 mx-auto shadow-md shadow-blue-800">
            <div class="grid grid-cols-12 grid-rows-4">
                <div class="grid grid-cols-1 col-span-4 grid-rows-1 row-span-4 self-center">
                    <img src="{{asset('images/games').'/'.$game['name'].'.png'}}" alt="{{$game['name']}}">
                </div>
                <div class="grid grid-cols-1 col-span-7 col-start-6 grid-rows-1 row-span-1 row-start-1">
                    @php
                        $pattern = "/_/";
                        preg_match_all($pattern, $game['name']);
                        $replacedGameName = preg_replace($pattern, ' ', $game['name']);
                    @endphp
                    <p class="font-bold text-xl text-right">
                        {{$replacedGameName}}<br>
                    </p>
                </div>
                <div class="grid grid-cols-1 col-span-8 col-start-10 grid-rows-1 row-span-1 row-start-2">
                    <p class="text-center">
                        {{$game['release_date']}}
                    </p>
                </div>
                <div class="grid grid-cols-1 col-span-4 col-start-10 grid-rows-1 row-span-1 row-start-4">
                    <a href="games/{{$game['id']}}">
                        <p class="font-bold text-right">Meer Info ---></p>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>