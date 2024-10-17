<x-layout>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
  <div class="overflow-x-auto relative">
    <div class="flex space-x-6 rtl:space-x-reverse snap-x snap-mandatory">
        <h1 class="text-[48px] font-bold font-raleway">01</h1>
      <!-- News Card 1 -->
      <a href="link-news" class="flex-shrink-0 bg-white border p-4 rounded-lg w-64 snap-center">
        <img src="{{asset('../images/brngy_logo.png') }}" alt="asd" class="w-full h-auto">
        <h2 class="text-xl font-semibold mt-2">Lorem Ipsum Title</h2>
        <p>September 9, 2024</p>
      </a>

      <!-- News Card 2 -->
      <a href="link-news" class="flex-shrink-0 bg-white border p-4 rounded-lg w-64 snap-center">
        <img src="{{asset('../images/brngy_logo.png') }}" alt="asd" class="w-full h-auto">
        <h2 class="text-xl font-semibold mt-2">Lorem Ipsum Title</h2>
        <p>September 9, 2024</p>
      </a>

      <!-- News Card 3 -->
      <a href="link-news" class="flex-shrink-0 bg-white border p-4 rounded-lg w-64 snap-center">
        <img src="{{asset('../images/brngy_logo.png') }}" alt="asd" class="w-full h-auto">
        <h2 class="text-xl font-semibold mt-2">Lorem Ipsum Title</h2>
        <p>September 9, 2024</p>
      </a>

      <!-- News Card 4 -->
      <a href="link-news" class="flex-shrink-0 bg-white border p-4 rounded-lg w-64 snap-center">
        <img src="{{asset('../images/brngy_logo.png') }}" alt="asd" class="w-full h-auto">
        <h2 class="text-xl font-semibold mt-2">Lorem Ipsum Title</h2>
        <p>September 9, 2024</p>
      </a>

      <a href="link-news" class="flex-shrink-0 bg-white border p-4 rounded-lg w-64 snap-center">
        <img src="{{asset('../images/brngy_logo.png') }}" alt="asd" class="w-full h-auto">
        <h2 class="text-xl font-semibold mt-2">Lorem Ipsum Title</h2>
        <p>September 9, 2024</p>
      </a>

      <a href="link-news" class="flex-shrink-0 bg-white border p-4 rounded-lg w-64 snap-center">
        <img src="{{asset('../images/brngy_logo.png') }}" alt="asd" class="w-full h-auto">
        <h2 class="text-xl font-semibold mt-2">Lorem Ipsum Title</h2>
        <p>September 9, 2024</p>
      </a>
    </div>
  </div>
</div>

   
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

 <script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
        },
    });
</script>
</x-layout>
