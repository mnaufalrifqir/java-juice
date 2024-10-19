<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <link href="{{asset('css/output.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <!-- CSS for carousel/flickity-->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="stylesheet" href="https://unpkg.com/flickity-fade@2/flickity-fade.css">

  {{-- <link href="{{ asset('build/assets/app-BPhRPrHK.css') }}" rel="stylesheet">
  <script src="{{ asset('build/assets/app-DI6-W-r-.js') }}" defer></script> --}}

  <!-- PWA  -->
  <meta name="theme-color" content="#6777ef"/>
  <link rel="apple-touch-icon" href="{{ asset('assets/logo/logo-app.png') }}">
  <link rel="manifest" href="{{ asset('json/manifest.json') }}">
  
  <title>Java Juice Indonesia</title>

  @vite('resources/css/app.css')
  
  <!-- CSS for modal/flowbite -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" /> -->
</head>
<body class="font-poppins text-cp-black">
    @yield('content')
    @stack('before-scripts')
    @stack('after-scripts')
</body>
</html>