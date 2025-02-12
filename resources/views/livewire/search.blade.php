<div>
    <form>
        <div class="mt-2">
            <input
                    type="text"
                    class="p-4 w-9/12 border rounded-md text-white bg-gray-700  "
                    placeholder="Enter something to search"
                    wire:model.live.debounce.1000ms ="searchText"
            >
            <button class="text-white font-medium rounded-md p-4 disabled:opacity-30 bg-indigo-600"
                    wire:click.prevent="clear()"
                    {{ empty($searchText) ? 'disabled' : '' }}
            >
                Clear
            </button>
        </div>
    </form>
    <div class="mt-4">
        @foreach($results as $result)
            <div class="pt-2">
                <a href="/articles/{{ $result->id }}"> {{ $result->title }}</a>
            </div>
        @endforeach

</div>
