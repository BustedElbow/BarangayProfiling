<x-layout>
    <div class= "flex items-center justify-center min-h-screen bg-red-900">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="bg-black-200">
                <div>
                    <label for="email" class="">Email</label>
                    <input id="email" type="email" name="email" required autofocus>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required>
                </div>
                <div>
                    <button type="submit">Log in</button>
                </div>
            </div>
        </form>
    </div>
</x-layout>