<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('include-require.header')
    <body class="antialiased">
        {{ $slot }}
        @livewireScripts
    </body>
</html>
