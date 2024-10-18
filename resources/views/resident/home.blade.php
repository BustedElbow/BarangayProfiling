<x-default_navbar>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('/resources/js/custom.js') }}"></script>

    <div class=" container mx-auto">
        <div class=" grid grid-cols-12 gap-5 bg-eagle-alt">
          <div class="col-span-5 flex flex-col h-auto gap-6 justify-center mt-16">
            <div class=" flex flex-col gap-2">
              <h3 class=" text-2xl font-weight-light uppercase font-inter text-[#4169e1] font-semibold ">welcome to the</h3>
              <p class="capitalize font-bold text-5xl font-raleway">official barangay kalinaw website</p>
            </div>
          </div>   
        </div>
      </div>
      <div class="container mx-auto mt-24">
      <div class="flex justify-between mb-4 "></div>
  
  
      <!-- Carousel Wrapper -->
      <div id="card-container" class="overflow-x-auto relative ">
        
        <div class="flex space-x-6 rtl:space-x-reverse snap-x snap-mandatory">
          <!-- News Card 1 -->
          <a href="link-news" class="flex-shrink-0 bg-white border p-4 rounded-lg w-auto h-auto snap-center">
            <img src="{{asset('../images/brngy_logo.png') }}" alt="asd" class="w-[379px] h-[308px]">
            <h2 class="text-xl font-semibold mt-2">Lorem Ipsum Title</h2>
            <p>September 9, 2024</p>
          </a>
          <a href="link-news" class="flex-shrink-0 bg-white border p-4 rounded-lg w-[379px] h-[308px] snap-center">
            <img src="{{asset('../images/brngy_logo.png') }}" alt="asd" class="w-[379px] h-[308px]">
            <h2 class="text-xl font-semibold mt-2">Lorem Ipsum Title</h2>
            <p>September 9, 2024</p>
          </a>
          <a href="link-news" class="flex-shrink-0 bg-white border p-4 rounded-lg w-[379px] h-[308px] snap-center">
            <img src="{{asset('../images/brngy_logo.png') }}" alt="asd" class="w-[379px] h-[308px]">
            <h2 class="text-xl font-semibold mt-2">Lorem Ipsum Title</h2>
            <p>September 9, 2024</p>
          </a>
          <a href="link-news" class="flex-shrink-0 bg-white border p-4 rounded-lg w-[379px] h-[308px] snap-center">
            <img src="{{asset('../images/brngy_logo.png') }}" alt="asd" class="w-[379px] h-[308px]">
            <h2 class="text-xl font-semibold mt-2">Lorem Ipsum Title</h2>
            <p>September 9, 2024</p>
          </a>
          
        </div> 
     
      </div>

      <div class="">
        <!-- Custom Slider Control -->
        <input id="custom-slider" type="range" min="0" max="100" value="0" class="w-full mt-2" disabled>
      </div>

      <span class="">
          <h1 class="font-raleway font-bold text-2xl mt-8">Lorem Ipsum Feature</h1>
          <div class="flex items-center mt-2 space-x-4  ">
           <p>Lorem ipsum dolooluptatem nasamu molestias id.</p>
           <div class="pl-64">
            <button id="slider-prev" class="px-4 py-2 bg-blue-500 text-white rounded-l "><</button>
            <button id="slider-next" class="px-4 py-2 bg-blue-500 text-white rounded-r">></button>
           </div> 
          </div>
        </span>
      <script>
    document.addEventListener('DOMContentLoaded', function () {
      const cardContainer = document.getElementById('card-container');
      const customSlider = document.getElementById('custom-slider');
      let isScrolling;

      customSlider.addEventListener('input', function () {
        const maxScrollLeft = cardContainer.scrollWidth - cardContainer.clientWidth;
        const scrollLeft = (customSlider.value / 100) * maxScrollLeft;
        cardContainer.scrollLeft = scrollLeft;
      });

      function onScroll() {
      const maxScrollLeft = cardContainer.scrollWidth - cardContainer.clientWidth;
      const scrollLeft = cardContainer.scrollLeft;
      const sliderValue = (scrollLeft / maxScrollLeft) * 100;
      customSlider.value = sliderValue;
    }

      cardContainer.addEventListener('scroll', function () {
        const maxScrollLeft = cardContainer.scrollWidth - cardContainer.clientWidth;
        const scrollLeft = cardContainer.scrollLeft;
        const sliderValue = (scrollLeft / maxScrollLeft) * 100;
        customSlider.value = sliderValue;
        window.clearTimeout(isScrolling);
        isScrolling = setTimeout(function() {
        onScroll();
      }, 100); // Adjust this delay as needed
      });

      
      document.getElementById('slider-prev').addEventListener('click', function () {
          let newValue = Math.max(0, parseInt(customSlider.value) - 50);
          customSlider.value = newValue;
          customSlider.dispatchEvent(new Event('input'));
        });

       // Move slider right
       document.getElementById('slider-next').addEventListener('click', function () {
          let newValue = Math.min(100, parseInt(customSlider.value) + 50  );
          customSlider.value = newValue;
          customSlider.dispatchEvent(new Event('input'));
        });
      
    });
  </script>
</x-default_navbar>
