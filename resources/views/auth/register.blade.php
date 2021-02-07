<x-guest-layout>

    <h2>Register</h2>


    @if ($errors->any())
        <div>
            <div>Something went wrong!</div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name">Name</label>
            <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email">Email</label>
            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">Password</label>
            <input id="password" class="block mt-1 w-full" type="password" name="password"
                autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" />
        </div>

        <div class="flex items-center justify-end mt-4">
            {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">Already
                registered?</a> --}}
            <button class="ml-4">Register</button>
        </div>
    </form>

</x-guest-layout>
