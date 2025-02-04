<div>
    <div>
        Hi 👋 it's {{ $name }} there form livewire
    </div>
    <form
         wire:submit="changeName( document.querySelector('#newName').value )"
        >
    <div class="mt-2">
        <input
            id="newName"
            type="text"
            class="w-full text-white bg-gray-600 block border-gray-300 rounded-md p-2"
            placeholder="Enter your name"
        >
    </div>
    <div class="mt-2">
        <button
            type="submit"
            class="text-white font-medium rounded-md mt-4 px-4 py-2 bg-blue-500">
            Greet
        </button>
    </div>
    </form>
</div>
