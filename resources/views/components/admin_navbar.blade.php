<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>
<body>

  <!-- Sidebar -->
  <nav class="py-9 border border-r-[#1e1e1e] border-opacity-25 bg-[#FAFAFA] flex flex-col items-center gap-12 fixed top-0 left-0 z-50 w-48 h-full"> 
    <div>
      <img class="w-[105px] h-[106px]" src="{{ asset('images/barangayEmblem.png') }}" alt="Barangay Emblem">
    </div>
    <div class="">
      <ul>
        <li><a href="">Dashboard</a></li>
        <li><a href="">Residents</a></li>
        <li><a href="">Households</a></li>
        <li><a href="">Events</a></li>
      </ul>
    </div>
  </nav>

  <!-- Topbar -->
  <div class="flex w-full justify-end border border-b-[#1e1e1e] border-opacity-25 pr-28 py-2 fixed top-0">
    <div class="flex items-center gap-3">
      <img class="w-[40px] h-[40px] rounded-[100px] bg-slate-400" src="" alt="">
      <div class="flex flex-col gap-0">
        <span class="font-raleway font-bold text-sm">Tan, Miguel Andrei</span>
        <span class="font-inter font-normal text-sm text-[#1e1e1e] text-opacity-60">Barangay Captain</span>
      </div>
    </div>
  </div>

{{ $slot }}

</body>
</html>