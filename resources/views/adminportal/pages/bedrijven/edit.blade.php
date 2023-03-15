<x-guest-layout>
   
        <form action="/admin/bedrijven/edit/{{ $employer->id }}" method="post">
            {{ csrf_field() }}
            @method('put')
            <div class="flex justify-center items-center">
                <div
                    class=" bg-talent-light-green ml-2 mr-2 flex-col rounded-xl flex justify-center items-center mt-12 mb-5 w-96">
                        {{-- companyname --}}
                        <div class=" flex mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mr-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                            </svg>
    
                            <x-jet-input id="companyName"
                                class=" font-sans focus:ring-talent-orange underline decoration-talent-orange px-5 border-none block mt-1 w-64 rounded-full shadow-xl placeholder:text-talent-orange"
                                type="text" name="bedrijfsnaam"  autofocus
                                placeholder="*Vul hier uw bedrijfsnaam in" />
                        </div>
                        <div class="text-sm flex justify-center items-center text-talent-red">
                        @error('bedrijfsnaam')
                        {{$message}}
                        @enderror
                        </div>
                        <div class=" flex mt-4">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mr-5"
                                viewBox="0 0 64 64" style="" preserveAspectRatio="xMidYMid meet">
                                <g fill="#000000FF" stroke="#000000FF">
                                    <path
                                        d="M 25.763 14.565 C 18.129 18.707 18.254 31.494 25.967 35.483 C 34.372 39.829 44.000 34.232 44.000 25.000 C 44.000 15.754 34.057 10.065 25.763 14.565 M 35.385 18.130 C 41.180 20.770 40.882 29.564 34.914 32.036 C 28.626 34.640 22.351 28.396 24.950 22.121 C 26.785 17.691 30.937 16.103 35.385 18.130 " />
                                </g>
                                <g fill="#000000FF" stroke="#000000FF">
                                    <path
                                        d="M 24.032 41.309 C 19.358 42.799 10.731 51.135 11.578 53.344 C 12.558 55.897 14.233 55.334 17.377 51.394 C 20.722 47.202 27.004 44.044 32.000 44.044 C 36.996 44.044 43.278 47.202 46.623 51.394 C 49.767 55.334 51.442 55.897 52.422 53.344 C 53.342 50.946 44.548 42.780 39.377 41.231 C 34.480 39.764 28.790 39.793 24.032 41.309 " />
                                </g>
                            </svg>
                            <x-jet-input id="name"
                                class=" font-sans focus:ring-talent-orange underline decoration-talent-orange px-5 border-none block mt-1 w-64 rounded-full shadow-xl placeholder:text-talent-orange"
                                type="text" name="naam" :value="old('naam')"  autofocus
                                placeholder="*Vul hier uw contactpersoon in " />
                        </div>
                        <div class="text-sm flex justify-center items-center text-talent-red">
                        @error('naam')
                        {{$message}}
                        @enderror
                        </div>
                        {{-- function --}}
                        <div class=" flex mt-4">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mr-5" viewBox="0 0 50 50" style="" preserveAspectRatio="xMidYMid meet">
                                <g fill="#000000FF" stroke="#000000FF">
                                <path d="M 17.000 3.500 C 17.000 5.958 16.867 6.000 9.000 6.000 L 1.000 6.000 1.000 24.000 L 1.000 42.000 14.000 42.000 C 30.484 42.000 31.514 40.172 15.250 39.782 L 3.500 39.500 3.202 33.250 L 2.905 27.000 24.952 27.000 L 47.000 27.000 47.000 29.500 C 47.000 30.875 47.450 32.000 48.000 32.000 C 48.615 32.000 49.000 27.000 49.000 19.000 L 49.000 6.000 41.000 6.000 C 33.133 6.000 33.000 5.958 33.000 3.500 C 33.000 1.042 32.867 1.000 25.000 1.000 C 17.133 1.000 17.000 1.042 17.000 3.500 M 46.500 16.500 L 46.500 24.500 25.000 24.500 L 3.500 24.500 3.201 17.599 C 3.036 13.804 3.138 10.082 3.427 9.329 C 3.854 8.218 7.957 8.011 25.226 8.230 L 46.500 8.500 46.500 16.500 M 30.755 4.750 C 31.054 5.658 29.503 6.000 25.083 6.000 C 19.417 6.000 17.973 5.360 19.712 3.622 C 20.900 2.433 30.308 3.394 30.755 4.750 "/></g>
                                <g fill="#000000FF" stroke="#000000FF">
                                <path d="M 35.250 29.352 C 33.463 29.936 32.000 31.010 32.000 31.738 C 32.000 32.467 31.363 33.307 30.583 33.606 C 29.662 33.960 29.167 35.670 29.167 38.500 C 29.167 41.330 29.662 43.040 30.583 43.394 C 31.363 43.693 32.000 44.626 32.000 45.469 C 32.000 46.400 32.901 47.000 34.300 47.000 C 35.565 47.000 37.028 47.421 37.550 47.936 C 38.832 49.201 46.000 46.900 46.000 45.224 C 46.000 44.516 46.638 43.693 47.417 43.394 C 49.357 42.649 49.357 34.351 47.417 33.606 C 46.638 33.307 46.000 32.426 46.000 31.648 C 46.000 30.870 44.988 30.014 43.750 29.745 C 42.513 29.477 40.825 29.040 40.000 28.774 C 39.175 28.508 37.038 28.768 35.250 29.352 M 43.849 34.849 C 47.347 38.347 44.286 44.333 39.000 44.333 C 33.736 44.333 30.651 38.349 34.125 34.875 C 37.308 31.692 40.683 31.683 43.849 34.849 "/></g>
                                <g fill="#000000FF" stroke="#000000FF">
                                <path d="M 23.000 21.000 C 23.000 22.333 23.667 23.000 25.000 23.000 C 26.333 23.000 27.000 22.333 27.000 21.000 C 27.000 19.667 26.333 19.000 25.000 19.000 C 23.667 19.000 23.000 19.667 23.000 21.000 "/></g>
                                </svg>
                            <select name="jobCategory" id="jobCategory" class=" text-talent-orange font-sans focus:ring-talent-orange underline decoration-talent-orange px-5 border-none block mt-1 w-64 rounded-full shadow-xl placeholder:text-talent-orange">
                                <option value="" selected>*Kies een Sector</option>
                                @foreach($jobcategorys as $jobcategory)
                                    <option value="{{ $jobcategory->id }}">{{ $jobcategory->categoryName }}</option>
                                @endforeach
                            </select>
    
                            </div>
    
                            <div class="text-sm flex justify-center items-center text-talent-red">
                            @error('functie')
                            {{$message}}
                            @enderror
                            </div>
                            <div class=" flex mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mr-5">
                                    <path stroke-linecap="round"
                                        d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                                </svg>
        
                                <x-jet-input id="email"
                                    class=" font-sans focus:ring-talent-orange underline decoration-talent-orange px-5 border-none block mt-1 w-64 rounded-full shadow-xl placeholder:text-talent-orange"
                                    type="email" name="email" :value="old('email')"
                                    placeholder="*Vul hier uw email in" />
                            </div>
                            <div class="text-sm flex justify-center items-center text-talent-red">
                            @error('email')
                                {{$message}}
                                @enderror
                            </div>
                            {{-- adress --}}
                            <div class=" flex mt-4">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mr-5"
                                    viewBox="0 0 64 64" style="" preserveAspectRatio="xMidYMid meet">
                                    <g fill="#000000FF" stroke="#000000FF">
                                        <path
                                            d="M 21.500 1.900 C 12.786 5.943 8.000 13.902 8.000 24.352 C 8.000 29.836 8.575 31.911 11.960 38.634 C 16.800 48.245 29.246 64.000 32.000 64.000 C 34.754 64.000 47.200 48.245 52.040 38.634 C 55.479 31.802 55.997 29.896 55.978 24.134 C 55.943 13.555 50.748 5.290 41.782 1.551 C 36.648 -0.591 26.491 -0.416 21.500 1.900 M 44.423 6.780 C 53.596 13.139 55.566 24.624 49.541 36.616 C 45.969 43.723 33.760 60.000 32.000 60.000 C 30.240 60.000 18.031 43.723 14.459 36.616 C 11.722 31.167 11.000 28.541 11.000 24.023 C 11.000 6.582 29.999 -3.219 44.423 6.780 " />
                                    </g>
                                    <g fill="#000000FF" stroke="#000000FF">
                                        <path
                                            d="M 23.761 14.283 C 17.275 18.342 14.684 21.839 19.000 20.710 C 20.867 20.222 21.000 20.680 21.000 27.594 L 21.000 35.000 32.000 35.000 L 43.000 35.000 43.000 27.594 C 43.000 20.680 43.133 20.222 45.000 20.710 C 46.281 21.045 46.997 20.742 46.991 19.867 C 46.982 18.378 34.050 9.979 31.852 10.033 C 31.108 10.052 27.467 11.964 23.761 14.283 M 36.459 15.743 L 41.000 18.485 41.000 25.743 C 41.000 32.333 40.816 33.000 39.000 33.000 C 37.267 33.000 37.000 32.333 37.000 28.000 L 37.000 23.000 32.000 23.000 L 27.000 23.000 27.000 28.000 C 27.000 32.333 26.733 33.000 25.000 33.000 C 23.184 33.000 23.000 32.333 23.000 25.739 L 23.000 18.477 27.250 15.816 C 29.588 14.352 31.594 13.120 31.709 13.077 C 31.824 13.035 33.962 14.234 36.459 15.743 M 35.000 29.000 C 35.000 32.778 34.833 33.000 32.000 33.000 C 29.167 33.000 29.000 32.778 29.000 29.000 C 29.000 25.222 29.167 25.000 32.000 25.000 C 34.833 25.000 35.000 25.222 35.000 29.000 " />
                                    </g>
                                </svg>
        
                                <x-jet-input id="adres"
                                    class="font-sans focus:ring-talent-orange underline decoration-talent-orange px-5 border-none block mt-1 w-64 rounded-full shadow-xl placeholder:text-talent-orange"
                                    type="text" name="adres" :value="old('adres')"  autofocus
                                    placeholder="*Vul hier uw adres in" />
                            </div>
                            <div class="text-sm flex justify-center items-center text-talent-red">
                            @error('adres')
                            {{$message}}
                            @enderror
                            </div>
                        {{-- phonenumber --}}
                        <div class=" flex mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-10 h-10 mr-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
    
                            <x-jet-input id="phoneNumber"
                                class=" font-sans focus:ring-talent-orange underline decoration-talent-orange px-5 border-none block mt-1 w-64 rounded-full shadow-xl placeholder:text-talent-orange"
                                type="tel" name="telefoonnummer" :value="old('telefoonnummer')"  autofocus
                                placeholder="*Vul hier uw telefoonnummer in" />
                        </div>
                        <div class="text-sm flex justify-center items-center text-talent-red">
                        @error('telefoonnummer')
                        {{$message}}
                        @enderror
                        </div>
                        {{-- profilePhoto --}}
                        <div class=" flex mt-4">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mr-5"
                                viewBox="0 0 50 50" style="" preserveAspectRatio="xMidYMid meet">
                                <g fill="#000000FF" stroke="#000000FF">
                                    <path
                                        d="M 7.000 25.000 L 7.000 48.000 21.500 48.000 C 30.500 48.000 36.000 47.621 36.000 47.000 C 36.000 46.383 30.833 46.000 22.500 46.000 L 9.000 46.000 9.000 25.000 L 9.000 4.000 18.500 4.000 L 28.000 4.000 28.000 10.500 L 28.000 17.000 34.500 17.000 L 41.000 17.000 41.000 22.941 C 41.000 26.209 41.450 29.160 42.000 29.500 C 42.634 29.892 43.000 27.251 43.000 22.280 L 43.000 14.442 36.723 8.221 L 30.446 2.000 18.723 2.000 L 7.000 2.000 7.000 25.000 M 34.235 15.000 L 30.000 15.000 30.000 10.765 L 30.000 6.529 34.235 10.765 L 38.471 15.000 34.235 15.000 " />
                                </g>
                                <g fill="#000000FF" stroke="#000000FF">
                                    <path
                                        d="M 36.750 35.453 C 34.688 37.865 33.000 40.101 33.000 40.420 C 33.000 40.739 34.125 41.000 35.500 41.000 C 37.796 41.000 38.000 41.367 38.000 45.500 C 38.000 49.976 38.019 50.000 41.500 50.000 C 44.981 50.000 45.000 49.976 45.000 45.500 C 45.000 41.367 45.204 41.000 47.500 41.000 C 48.875 41.000 49.982 40.663 49.959 40.250 C 49.896 39.096 42.342 30.996 41.364 31.033 C 40.889 31.051 38.813 33.040 36.750 35.453 M 43.230 42.750 C 42.953 46.190 42.356 48.000 41.500 48.000 C 39.881 48.000 38.915 38.100 40.348 36.200 C 42.205 33.737 43.685 37.101 43.230 42.750 " />
                                </g>
                                <g fill="#000000FF" stroke="#000000FF">
                                    <path
                                        d="M 13.000 35.000 C 13.000 35.600 17.000 36.000 23.000 36.000 C 29.000 36.000 33.000 35.600 33.000 35.000 C 33.000 34.400 29.000 34.000 23.000 34.000 C 17.000 34.000 13.000 34.400 13.000 35.000 " />
                                </g>
                                <g fill="#000000FF" stroke="#000000FF">
                                    <path
                                        d="M 13.000 23.000 C 13.000 23.600 17.000 24.000 23.000 24.000 C 29.000 24.000 33.000 23.600 33.000 23.000 C 33.000 22.400 29.000 22.000 23.000 22.000 C 17.000 22.000 13.000 22.400 13.000 23.000 " />
                                </g>
                                <g fill="#000000FF" stroke="#000000FF">
                                    <path
                                        d="M 13.000 29.000 C 13.000 29.583 16.333 30.000 21.000 30.000 C 25.667 30.000 29.000 29.583 29.000 29.000 C 29.000 28.417 25.667 28.000 21.000 28.000 C 16.333 28.000 13.000 28.417 13.000 29.000 " />
                                </g>
                            </svg>
                            <div
                                class=" font-sans px-5 flex items-center border-none content-center  mt-1 w-64 rounded-full shadow-xl placeholder:text-talent-orange bg-talent-white text-talent-orange underline">
                                <input type="file" name="profielfoto" id="upload" accept=".jpg,.jpeg,.png,.bmp,.gif,.svg,.webp" onchange="showFileName(this)" hidden/>
                                    <label for="upload" class="" id="file-name">Upload hier uw bedrijfslogo</label>
                            </div>
                        </div>
                        <div class="text-sm flex justify-center items-center text-talent-red">
                        @error('profielfoto')
                        {{$message}}
                        @enderror
                        </div>
    
    
                        <div class=" text-base mt-5 justify-start flex mb">
                            * Verplichte velden.
                        </div>
                    
                    <button name="submit" type="submit" class="font-bold focus:ring-talent-orange ml-4 font-sans bg-talent-orange w-44 m-5 rounded-full text-talent-white justify-center shadow-xl">Opslaan</button>
            </div>
        </div>
</form>
</x-guest-layout>