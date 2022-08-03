<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="fname" value="{{ __('First Name') }}" />
                <x-jet-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')"
                    required autofocus autocomplete="fname" />
            </div>
            <div>
                <x-jet-label for="mname" value="{{ __('Middle Name') }}" />
                <x-jet-input id="mname" class="block mt-1 w-full" type="text" name="mname" :value="old('mname')"
                    required autofocus autocomplete="mname" />
            </div>
            <div>
                <x-jet-label for="lname" value="{{ __('Last Name') }}" />
                <x-jet-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')"
                    required autofocus autocomplete="lname" />
            </div>
            <div>
                <x-jet-label for="id_number" value="{{ __('id_number') }}" />
                <x-jet-input id="id_number" class="block mt-1 w-full" type="number" name="id_number"
                    :value="old('id_number')" required autofocus autocomplete="id_number" />
            </div>

            <div>
                <x-jet-label for="mobile_number" value="{{ __('Mobile Number') }}" />
                <x-jet-input id="mobile_number" class="block mt-1 w-full" type="text" name="mobile_number"
                    :value="old('mobile_number')" required autofocus autocomplete="mobile_number" />
            </div>
            <div>
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                    required autofocus autocomplete="address" />
            </div>
            <div>
                <x-jet-label for="marital_status" value="{{ __('Marital Status') }}" />
                <x-jet-input id="marital_status" class="block mt-1 w-full" type="text" name="marital_status"
                    :value="old('marital_status')" required autofocus autocomplete="marital_status" />
            </div>

            <div>
                <x-jet-label for="agree_privacy_policy" value="{{ __('Agree Privacy Policy') }}" />
                <x-jet-input id="agree_privacy_policy" class="block mt-1 w-full" type="text" name="agree_privacy_policy"
                    :value="old('agree_privacy_policy')" required autofocus autocomplete="agree_privacy_policy" />
            </div>
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of
                                Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy
                                Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>