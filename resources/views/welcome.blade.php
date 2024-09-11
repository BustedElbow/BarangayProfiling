<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        @vite('resources/css/app.css')
  </head>

   <body>
     
     <nav class="bg-black flex justify-between p-8">
       <img src="{{ asset('../images/1.png') }}" alt="Placeholder Image" class="ml-64 p-2 w-32 h-32">
       <ul>
         <div class="flex gap-x-4 mr-64">
           <li class="px-4 py-3 bg-transparent border rounded-button text-white uppercase"><a href="#">LogIn</a></li>
           <li class="px-4 py-3 bg-white rounded-button uppercase"><a href="#">Register</a></li>
          </div>
        </ul>
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

    <div class="ml-64 mt-32 flex justify-between">
      <div class="flex-1">
        <h1 class="mt-11 text-2xl uppercase font-bold">Be an SK NOW!</h1>
        <p class="mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus corporis officia aliquam perspiciatis minima sed minus suscipit porro ex assumenda, eaque optio eius, reprehenderit consequatur quibusdam voluptatibus, doloremque qui similique.</p>
        <button class="mt-6 px-4 py-3 bg-black border rounded-button text-white uppercase"> Register</button>
      </div>
      <div class="flex-1 flex  ml-32">
        <img src="{{ asset('../images/2.png') }}" alt="Placeholder Image" class="w-554 h-326">
      </div>
    </div>


  </body>
</html>
