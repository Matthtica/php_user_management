<x-layout>
    <x-slot:heading>Register</x-slot:heading>
    <div class="h-screen">
        <x-card class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[24rem] px-4 py-2">
            <form class="flex flex-col gap-2" method="POST" action="/register">
                @csrf
                @method('POST')
                <h1 class="font-bold text-2xl my-2">Register</h1>

                <label for="name" class="block">Name</label>
                <x-input name="name" id="name" placeholder="John"/>

                <label for="email" class="block">Email</label>
                <x-input name="email" id="email" placeholder="example132@gmail.com"/>

                <label for="password" class="block">Password</label>
                <x-input name="password" id="password" type="password"/>

                <label for="password_confirmation" class="block">Confirm Password</label>
                <x-input name="password_confirmation" id="password_confirmation" type="password"/>

                <div class="flex justify-end gap-2">
                    <x-link-button variant="outline" href="/">Cancel</x-button>
                    <x-button type="submit">Register</x-button>
                </div>
            </form>
        </x-card>
    </div>
</x-layout>
