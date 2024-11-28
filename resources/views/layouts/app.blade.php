<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-50 text-gray-800">

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>
