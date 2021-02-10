<x-guest-layout>

    <!-- component -->
    <div class="flex items-center w-full mt-5 md:mt-20 p-4 lg:justify-center">

        <div
            class="flex flex-col w-full overflow-hidden bg-white max md:shadow-lg md:flex-row md:flex-1 lg:max-w-screen-md">

            <div class="p-5 bg-white md:flex-1">
                <h3 class="my-4 text-2xl font-semibold text-gray-700">Forgot password</h3>

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

                @if (session('status'))
                    <div>
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('password.email') }}" method="POST" class="flex flex-col space-y-5">
                    @csrf


                    <div class="flex flex-col space-y-1">
                        <label for="email" class="text-sm font-semibold text-gray-500">Email address</label>
                        <input type="email" id="email" name="email" autofocus value="{{ old('email') }}"
                            class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" />
                    </div>

                    <div>
                        <button
                            class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-primary rounded-md shadow hover:bg-primary-dark focus:outline-none focus:ring-blue-200 focus:ring-4">
                            Email Password Reset Link
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
