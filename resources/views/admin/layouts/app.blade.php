<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Адмін-панель Форуму ХДП') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @php
        if (!isset($scripts)) {
            $scripts = [];
        }
    @endphp
        <!-- Scripts -->
    @vite(array_merge($scripts, ['resources/css/app.css', 'resources/js/app.js']))
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-neutral-900 flex flex-col">
    {{--            @include('layouts.navigation')--}}

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @else
        @include('layouts.header')
    @endif

    <!-- Page Content -->
    <main class="flex-1">
        {{ $content }}
    </main>

    @if(!isset($footer))
        <footer class="mt-[50px] py-10 bg-opacity-[.11] bg-white">
            <p class="text-center text-[40px]">
                Форум <span class="text-lime-300">ХДП</span>
            </p>
        </footer>
    @endif
</div>
@if(isset($body_scripts))
    {{ $body_scripts }}
@endif
</body>
</html>
