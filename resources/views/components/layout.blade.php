<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        @vite('resources/css/app.css')
    </head>

    <body class="overflow-y-auto">

    <nav class="bg-[#fefefe] border-b-[1px] flex justify-center py-2">
      <div class="flex justify-between w-4/5">
        <img class="h-[55px] w-[55.6px]" src="{{ asset( 'images/barangayEmblem.png')}}" alt="">
        <a class="bg-[#4169e1] text-[#fefefe] self-center py-2 px-4 font-inter font-normal text-base" href="{{ route('login')}}">Sign In</a>
      </div>
    </nav>

    <!-- Guide for figma 12 grid system -->
    <div class=" container mx-auto">
        <div class=" grid grid-cols-12 gap-5">
            <!--  Content here -->
            <div class=" col-span-1 bg-red-400 h-7"></div>
            <div class=" col-span-1 bg-red-400 h-7"></div>
            <div class=" col-span-1 bg-red-400 h-7"></div>
            <div class=" col-span-1 bg-red-400 h-7"></div>
            <div class=" col-span-1 bg-red-400 h-7"></div>
            <div class=" col-span-1 bg-red-400 h-7"></div>
            <div class=" col-span-1 bg-red-400 h-7"></div>
            <div class=" col-span-1 bg-red-400 h-7"></div>
            <div class=" col-span-1 bg-red-400 h-7"></div>
            <div class=" col-span-1 bg-red-400 h-7"></div>
            <div class=" col-span-1 bg-red-400 h-7"></div>
            <div class=" col-span-1 bg-red-400 h-7"></div>
        </div>
    </div>

    {{ $slot }}

    </body>
    </html>

