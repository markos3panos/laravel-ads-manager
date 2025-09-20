<x-filament-panels::page>
    <form wire:submit.prevent="updateSettings">
        {{ $this->form }}

        <x-filament::actions
            :actions="$this->getUpdateFormActions()"
            class="mt-2"
        />
    </form>
</x-filament-panels::page>
