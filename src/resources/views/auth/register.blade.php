<x-guest-layout>

    <x-organisms.header />

    <div class="flex justify-center items-center">
        <x-atoms.icons.file-cloud-icon width="95" height="95" />
    </div>

    <x-jet-validation-errors class="mt-2" />

    <form method="POST" action="{{ route('register') }}"
        class="text-gray-400 bg-gray-900 shadow-md rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
        @csrf

        <x-atoms.input id="name" name="name" type="name" label="Name" autocomplete="name" autofocus />

        <x-atoms.input id="email" name="email" type="email" label="Email" autocomplete="email" />

        <x-atoms.input id="password" name="password" type="password" label="Password" autocomplete="new-password" />

        <x-atoms.input id="password_confirmation" name="password_confirmation" type="password"
            label="Password_confirmation" autocomplete="new-password" />


        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' =>
        '<a target="_blank" href="' .
        route('terms.show') .
        '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
        __('Terms of
                                Service') .
        '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
        @endif

        <button
            class="text-white bg-indigo-500 border-0 py-2 mt-4 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg text-center"
            type="submit">
            {{ __('Register') }}
        </button>

        <div class="flex items-center justify-end mt-4">
            <a class="text-xs text-gray-400 text-opacity-90 mt-3 underline hover:text-gray-200"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>

        </div>
    </form>
</x-guest-layout>
