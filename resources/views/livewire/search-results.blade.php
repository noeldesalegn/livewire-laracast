<div class="{{ $show ? 'block' : 'hidden' }}">
    <div class="mt-4 p-4 absolute border rounded-md bg-gray-700 border-indigo-600">

{{--        <div class="absolute top-0 right-0 pt-1 pr-3">--}}
{{--            <button type="button"--}}
{{--             wire:click="dispatch('search:clear-results')"--}}
{{--            >X</button>--}}

{{--        </div>--}}

        @if(count($results) == 0)
            <div class="pt-2">
                No results found
            </div>
        @endif

        @foreach($results as $result)
            <div class="pt-2"wire:key="{{ $results->id }}" >
                <a wire:navigate.hover href="/articles/{{ $result->id }}"> {{ $result->title }}</a>
            </div>
        @endforeach
    </div>
</div>
