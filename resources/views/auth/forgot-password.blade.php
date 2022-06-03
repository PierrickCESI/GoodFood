<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ route('index') }}"><img src="/img/logo.png" style="width:92px; height: 108px;"/></a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />






                <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('return') }}
                        </a>
                    <div class="col-4"></div>
                    <x-button>
                        {{ __('Email Password Reset Link') }}
                    </x-button>
                </div>

            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
