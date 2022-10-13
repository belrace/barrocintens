<x-jet-action-section>
    <x-slot name="title">
        {{ __('Delete afdeling') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Verwijder deze afdeling.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Als de afdeling is verwijdert, zal alle data permanent worden verwijdert. Voor dat je het verwijdert download de data als die nog nodig is.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                {{ __('Delete afdeling') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete Team Confirmation Modal -->
        <x-jet-confirmation-modal wire:model="confirmingTeamDeletion">
            <x-slot name="title">
                {{ __('Delete afdeling') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Als de afdeling is verwijdert, zal alle data permanent worden verwijdert. Voor dat je het verwijdert download de data als die nog nodig is.') }}
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="deleteTeam" wire:loading.attr="disabled">
                    {{ __('Delete Team') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>
    </x-slot>
</x-jet-action-section>
