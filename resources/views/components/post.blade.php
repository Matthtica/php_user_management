@props(['post'])

<div class="p-2">
    <div class="flex items-center gap-2 font-bold">
        <div class="rounded-full border border-input">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="var(--primary)" d="M12 19.2c-2.5 0-4.71-1.28-6-3.2c.03-2 4-3.1 6-3.1s5.97 1.1 6 3.1a7.23 7.23 0 0 1-6 3.2M12 5a3 3 0 0 1 3 3a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3m0-3A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10c0-5.53-4.5-10-10-10"/></svg>
        </div>
        <h1>
            {{ $post->user->name }}
        </h1>
    </div>
    <x-card class="px-3 py-2 ml-10 mt-2 cursor-pointer" onclick="window.location.href='/posts/{{ $post['id'] }}'">
        <h1 class="font-bold text-xl">{{ $post->title}}</h1>
        <p>{{ $post->content }}</p>
    </x-card>
</div>
