<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>
<body class="flex h-screen">

  <!-- Sidebar -->
  <nav class="py-9 border border-r-[#1e1e1e] border-opacity-25 bg-[#FAFAFA] flex flex-col items-center gap-12 w-48 h-full"> 
    <div>
      <img class="w-[105px] h-[106px]" src="{{ asset('images/barangayEmblem.png') }}" alt="Barangay Emblem">
    </div>
    <div class="w-full">
      <ul class="flex flex-col gap-3">
        <li><a class="flex pl-5 gap-3 font-inter font-bold text-base {{ Request::is('*dashboard*') ? 'text-barangay-main border-barangay-main border-r-4' : 'text-[#1e1e1e]'}}" href="{{ route('dashboard') }}"><img class="w-[24px] h-[24px]" src="" alt="">Dashboard</a></li>
        <li><a class="flex pl-5 gap-3 font-inter font-bold text-base {{ Request::is('*residents*') ? 'text-barangay-main' : 'text-[#1e1e1e]'}}" href="{{ route('residents')}}"><img class="w-[24px] h-[24px]" src="" alt="">Residents</a></li>
        <li><a href="">Households</a></li>
        <li><a href="">Events</a></li>
      </ul>
    </div>
  </nav>


  <div class="flex flex-col w-full h-full">
    <!-- Info Bar -->
    <div class="flex w-full justify-end border border-b-[#1e1e1e] border-opacity-25 pr-28 py-2 ">
      <div class="flex items-center gap-3">
        <img class="w-[40px] h-[40px] rounded-[100px] bg-slate-400" src="" alt="">
        <div class="flex flex-col gap-0">
          <span class="font-raleway font-bold text-sm">Tan, Miguel Andrei</span>
          <span class="font-inter font-normal text-sm text-[#1e1e1e] text-opacity-60">Barangay Captain</span>
        </div>
      </div>
    </div>
    
    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
      <div class="bg-[#f5f5f5] p-3">
        <h2 class="text-base font-inter uppercase text-barangay-main font-semibold">
          @if (Request::is('*residents*'))
            Residents
          @elseif (Request::is('*dashboard*'))
            Dashboard
          @endif
        </h2>
        <h1 class="text-3xl font-raleway text-[#1e1e1e] font-bold">
          @if (Request::is('dashboard'))
            Welcome back, User
          @elseif (Request::is('residents'))
            Barangay Residents
          @elseif (Request::is('residents/register'))
            Register New Resident
          @endif
        </h1>
      </div>
  
      {{ $slot }}
      
    </div>

  </div>


</body>
</html>