<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>{{ $heading }}</title>
    </head>
    <body class="container h-screen">
        <x-navbar heading="{{ $heading }}"></x-navbar>
        <div div="{{ $attributes->merge(['class' => 'container bg-red-500'])}}">
            {{ $slot }}
        </div>
    </body>
</html>
