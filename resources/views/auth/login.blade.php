<x-layout>
    <div class= "flex items-center justify-center min-h-screen">
        <div class="bg-blue-100 p-8 rounded-lg shadow-lg">
            <form method="POST" action="{{ route('login') }}" >
                @csrf
                <div class="flex flex-col space-y-4 ">
                    <div>
                        <label for="email" class="">Email</label>
                        <input id="email" class="mt-2 block w-full px-3 py-2 border  border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" type="email" name="email" required autofocus placeholder="Email">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input id="password" class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" type="password" name="password" required placeholder="Password">
                    </div>
                    <div>
                    <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Log in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>