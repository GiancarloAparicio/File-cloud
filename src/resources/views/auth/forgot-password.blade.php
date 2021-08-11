<x-guest-layout>

    <x-organisms.header />
    <div class="flex justify-center items-center">
        <x-atoms.icons.file-cloud-icon width="95" height="95" />
    </div>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}"
        class="text-gray-400 bg-gray-900 shadow-md rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
        @csrf
        <div class=" w-96 mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <x-atoms.input id="email" name="email" type="email" label="Email" autofocus />

        <div class="flex items-center justify-end mt-4">
            <x-jet-button>
                {{ __('Email Password Reset Link') }}
            </x-jet-button>
        </div>
    </form>

</x-guest-layout>
