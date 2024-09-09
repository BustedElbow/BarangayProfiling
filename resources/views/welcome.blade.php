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
      <img src="{{ asset('images/1.png') }}" alt="Placeholder Image" class="">
      <h1 class=" text-white uppercase" >NxtBarangay</h1>

      <ul >
        <div class="flex gap-x-4 mr-64">
          <li class="px-4 py-3 bg-transparent border rounded-button text-white uppercase"><a href="#">LogIn</a></li>
          <li class="px-4 py-3 bg-white rounded-button uppercase"><a href="#">Register</a></li>
        </div>
      </ul>

    </nav>

   </body>

</html>
