@props(['post'])

<x-layout>
    <x-slot:heading>{{ $post->title }}</x-slot:heading>
    <div class="flex flex-col items-center">
        <x-card class="p-2 px-3 mt-5 min-w-[20rem] max-w-[30rem] flex flex-col gap-2 relative mx-12">
            <h1 class="text-xl font-bold flex justify-between">
                <span>{{ $post->title }}</span>
                <span class="text-blue-500">{{ $post->user->name }}</span>
            </h1>
            <div class="w-5/6 border border-b-primary border-dotted mx-auto"></div>
            <p>{{ $post->content }}</p>
            @can('edit', $post)
            <x-link-button href="/posts/{{ $post->id }}/edit" variant="ghost" size="icon" class="absolute left-full top-full shadow p-2" style="border-radius: 300px">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                    <path fill='var(--primary)' d="M3 21v-4.25L17.625 2.175L21.8 6.45L7.25 21zM17.6 7.8L19 6.4L17.6 5l-1.4 1.4z"/>
                </svg>
            </x-link-button>
            <x-button form="delete-form" variant="ghost" size="icon" class="absolute right-full top-full shadow p-2" style="border-radius: 300px">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                    <path fill='var(--destructive)' d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z"/>
                </svg>
            </x-button>
            @endcan
        </x-card>
        <form id="delete-form" method="POST" action="/posts/{{ $post->id }}" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-layout>
