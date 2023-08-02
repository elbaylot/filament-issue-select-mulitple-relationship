<div class="h-full">
    <form wire:submit="submit" class="h-full flex flex-col justify-between">
        {{ $this->form }}

        <button type="submit" class="px-3 py-1 mt-10 rounded-md shadow-sm bg-gray-300">
            Submit
        </button>
    </form>

    <x-filament-actions::modals />

</div>
