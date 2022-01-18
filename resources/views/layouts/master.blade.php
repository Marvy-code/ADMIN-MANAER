<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />


    @livewireStyles
    @stack('styles')
</head>

<body class="hold-transition sidebar-mini">


    <div class="wrapper">
        <x-navbarLeft />
        <x-navbarTop />

        <div class="content-wrapper">
            @yield('content')
        </div>
        
        <x-aside />
    </div>
    
    <script src="{{ mix('js/app.js') }}"></script>

    @livewireScripts

</body>

</html>
