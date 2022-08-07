<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
             <!-- Phone -->
            <div  class="mt-4">
                <x-label for="phone" :value="__('Phone')" />

                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
            </div>
            <!-- Address -->
            <div  class="mt-4">
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
            </div>
             <!-- Class -->
            <div  class="mt-4">
                <x-label for="class" :value="__('Interested class/Subject')" />

                <select id="class"  class="block mt-1 w-full" type="select" name="class" :value="old('class')"   >
                <option value="class1">class 1</option>
                <option value="class2">class 2</option>
                <option value="class3">class 3</option>
                <option value="class4">class 4</option>
                <option value="class5">class 5</option>
                <option value="class6">class 6</option>
                <option value="class7">class 7</option>
                <option value="class8">class 8</option>
                <option value="class1">Physics</option>
                <option value="class1">Chemistry</option>
                <option value="class1">Mathematics</option>
                <option value="class1">Higher Math</option>
                <option value="class1">Biology</option>
                <option value="class1">Bangla</option>
                <option value="class1">English</option>
                </select>
                
            </div>
            <!-- School -->
            <div  class="mt-4">
                <x-label for="school" :value="__('University/College Name')" />

                <x-input id="uni_col_name" class="block mt-1 w-full" type="text" name="uni_col_name" :value="old('uni_col_name')"   />
            </div>
            <!-- dept -->
            <div  class="mt-4">
                <x-label for="dept" :value="__('Department')" />

                <x-input id="dept" class="block mt-1 w-full" type="text" name="dept" :value="old('dept')"   />
            </div>
            <!-- age -->
            <div  class="mt-4">
                <x-label for="age" :value="__('Age')" />

                <x-input id="age" class="block mt-1 w-full" type="text" name="age" :value="old('age')"   />
            </div>
            <!-- Gender -->
            <div  class="mt-4">
                <x-label for="gender" :value="__('Gender')" />

                <x-input id="gender" class="" type="radio" name="gender" :value="old('male')"   />Male
                <x-input id="gender" class=" " type="radio" name="gender" :value="old('female')"   />Female
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
