<x-guest-layout>
    <a href="/" class="flex justify-center items-center">
        <img src="{{asset('images/namalogo.png')}}" alt="" srcset="" style="transform: scale(0.7)">
    </a>

    <form method="POST" action="{{ route('register') }}">
    @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')"/>
            <x-text-input type="text"
                     name="name"
                     id="name"
                     value="{{ old('name') }}"
                     required
                     autofocus
            />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-3">
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input type="email"
                     name="email"
                     id="email"
                     value="{{ old('email') }}"
                     required/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-3">
            <x-input-label for="password" :value="__('Password')"/>
            <x-text-input type="password"
                     name="password"
                     id="password"
                     required
                     autocomplete="current-password"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-3">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>
            <x-text-input type="password"
                     name="password_confirmation"
                     id="password_confirmation"
                     required
            />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        {{-- nomor telepon --}}
        <div class="mt-3">
            <x-input-label for="no_tel" :value="__('No. Telephone')"/>
            <x-text-input type="text"
                     name="no_tel"
                     id="no_tel"
                     value="{{ old('no_tel') }}"
                     required
                     autofocus
            />
            <x-input-error :messages="$errors->get('no_tel')" class="mt-2" />
        </div>

        {{-- Alamat --}}
        <div class="mt-3">
            <x-input-label for="alamat" :value="__('Alamat')"/>
            <x-text-input type="text"
                     name="alamat"
                     id="alamat"
                     value="{{ old('alamat') }}"
                     required
                     autofocus
            />
            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
        </div>

        <div class="flex flex-col items-end mt-4">
            <x-primary-button class="w-full">
                {{ __('Register') }}
            </x-primary-button>

            <a class="mt-4 text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>
    </form>
</x-guest-layout>
