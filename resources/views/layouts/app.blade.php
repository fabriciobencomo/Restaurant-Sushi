<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sushi') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @yield('hero')
    <div class="sushi-dish flex flex-row justify-evenly items-center w-full">
        <div class="menu flex items-center ml-3">
            <div class="burger-nav flex flex-column items-center justify-between rounded bg-transparent border border-solid">
                <div class="bg-white h-1 w-2"></div>
                <div class="bg-white h-1 w-2"></div>
                <div class="bg-white h-1 w-2"></div>
            </div>
            <a href="#" class="text-white uppercase line p-3 text-xs tracking-widest">Menu</a>
        </div>
        <div class="">
            <img src="./images/sushi-dish.png" alt="Sushi Dish" draggable="false" style="-moz-user-select: none;">
        </div>
        <div class="mr-3 rounded text-white bg-transparent border border-solid uppercase p-3 text-xs tracking-widest hover:bg-white hover:text-black">
            <a>Let's Eat</a>
        </div>
    </div>
    <main class="">
        @yield('content')
    </main>
</body>
</html>
