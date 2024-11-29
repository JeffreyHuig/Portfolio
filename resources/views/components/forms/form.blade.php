<form {{ $attributes(["class" => "max-w-8xl mx-auto space-y-6", "method" => "GET"]) }}>
    @if ($attributes->get('method', 'GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <div class="mb-10 grid grid-cols-1 gap-x-6 gap-y-8">
                {{ $slot }}
            </div>
        </div>
    </div>
</form>
