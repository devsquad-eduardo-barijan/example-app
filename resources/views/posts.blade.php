<x-layout>
    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif
    </main>

    <x-confirmation-modal name="user-delete-modal">
        <x-slot name="title">
            Are you sure?
        </x-slot>

        <x-slot name="body">
            Continuing will delete your account permanently.
        </x-slot>

        <x-slot name="footer">
            <a href="#"
                class="px-4 p-3 rounded-lg mr-2 bg-transparent text-indigo-500 hover:bg-gray-100 hover:text-indigo-400">Cancel</a>
            <x-button class="modal-close bg-indigo-500 text-white hover:bg-indigo-400">Continue</x-button>
        </x-slot>
    </x-confirmation-modal>

</x-layout>
