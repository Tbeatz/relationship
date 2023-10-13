<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Relationship' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="w-full h-screen {{ session('dark_mode', true) ? 'dark' : 'light' }}">
        {{ $slot }}
        @livewireScripts
        <script>
            Livewire.on('themeUpdated', (isDarkMode) => {
                if (isDarkMode[0] == true) {
                    document.body.classList.add('dark');
                    document.body.classList.remove('light');
                } else if (isDarkMode[0] == false) {
                    document.body.classList.add('light');
                    document.body.classList.remove('dark');
                }
            });
        </script>
    </body>
</html>
