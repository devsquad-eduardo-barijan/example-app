<form id="delete-user-form" method="POST" action="/" x-data
    @submit.prevent="
    location.hash = '#user-delete-modal';
">
    @csrf
    <p>
        <x-button class="bg-blue-500 text-white">Yes, Delete</x-button>
    </p>
</form>
