<!DOCTYPE html>
<html class="overflow-y-scroll">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  @vite('resources/css/app.css')
</head>

<body>
  <nav class="bg-[#fefefe] border-b-[1px] flex justify-center py-2 fixed top-0 left-0 right-0 z-50">
    <div class="flex justify-between w-4/5">
      <a href="{{ route('home') }}">
        <img class="h-[40px] w-[40.6px]" src="{{ asset( 'images/barangayEmblem.png')}}" alt="">
      </a>
      <a class="bg-[#4169e1] text-[#fefefe] self-center py-2 px-4 font-inter font-normal text-base" href="{{ route('login')}}">Sign In</a>
    </div>
  </nav>

    <!-- Guide for figma 12 grid system -->
    <!-- <div class=" container mx-auto">
        <div class=" grid grid-cols-12 gap-5">
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
    </div> -->

  {{ $slot }}

</body>
</html>

