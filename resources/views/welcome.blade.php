@extends('layouts.app')

@section('hero')
<div class="bg-image xl:h-xl l:h-l md:h-md sm:none bg-cover">
    <div class="overlay h-full w-full xl:h-xl lg:h-l md:h-md sm:h-sm flex xl:flex-row flex-col xl:items-center">
        <nav class="flex justify-between my-5 mx-5 w-full pt-3">

            <div class="flex items-center gap-2">
                <a href=""><div class="border border-solid p-2 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div></a>
                <h2  class="text-white text-xs uppercase">Carabobo, Valencia, El parral</h2>
            </div>
            <div class="flex flex-col gap-5 pr-10">
                <h1 class="text-6xl text-white leading-4">Rolls</h1>
                <h1 class="text-2xl text-white leading-4">Sushi Noodles</h1>
            </div>
            <div>
                <div class="flex items-center gap-5 mr-4">
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
    </div>
</div>
@endsection
@section('content')
    <div class="welcome">
        <div class="container h-full flex flex-col py-12 mx-auto my-0">
            <div class="dishes">

            </div>
            <div class="presentation items-center justify-items-center flex justify-center ">
                <div class="h-5 border-red-600 border-t w-8 self-end mb-3 mr-2"></div>
                <div class="flex flex-col justify-center z-10 text-center mt-16">
                    <p class="font-light uppercase tracking-widest text-gray-300">We are</p>
                    <h1 class="text-white text-4xl">Rolls</h1>
                    <h1 class="text-red-600 text-xl">Art of Sushi</h1>
                </div>
                <div class="h-5 border-red-600 border-t w-8 self-end mb-3 ml-2"></div>
            </div>
        </div>
    </div>
@endsection
