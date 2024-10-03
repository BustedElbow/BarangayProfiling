<x-layout>
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

    <!-- News Section -->
    <div class="container mx-auto mt-24">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 flex justify-between">
                <h1 class="text-start text-2xl font-bold">News</h1>
                <button><h3>View More</h3></button>
            </div>
            <div class="col-span-3 flex flex-col items-center border p-8">
                <img src="{{asset('../images/1.png') }}" alt="asd" class="w-full h-auto">
                <h2 class="text-xl font-semibold mt-2">Lorem Ipsum Title</h2>
                <p>September 9, 2024</p>
            </div>
            <div class="col-span-3 flex flex-col items-center border p-8">
                <img src="{{asset('../images/1.png') }}" alt="asd" class="w-full h-auto">
                <h2 class="text-xl font-semibold mt-2">Lorem Ipsum Title</h2>
                <p>September 9, 2024</p>
            </div>
            <div class="col-span-3 flex flex-col items-center border p-8">
                <img src="{{asset('../images/1.png') }}" alt="asd" class="w-full h-auto">
                <h2 class="text-xl font-semibold mt-2">Lorem Ipsum Title</h2>
                <p>September 9, 2024</p>
            </div>
            <div class="col-span-3 flex flex-col items-center border p-8">
                <img src="{{asset('../images/1.png') }}" alt="asd" class="w-full h-auto">
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
                    <img src="{{asset('../images/1.png') }}" alt="asd" class="w-full h-auto">
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
    <!--Captain-->
    <div class=" ">
        <div class="flex justify-center h-48 mt-24">
            <h1 class="uppercase font-bold text-2xl mt-16">Barangay Officials</h1>
        </div>
        <div class="flex justify-center">
            <div class="flex items-center px-16 py-6 border-2 rounded-lg mb-24">
                <img src="{{asset('../images/1.png') }}" alt="asd" class="w-32 h-32">
                <div class="ml-6">
                    <h2 class="text-xl font-semibold mt-2">John Doe</h2>
                    <p>Barangay Captain</p>
                </div>
            </div>
        </div>
        <!--Kagawad-->
        <div>
            <div class="flex justify-center">
                <div class="flex items-center px-16 py-6 border-2 rounded-lg mb-24">
                    <img src="{{asset('../images/1.png') }}" alt="asd" class="w-32 h-32">
                    <div class="ml-6">
                        <h2 class="text-xl font-semibold mt-2">Mike Doe</h2>
                        <p>Barangay Kagawad</p>
                        <p>Barangay</p>
                    </div>
                </div>
            </div>
            <!--Staff-->
            <div class="justify-between grid grid-cols-4 gap-4">
                <div class="flex justify-center">
                    <div class="flex items-center px-16 py-6 border-2 rounded-lg mb-24">
                        <img src="{{asset('../images/1.png') }}" alt="asd" class="w-32 h-32">
                        <div class="ml-6">
                            <h2 class="text-xl font-semibold mt-2">Doe John</h2>
                            <p>Staff </p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="flex items-center px-16 py-6 border-2 rounded-lg mb-24">
                        <img src="{{asset('../images/1.png') }}" alt="asd" class="w-32 h-32">
                        <div class="ml-6">
                            <h2 class="text-xl font-semibold mt-2">Staff Doe</h2>
                            <p>Staff</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="flex items-center px-16 py-6 border-2 rounded-lg mb-24">
                        <img src="{{asset('../images/1.png') }}" alt="asd" class="w-32 h-32">
                        <div class="ml-6">
                            <h2 class="text-xl font-semibold mt-2">Doe Staff</h2>
                            <p>Staff</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="flex items-center px-16 py-6 border-2 rounded-lg mb-24">
                        <img src="{{asset('../images/1.png') }}" alt="asd" class="w-32 h-32">
                        <div class="ml-6">
                            <h2 class="text-xl font-semibold mt-2">Doey Staff</h2>
                            <p>Staff</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="bg-black flex justify-center px-16 py-24 mt-16">
            <p class="text-white">© 2024 Footer Barangay System</p>
        </div>
    </footer>
</x-layout>
