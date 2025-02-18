<div>
    <form>
        <div class="mt-2">
            <input
                    type="text"
                    class="p-4 w-full border rounded-md text-white bg-gray-700  "
                    placeholder="Enter something to search"
                    wire:model.live.debounce.1000ms ="searchText"
                    placeholder="{{ $placeholder }}"
            >

        </div>
    </form>
    <livewire:search-results :results="$results" :show="!empty($searchText)" />
</div>
