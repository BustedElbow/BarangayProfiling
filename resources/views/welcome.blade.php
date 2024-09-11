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
          <div div class=" grid grid-cols-12 gap-5 py-4">
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

    <div class=" container mx-auto">
      <div class=" grid grid-cols-12 gap-5">
        <div class="col-span-5 flex flex-col h-auto gap-6 justify-center">
          <div class=" flex flex-col gap-2">
            <h1 class=" text-2xl font-bold">One profile at a time</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos commodi ea, sit ab culpa itaque et in possimus laborum fugiat vitae dicta! Corrupti libero officiis animi sit tempore nulla recusandae.
            A quasi corporis necessitatibus sapiente esse, cum quam repudiandae facere eos, quod voluptatem obcaecati! Asperiores tempore architecto illum voluptas, culpa incidunt dolore nostrum accusantium earum soluta nihil officia hic provident!</p>
          </div>
          <div>
            <button class="px-4 py-3 bg-black border rounded-button text-white w-auto h-auto">Register</button>
          </div>
          </div>
            <div class=" col-start-7 col-span-6 bg-slate-500 rounded-2xl bg-cover bg-center h-96 bg-hero-pattern"></div>
        </div>
      </div>
    </div>

    <!-- News Section -->
    <div class="container mx-auto mt-24">
      <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12 flex justify-between">
          <h1 class="text-start text-2xl font-bold">News</h1>
          <button><h3>View More</h3></button>
        </div>
        <div class="col-span-3 flex flex-col items-center border p-8">
          <img src="{{ asset('../images/1.png') }}" alt="asd" class="w-full h-auto">
          <h2 class="text-xl font-semibold mt-2">Lorem Ipsum Title</h2>
          <p>September 9, 2024</p>
        </div>
        <div class="col-span-3 flex flex-col items-center border p-8">
          <img src="{{ asset('../images/1.png') }}" alt="asd" class="w-full h-auto">
          <h2 class="text-xl font-semibold mt-2">Lorem Ipsum Title</h2>
          <p>September 9, 2024</p>
        </div>
        <div class="col-span-3 flex flex-col items-center border p-8">
          <img src="{{ asset('../images/1.png') }}" alt="asd" class="w-full h-auto">
          <h2 class="text-xl font-semibold mt-2">Lorem Ipsum Title</h2>
          <p>September 9, 2024</p>
        </div>
        <div class="col-span-3 flex flex-col items-center border p-8">
          <img src="{{ asset('../images/1.png') }}" alt="asd" class="w-full h-auto">
          <h2 class="text-xl font-semibold mt-2">Lorem Ipsum Title</h2>
          <p>September 9, 2024</p>
        </div>
      </div>
    </div>

    <!-- Barangay Clearance Section -->
      <div class="bg-black items-center">
        <div class="container mx-auto mt-24 ">
          <div class="grid grid-cols-12 gap-5">
            <div class="col-span-4 flex flex-col items-center p-8">
              <img src="{{ asset('../images/1.png') }}" alt="asd" class="w-full h-auto">
            </div>
            <div class="col-span-6 flex flex-col items-start justify-center ml-32">
              <h1 class="text-white text-2xl font-bold">Barangay Clearance</h1>
              <p class="text-white mt-6 justify-text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos commodi ea, sit ab culpa itaque et in possimus laborum fugiat vitae dicta! Corrupti libero officiis animi sit tempore nulla recusandae.</p>
              <button class="px-4 py-3 bg-transparent border rounded-button text-white mt-6">Learn More</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Barangay Officials Section -->
       <div class="container mx-auto">
        <h1>Barangay Officials</h1>
       </div>
  </body>
</html>
