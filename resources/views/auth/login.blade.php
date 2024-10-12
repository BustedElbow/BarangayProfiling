<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>
<body class="h-screen flex justify-center items-center">
  <main class="h-[724px] w-[1055px] rounded-[16px] bg-white shadow-md flex overflow-hidden">
    <div class=" w-[560px] h-full bg-[#4169E1] flex justify-center items-center">
      <img src="{{ asset('images/illustrations/LoginIllustration.png')}}" alt="">
    </div>
    <div class=" w-[490px] h-full bg-white justify-center items-center flex">
      <div class=" flex flex-col gap-11">
        <div class="flex flex-col items-center gap-4">
          <img class="w-[125px] h-[125px]" src="{{ asset('images/barangayEmblem.png') }}" alt="Barangay Kalinaw Emblem">
          <div>
            <h1 class=" text-center uppercase font-inter">Login</h1>
            <span class=" text-center text-[#7d7d7d] font-inter">Welcome Back! Please enter your details</span>
          </div>
        </div>
        <form action="" class=" flex flex-col gap-11">
          <div class="flex flex-col gap-4">
            <div class=" flex flex-col">
              <label for="userName" class=" font-inter">Username</label>
              <input class="border-2 border-[#1e1e1e] py-2 px-4 rounded-lg" type="text" name="userName">
            </div>
            <div class="flex flex-col">
              <label for="userPassword" class=" font-inter">Password</label>
              <input class="border-2 border-[#1e1e1e] py-2 px-4 rounded-lg" type="password" name="userPassword">
            </div>
          </div>
          <div class=" flex flex-col items-center gap-2">
            <button class=" bg-[#4169E1] text-[#fefefe] w-full py-2 px-4 rounded-lg font-inter">Log In</button>
            <span class=" text-[#7d7d7d] font-inter">Don't have an account? <a href="#" class=" font-inter text-[#4169e1]">Learn More</a></span>
          </div>
        </form>
      </div>
    </div>
  </main>  

</body>
</html>