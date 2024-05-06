@props(['posts'])

<x-layout>
    <x-slot:heading>
        Posts
    </x-slot:heading>
    <div class="flex w-[30rem] mx-auto py-4 relative flex-col">
        @foreach ($posts as $post)
            <x-post :post="$post"/>
        @endforeach
    </div>
    <a class="absolute right-3 bottom-3 w-12 hover:rotate-45 duration-300" href="/posts/create">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" class="w-full h-full">
            <path fill="var(--primary)" d="M17 13h-4v4h-2v-4H7v-2h4V7h2v4h4m-5-9A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2"/>
        </svg>
    </a>
</x-layout>
