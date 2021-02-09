<x-guest-layout>

    <h2>Login</h2>


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

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="{{ old('email') }}" autocomplete>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <label for="remember">
                <input type="checkbox" name="remember" id="remember">
                <span class="">Remember Me</span>
            </label>
        </div>

        <div>
            <button>Login</button>
        </div>

    </form>

    <a href="#">Forgot Password</a>

</x-guest-layout>
