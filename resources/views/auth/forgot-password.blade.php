<x-guest-layout>
    <div class=" w-full h-64 bg-talent-white rounded-b-3xl">
        @include('components.navbar.index')
        @include('components.redirectBack.index')
        <div class=" font-sans font-bold tracking-widest text-talent-green flex text-center text-2xl justify-center mb-10 mt-20">
            Wachtwoord vergeten?</div>
        <div class="flex justify-center items-center mt-56">
        <div class=" bg-talent-light-green w-80 h-96 rounded-2xl">

        <div class=" font-sans text-talent-white flex justify-center items-center mt-10">
            Vul hieronder uw emailadres in
        </div>
      
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
        <div class=" flex justify-center items-center mt-14">

            <div class="block">
                <x-jet-input id="email" class="font-sans focus:ring-talent-orange text-talent-green  decoration-talent-orange px-5 border-none block mt-1 w-64 rounded-full shadow-xl placeholder:text-talent-green text-center" type="email" name="email" :value="old('email')" placeholder="Emailadres" required autofocus />
            </div>
        </div>
        <div class=" flex justify-center items-center mt-24">
                <x-jet-button class="font-bold focus:ring-talent-orange ml-4 font-sans bg-talent-orange w-44 m-5 rounded-full text-talent-white justify-center shadow-xl">
                    Verstuur
                </x-jet-button>
        </div>
    </div>
        </div>
            </div>
</form>

</x-guest-layout>
