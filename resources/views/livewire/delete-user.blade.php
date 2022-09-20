<form>
    @csrf
    <p>
        <x-button class="bg-blue-500 text-white" wire:click="$set('showModal', true)">Yes, Delete</x-button>
    </p>

    @if ($showModal)
        <x-confirmation-modal>
            <x-slot name="title">
                Are you sure?
            </x-slot>

            <x-slot name="body">
                Continuing will delete your account permanently.
            </x-slot>

            <x-slot name="footer">
                <x-button class="bg-transparent text-indigo-500 hover:bg-gray-100 hover:text-indigo-400"
                    wire:click="$set('showModal', false)">Cancel</x-button>
                <x-button class="modal-close bg-indigo-500 text-white hover:bg-indigo-400" wire:click="handle">Continue
                </x-button>
            </x-slot>
        </x-confirmation-modal>
    @endif
</form>
