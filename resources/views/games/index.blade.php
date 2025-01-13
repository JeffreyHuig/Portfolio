<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Over Mij') }}
        </h2>
    </x-slot>

    @foreach ($games as $game)
        <div class="flex-col border-2 border-gray-900/10 rounded-lg bg-white py-6 px-6 w-3/5 flex mb-8 mt-4 mx-auto">
            {{$game->name}}<br>
            {{$game->release_date}}
        </div>
    @endforeach
</x-app-layout>