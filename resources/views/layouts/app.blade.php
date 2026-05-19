<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MYKIDS.BH</title>
    <meta name="description" content="Find the best sports academies and activities for your kids in Bahrain. Football, Swimming, Fitness, Basketball, Volleyball and Art.">
    <meta name="keywords" content="kids activities bahrain, sports academy bahrain, kids football bahrain, swimming academy bahrain">
    <meta name="author" content="MYKIDS.BH">

    {{-- Open Graph (واتساب، فيسبوك، تويتر) --}}
    <meta property="og:title" content="MYKIDS.BH - Discover Activities for Your Kids">
    <meta property="og:description" content="Find the best sports academies and activities for your kids in Bahrain.">
    <meta property="og:image" content="{{ asset('home-assets/images/kings.svg') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_BH">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="MYKIDS.BH - Discover Activities for Your Kids">
    <meta name="twitter:description" content="Find the best sports academies and activities for your kids in Bahrain.">
    <meta name="twitter:image" content="{{ asset('home-assets/images/kings.svg') }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('home-assets/images/kings.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('home-assets/images/kings.svg') }}">

    @livewireStyles
    @stack('head')
    <link rel="stylesheet" href="{{ asset('home-assets/style.css') }}"/>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
<div class="kb-app">

    <div class="kb-header">
        <div class="kb-logo">MYKIDS.BH</div>
    </div>

    <div class="kb-body">
        {{ $slot }}
    </div>
</div>
@livewireScripts
</body>
</html>
