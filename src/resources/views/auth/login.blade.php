<x-guest-layout>

    <x-organisms.header />

    <div class="flex justify-center items-center">
        <x-atoms.icons.file-cloud-icon width="95" height="95" />
    </div>

    @if (session('status'))
        <div class="mb-4 text-center font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}"
        class="text-gray-400 bg-gray-900 shadow-md rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
        @csrf
        <h2 class="text-white text-lg mb-1 font-medium title-font"> File Cloud </h2>
        <p class="leading-relaxed mb-5"> If you don't have an account you can create your own. </p>

        <x-atoms.input id="email" name="email" type="email" label="Email" :value="old('email')"  />

        <x-atoms.input id="password" name="password" type="password" label="Password" />

        <div class="block mt-4 my-5">
            <label for="remember_me" class="flex items-center">
                <x-jet-checkbox id="remember_me" name="remember" class="bg-gray-700" />
                <span class="ml-2 text-sm text-gray-500">{{ __('Remember me') }}</span>
            </label>
        </div>

        <button
            class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg text-center"
            type="submit">
            {{ __('Login') }}
        </button>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-xs text-gray-400 text-opacity-90 mt-3 underline hover:text-gray-200"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

    </form>
</x-guest-layout>
