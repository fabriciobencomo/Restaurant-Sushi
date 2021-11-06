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
    <div class="bg-image xl:h-xl l:h-l md:h-md sm:h-sm">
        <div class="overlay h-full w-full">
            <nav class="flex justify-between my-5 mx-5 md:flex-column">
                <div class="flex items-center gap-2">
                    <a href=""><div class="border border-solid p-2 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="white">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div></a>
                    <h2  class="text-white text-xs uppercase">Carabobo, Valencia, El parral</h2>
                </div>
                <div>
                    <h1 class="text-6xl text-white leading-4">Sushi</h1>
                </div>
                <div>
                    <div class="flex items-center gap-5">
                        <a href="">
                            <img src="./svgs/twitterIcon.svg" alt="">
                        </a>
                        <a href="">
                            <img src="./svgs/facebookIcon.svg" alt="">
                        </a>
                        <a href="">
                            <img src="./svgs/instagramIcon.svg" alt="">
                        </a>
                        <a href=""><div class="border border-solid p-2 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="white">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div></a>
                        <a href=""><div class="border border-solid p-2 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="white">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div></a>
                    </div>
                </div>
            </nav>
            <div class="chopsticks">
                <img src="./images/chopsticks.png" alt="chopsticks" draggable="false" style="-moz-user-select: none;">
            </div>
        </div>
    </div>
    <div class="sushi-dish flex flex-row justify-between items-center w-full">
        <div class="menu ml-10 flex items-center">
            <div class="burger-nav flex flex-column items-center justify-between rounded bg-transparent border border-solid h-5">
                <div class="bg-white h-1 w-5"></div>
                <div class="bg-white h-1 w-5"></div>
                <div class="bg-white h-1 w-5"></div>
            </div>
            <a href="#" class="text-white uppercase line p-3 text-xs tracking-widest">Menu</a>
        </div>
        <div class="">
            <img src="./images/sushi-dish.png" alt="Sushi Dish" draggable="false" style="-moz-user-select: none;">
        </div>
        <div class="mr-10">
            <a href="" class="rounded text-white bg-transparent border border-solid uppercase p-3 text-xs tracking-widest hover:bg-white hover:text-black">Let's Eat</a>
        </div>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
