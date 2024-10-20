<x-default_navbar>
<main class="container mx-auto mt-24">
  <div class="grid grid-cols-12 gap-5">
      <div class="col-start-2 col-span-10 h-[724px] flex border border-{#1E1E1E}">
        <div class="w-[60%] h-full flex items-start pt-8 pl-8 border relative">
          <div class="absolute top-0 left-0 w-[100%] h-[30%]  z-0 bg-eagle"></div>
            <div class="ml-8 relative z-10 flex flex-col gap-4">
              <h2 class="uppercase font-bold text-[#4169E1]">information</h2>
              <h1 class="font-bold text-4xl font-raleway">Don't Have an <br>Account?</h1>
            </div>
        </div>
    
        

        <div class=" w-[40%] h-full bg-white justify-center items-center flex">
          <div class=" flex flex-col gap-11 w-[75%]">
            <div class="flex flex-col items-center gap-4">
              <img class="w-[125px] h-[125px]" src="{{ asset('images/barangayEmblem.png') }}" alt="Barangay Kalinaw Emblem">
              <div>
                <h1 class=" text-center font-bold font-raleway text-2xl">Barangay Kalinaw</h1>
                <span class=" text-center text-[#7d7d7d] font-inter">Welcome Back! Please enter your details</span>
              </div>
            </div>
          
            <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-11 ">
              @csrf
              <div class="flex flex-col gap-4">
                <div class=" flex flex-col">
                  <label for="userLogin" class=" font-inter">Email or ID</label>
                  <input class="bg-[#F5F5F5] border-[#1e1e1e] py-2  border-b" type="text" name="userLogin">
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
</x-default_navbar>