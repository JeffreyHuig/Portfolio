<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Copyright') }}
        </h2>
    </x-slot>

    <div class="flex-col border-2 border-gray-900/10 rounded-lg bg-white py-6 px-6 w-3/5 flex mb-8 mt-4 mx-auto">
        <p class="font-bold text-blue-900">
            Deze website en alle gelinkte projecten zijn eigendom van Jeffrey Huig.
        </p>
    
        {{ now()->locale('nl')->isoFormat('D MMMM Y kk:mm ') }}
    </div>
</x-app-layout>