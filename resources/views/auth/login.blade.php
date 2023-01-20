
<x-guest-layout>

<div class="bg-talent-light-green h-80 ml-2 mr-2 rounded-xl flex justify-center items-center m-64 ">
        <img src="/images/TalentLokaal_Logo_Klein.png" class=" w-16 h-22">

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-input id="email" class="block mt-1 w-64 rounded-full shadow-xl" type="email" name="email" :value="old('email')"  placeholder="Email-adres" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-input id="password" class="block mt-1 w-64 rounded-full shadow-xl" type="password" name="password"  placeholder="Password"  required autocomplete="current-password" />
            </div>


            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-talent-white hover:text-talent-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Wachtwoord vergeten?') }}
                    </a>
                @endif
            </div>

                <x-jet-button class="ml-4 bg-talent-orange w-64 m-5 rounded-full text-talent-white ">
                     {{('Log in') }}
                </x-jet-button>
            
        </div>

    </form>

</x-guest-layout>

