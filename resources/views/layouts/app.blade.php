<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Java Juice Indonesia</title>
    <link href="{{ asset('build/assets/app-BPhRPrHK.css') }}" rel="stylesheet">
    <script src="{{ asset('build/assets/app-DI6-W-r-.js') }}" defer></script>
    {{-- @vite('resources/css/app.css') --}}
</head>
<body class="font-sans">
    @include('layouts.navbar')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
</body>
</html>
