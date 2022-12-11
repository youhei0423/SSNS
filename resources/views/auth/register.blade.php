<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name 
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            -->
            
            
            <!-- Name -->
            <div>
                <x-input-label for="user_name" :value="__('User_name')" />
                <x-text-input id="user_name" class="block mt-1 w-full" type="text" name="user_name" :value="old('user_name')" required autofocus />
                <x-input-error :messages="$errors->get('user_name')" class="mt-2" />
            </div>
            
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password 
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            -->
            
            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="text" name="password" :value="old('password')" required/>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            
            <!-- Address -->
            <div>
                <x-input-label for="address" :value="__('Address')" />
                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required/>
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>
            
            <!-- Icon-path -->
            <div>
                <x-input-label for="iconPath" :value="__('IconPath')" />
                <x-text-input id="iconPath" class="block mt-1 w-full" type="text" name="iconPath" :value="old('iconPath')" required/>
                <x-input-error :messages="$errors->get('iconPath')" class="mt-2" />
            </div>
            
            <!-- Profile -->
            <div>
                <x-input-label for="profile" :value="__('Profile')" />
                <x-text-input id="profile" class="block mt-1 w-full" type="text" name="profile" :value="old('profile')" required/>
                <x-input-error :messages="$errors->get('profile')" class="mt-2" />
            </div>

            <!-- Confirm Password 
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            -->

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
