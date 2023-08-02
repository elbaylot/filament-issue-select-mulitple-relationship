<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @filamentStyles
        @vite([
            'resources/css/app.css',
            'resources/js/app.js',
        ])
    </head>
    <body class="antialiased p-10">

        <div class="p-10 border border-gray-300 rounded-lg shadow-sm">
            <livewire:select-bug />
        </div>

        @filamentScripts

    </body>
</html>
