<x-layout>
<main class="container mx-auto">
  <div class="grid grid-cols-12 gap-5">
      <div class="col-start-1 col-span-12  h-[724px] flex border border-{#1E1E1E}">
        <div class="w-[55%] h-full bg-[#ffffff] flex items-start pt-8 pl-8 border border-black-500">
          <div class=" bg-eagle">
             
              <h2 class="uppercase font-bold text-[#4169E1]">information</h2>
              <h1 class="font-bold text-4xl pt-2 font-raleway">Don't Have an Account?</h1>
          </div>
        </div>
    
        

        <div class=" w-[45%] h-full bg-white justify-center items-center flex">
          <div class=" flex flex-col gap-11 w-[75%]">
            <div class="flex flex-col items-center gap-4">
              <img class="w-[125px] h-[125px]" src="{{ asset('images/barangayEmblem.png') }}" alt="Barangay Kalinaw Emblem">
              <div>
                <h1 class=" text-center font-bold font-raleway text-2xl">Barangay Kalinaw</h1>
                <span class=" text-center text-[#7d7d7d] font-inter">Welcome Back! Please enter your details</span>
              </div>
            </div>
          
            <form action="" class="flex flex-col gap-11 ">
              <div class="flex flex-col gap-4">
                <div class=" flex flex-col">
                  <label for="userName" class=" font-inter">Username</label>
                  <input class="bg-[#F5F5F5] border-[#1e1e1e] py-2  border-b" type="text" name="userName">
                </div>
                <div class="flex flex-col">
                  <label for="userPassword" class=" font-inter">Password</label>
                  <input class="bg-[#F5F5F5] border-[#1e1e1e] py-2  border-b" type="password" name="userPassword">
                </div>
                <div class="flex items-center justify-between">
                  <div>
                    <input type="checkbox" id="rememberMe" class="mr-1">
                    <label for="rememberMe" class="font-inter">Remember me</label>
                  </div>
                  <div>
                    <h1 class="underline text-[#4169E1]">Forgot password?</h3>
                  </div>
                </div>
              </div>
              <div class=" flex flex-col items-center gap-2">
                <button class=" bg-[#4169E1] text-[#fefefe] w-full py-2 font-inter">Sign In</button>
              </div>
            </form>
        </div>
      </div>
  </div>
</main>










<!-- <div class="h-screen flex justify-center items-center container mx-auto"> -->
  
  <!-- <div class="grid grid-cols-12 gap-5">
    <main class="h-[724px] shadow-md flex overflow-hidden col-start-1 col-span-12 bg-[#fefefe]">
      <div class=" w-[560px] h-full bg-[#ffffff] flex items-start p-8">
        <div class="bg-[url('/images/eagle_mugnanimao.png')]">
            <h2 class="uppercase font-bold underline text-[#4169E1]">information</h2>
            <h1 class="font-bold text-4xl pt-2">Don't Have an Account?</h1>
        </div>
      </div>
      <div class="h-full border-l-2 border-gray-300"></div>
    
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
  </div>
</div> -->
</x-layout>