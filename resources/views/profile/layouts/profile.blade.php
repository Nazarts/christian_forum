@php
    $scripts = ['resources/js/profile.js'];
@endphp
<x-app-layout :scripts="$scripts">
    <x-slot name="content">
        <section class="flex flex-col md:flex-row px-5 md:px-0 container mx-auto relative">
            @include('profile.partials.sidebar')
            @yield('content')
        </section>
    </x-slot>
</x-app-layout>
