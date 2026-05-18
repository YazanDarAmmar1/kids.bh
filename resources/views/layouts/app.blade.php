<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>

    @livewireStyles
    <link rel="stylesheet" href="{{ asset('home-assets/styles.css') }}"/>
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
