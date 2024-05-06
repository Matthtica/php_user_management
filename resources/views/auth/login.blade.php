<x-layout>
    <x-slot:heading>Login</x-slot:heading>
    <div class="h-screen">
        <x-card class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[24rem] px-4 py-2">
            <form class="flex flex-col gap-2" method="POST" action="/login">
                @csrf
                <h1 class="font-bold text-2xl my-2">Login</h1>

                <label for="email" class="block">Email</label>
                <x-input name="email" id="email" placeholder="example132@gmail.com"/>

                <label for="password" class="block">Password</label>
                <x-input name="password" id="password"/>

                <div class="flex justify-between">
                    <x-link-button variant="link" href="/register" class="text-blue-500">
                        Register
                    </x-link-button>
                    <div class="flex gap-2">
                        <x-link-button variant="outline" href="/">Back</x-button>
                        <x-button type="submit">Login</x-button>
                    </div>
                </div>
            </form>
        </x-card>
    </div>
</x-layout>
