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
