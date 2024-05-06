<x-layout class="flex flex-col items-center">
    <x-slot:heading>
        Home
    </x-slot:heading>
    <div class="mt-[12rem] flex flex-col gap-5">
        <h1 class="text-5xl font-bold">
            User Management
        </h1>
        <div class="flex justify-center gap-3">
            <x-link-button href="/posts">Get started</x-link-button>
            <x-link-button href="/login" variant="outline">Log in</x-link-button>
        </div>
    </div>
</x-layout>
