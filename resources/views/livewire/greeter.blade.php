<div>
    <form wire:submit="changeGreeting()">
        <div class="mt-2">
            <select
                type="text"
                class="text-white bg-gray-700 border-red-600-300 rounded-md p-2 pr-8"
                placeholder="Enter your name"
                wire:model.fill="greeting" <!-- Consider using wire:model instead of wire:model.fill -->
            >
            @foreach($greetings as $item)
                <option value="{{ $item->text }}">
                    {{ $item->text }}
                </option>
                @endforeach
                </select>

                <input
                    type="text"
                    class="text-white bg-gray-700 border-gray-300 rounded-md p-2"
                    placeholder="Enter your name"
                    wire:model="name"
                >
        </div>
        <div class="mt-2 mb-1 text-red-500">
            @error('name')
            {{ $message }}
            @enderror
        </div>
        <div class="mt-2">
            <button
                type="submit"
                class="text-white font-medium rounded-md mt-2 px-4 py-2 bg-blue-500"
            >
                Greet
            </button>
        </div>
    </form>
    <!-- Debug: Show greetings data -->

    @if($greetingMessage !== '')
        <div class="mt-5">
            {{ $greetingMessage }} 👋👋
        </div>
    @endif


    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <pre>{{ json_encode($greetings, JSON_PRETTY_PRINT) }}</pre>
</div>
