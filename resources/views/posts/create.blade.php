<x-layout>
    <x-slot:heading>
        Create New Post
    </x-slot:heading>
    <x-card class="w-[32rem] mx-auto p-3 px-4 mt-10">
        <form method="POST" class="flex flex-col gap-2" action="/posts">
            @csrf
            @method('POST')
            <h1 class="font-bold text-2xl">Create New Post</h1>
            <label for="title" class="font-bold">Title</label>
            <x-input name="title" type="text" placeholder="Title" />

            <label for="content" class="font-bold">Content</label>
            <textarea name="content" class="border p-2 border-input rounded-md" type="text" placeholder="example..."></textarea>
            <div class="flex justify-end gap-3">
                <x-link-button href="/posts" variant="outline">Cancel</x-button>
                <x-button type="submit">Create</x-button>
            </div>
        </form>
    </x-card>
</x-layout>
