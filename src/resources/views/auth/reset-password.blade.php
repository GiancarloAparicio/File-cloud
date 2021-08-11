<x-guest-layout>

    <x-organisms.header />
    <div class="flex justify-center items-center">
        <x-atoms.icons.file-cloud-icon width="95" height="95" />
    </div>

    <form method="POST" action="{{ route('password.update') }}"
        class="text-gray-400 bg-gray-900 shadow-md rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <x-atoms.input id="email" name="email" type="email" label="Email" autofocus  value="{{$request->email}}" />

        <x-atoms.input id="password" name="password" type="password" label="Password" />

        <x-atoms.input id="password_confirmation" name="password_confirmation" type="password" label="Confirm Password" />

        <div class="flex items-center justify-end mt-4">
            <x-jet-button>
                {{ __('Reset Password') }}
            </x-jet-button>
        </div>
    </form>
</x-guest-layout>
