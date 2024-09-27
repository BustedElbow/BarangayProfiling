<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body class="overflow-y-auto">

<nav class="bg-black">
    <div class=" container mx-auto">
        <div class=" grid grid-cols-12 gap-5 py-4">
            <div class=" col-start-10 col-span-3 flex justify-end gap-6">
                <a class="px-4 py-3 bg-transparent border rounded-button text-white uppercase" href="">Log in</a>
                <a class="px-4 py-3 bg-white rounded-button uppercase" href="">Register</a>
            </div>
        </div>
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

