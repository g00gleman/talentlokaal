@include('matches.modal')
<x-guest-layout>

    <body class="bg-talent-green">
        @include('components.navbar.index')
        <div class="w-full h-64 bg-talent-white rounded-b-3xl">
            <div class="flex">
                <!-- Logo -->
                <div class=" mt-3">
                    <div class="flex justify-between w-screen">
                        <?xml version="1.0" encoding="UTF-8"?><svg id="Laag_1" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 559.14 263.07" class="w-36 ml-5">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #ef840c;
                                    }

                                    .cls-2 {
                                        fill: #1f796a;
                                    }
                                </style>
                            </defs>
                            <path class="cls-2"
                                d="M138.41,62.85l-13.61-.02c-1.4,0-2.63,.91-3.04,2.24l-16.99,55.32c-.63,2.04,.9,4.11,3.03,4.11h7.75c1.43,.01,2.68-.94,3.07-2.31l3.12-11.17c.38-1.38,1.64-2.33,3.07-2.32l12.89,.02c1.4,0,2.64,.92,3.04,2.27l3.38,11.31c.4,1.34,1.64,2.27,3.04,2.27h8.34c2.14,.02,3.67-2.06,3.04-4.1l-17.08-55.36c-.41-1.33-1.64-2.24-3.03-2.24Zm-12.49,31.42l2.58-9.74c.83-3.13,5.26-3.16,6.13-.04l2.74,9.75c.57,2.03-.96,4.04-3.06,4.04h-5.32c-2.08-.01-3.6-1.99-3.07-4Z" />
                            <path class="cls-2"
                                d="M426.47,135.34h-13.61c-1.4,0-2.63,.91-3.04,2.25l-16.91,55.34c-.62,2.04,.9,4.11,3.04,4.11h7.75c1.43,0,2.68-.95,3.06-2.33l3.1-11.18c.38-1.38,1.63-2.33,3.06-2.33h12.89c1.4,0,2.64,.92,3.04,2.26l3.4,11.31c.4,1.34,1.64,2.26,3.04,2.26h8.34c2.14,0,3.67-2.07,3.03-4.12l-17.16-55.34c-.41-1.33-1.64-2.24-3.03-2.24Zm-12.44,31.44l2.57-9.74c.82-3.13,5.25-3.17,6.13-.05l2.75,9.74c.57,2.03-.95,4.04-3.06,4.04h-5.32c-2.08,0-3.6-1.97-3.07-3.99Z" />
                            <path class="cls-2"
                                d="M364.74,135.34h-13.61c-1.4,0-2.63,.91-3.04,2.25l-16.91,55.34c-.62,2.04,.9,4.11,3.04,4.11h7.75c1.43,0,2.68-.95,3.06-2.33l3.1-11.18c.38-1.38,1.63-2.33,3.06-2.33h12.89c1.4,0,2.64,.92,3.04,2.26l3.4,11.31c.4,1.34,1.64,2.26,3.04,2.26h8.34c2.14,0,3.67-2.07,3.03-4.12l-17.16-55.34c-.41-1.33-1.64-2.24-3.03-2.24Zm-12.44,31.44l2.57-9.74c.82-3.13,5.25-3.17,6.13-.05l2.75,9.74c.57,2.03-.95,4.04-3.06,4.04h-5.32c-2.08,0-3.6-1.97-3.07-3.99Z" />
                            <path class="cls-2"
                                d="M73.15,74.57h-10.21c-1.75,0-3.18-1.42-3.18-3.18v-5.36c0-1.75,1.42-3.18,3.18-3.18h41.06c1.75,0,3.18,1.42,3.18,3.18v5.36c0,1.75-1.42,3.18-3.18,3.18h-10.49c-1.75,0-3.18,1.42-3.18,3.18v43.62c0,1.75-1.42,3.18-3.18,3.18h-7.65c-1.75,0-3.18-1.42-3.18-3.18v-43.62c0-1.75-1.42-3.18-3.18-3.18Z" />
                            <path class="cls-2"
                                d="M233.12,98.46h-16.35c-1.75,0-3.18,1.42-3.18,3.18v8.29c0,1.75,1.42,3.18,3.18,3.18h19c1.75,0,3.18,1.42,3.18,3.18v5.09c0,1.75-1.42,3.18-3.18,3.18h-33c-1.75,0-3.18-1.42-3.18-3.18v-55.34c0-1.75,1.42-3.18,3.18-3.18h31.72c1.75,0,3.18,1.42,3.18,3.18v5.09c0,1.75-1.42,3.18-3.18,3.18h-17.72c-1.75,0-3.18,1.42-3.18,3.18v6.46c0,1.75,1.42,3.18,3.18,3.18h16.35c1.75,0,3.18,1.42,3.18,3.18v5c0,1.75-1.42,3.18-3.18,3.18Z" />
                            <path class="cls-2"
                                d="M248.48,121.37v-55.34c0-1.75,1.42-3.18,3.18-3.18h11.26c1.14,0,2.2,.62,2.76,1.61l11.9,21c3.66,6.5,7.32,14.19,10.07,21.15h.27c-.92-8.15-1.19-16.48-1.19-25.72v-14.86c0-1.75,1.42-3.18,3.18-3.18h6.46c1.75,0,3.18,1.42,3.18,3.18v55.34c0,1.75-1.42,3.18-3.18,3.18h-9.59c-1.16,0-2.22-.63-2.78-1.64l-12.27-22.16c-3.66-6.59-7.69-14.55-10.71-21.79l-.27,.09c.37,8.15,.55,16.84,.55,26.91v15.4c0,1.75-1.42,3.18-3.18,3.18h-6.46c-1.75,0-3.18-1.42-3.18-3.18Z" />
                            <path class="cls-2"
                                d="M320.36,74.57h-10.21c-1.75,0-3.18-1.42-3.18-3.18v-5.36c0-1.75,1.42-3.18,3.18-3.18h41.06c1.75,0,3.18,1.42,3.18,3.18v5.36c0,1.75-1.42,3.18-3.18,3.18h-10.49c-1.75,0-3.18,1.42-3.18,3.18v43.62c0,1.75-1.42,3.18-3.18,3.18h-7.65c-1.75,0-3.18-1.42-3.18-3.18v-43.62c0-1.75-1.42-3.18-3.18-3.18Z" />
                            <path class="cls-2"
                                d="M171.23,62.85h7.65c1.75,0,3.18,1.42,3.18,3.18v116.11c0,1.75,1.42,3.18,3.18,3.18h18.18c1.75,0,3.18,1.42,3.18,3.18v5.36c0,1.75-1.42,3.18-3.18,3.18h-32.18c-1.75,0-3.18-1.42-3.18-3.18V66.03c0-1.75,1.42-3.18,3.18-3.18Z" />
                            <path class="cls-2"
                                d="M280.17,135.34h7.47c1.75,0,3.18,1.42,3.18,3.18v24.1h.27c1.37-2.38,2.84-4.58,4.21-6.77l13.06-19.12c.59-.87,1.57-1.39,2.62-1.39h8.95c2.64,0,4.13,3.04,2.51,5.13l-15.09,19.42c-.81,1.04-.89,2.47-.21,3.6l17.44,28.73c1.29,2.12-.24,4.83-2.72,4.83h-8.8c-1.14,0-2.2-.62-2.76-1.61l-11.9-20.99c-1.1-1.94-3.81-2.17-5.22-.44l-1.66,2.03c-.46,.57-.72,1.28-.72,2.01v15.83c0,1.75-1.42,3.18-3.18,3.18h-7.47c-1.75,0-3.18-1.42-3.18-3.18v-55.34c0-1.75,1.42-3.18,3.18-3.18Z" />
                            <path class="cls-2"
                                d="M457.67,135.34h7.65c1.75,0,3.18,1.42,3.18,3.18v43.62c0,1.75,1.42,3.18,3.18,3.18h18.18c1.75,0,3.18,1.42,3.18,3.18v5.36c0,1.75-1.42,3.18-3.18,3.18h-32.18c-1.75,0-3.18-1.42-3.18-3.18v-55.34c0-1.75,1.42-3.18,3.18-3.18Z" />
                            <g>
                                <circle class="cls-1" cx="238.98" cy="167.09" r="10.27" />
                                <path class="cls-1"
                                    d="M270.42,165.8c-.52-16.08-13.43-29.41-29.48-30.4-.66-.04-1.31-.06-1.96-.06h-.05c-.65,0-1.3,.02-1.96,.06-16.05,1-28.96,14.33-29.48,30.4-.29,9.11,3.28,17.4,9.21,23.33l14.27,14.25h0l7.96,8,.03-.03,.03,.03,4.6-4.62c1.79-1.8,1.8-4.71,.02-6.52l-7.8-7.91-7.81-7.74c-2.19-2.17-4.18-4.52-5.88-7.08-2.67-4.01-3.71-6.94-3.42-12.27,.4-7.46,4.92-14.19,11.84-17.02,2.87-1.17,5.72-1.71,8.44-1.71,2.72,0,5.57,.54,8.44,1.71,6.92,2.82,11.44,9.56,11.84,17.02,.29,5.34-.76,8.27-3.42,12.27-1.7,2.56-3.7,4.92-5.88,7.08l-2.57,2.55c-1.65,1.64-1.67,4.3-.04,5.96l1.9,1.94c1.66,1.69,4.38,1.71,6.06,.03l5.94-5.93c5.93-5.93,9.51-14.21,9.21-23.33Z" />
                            </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="menuIcon mr-4" onclick="openMenu(); check();">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="mt-12 flex justify-center text-2xl text-talent-green font-bold">
                Matches
            </div>
            <div class=" flex justify-center items-center mt-8 mr-16">
                <form>
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="text" id="searchInput" class="block shadow-lg h-10 p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-talent-green focus:border-talent-green dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-talent-green dark:focus:border-talent-green w-64" onkeyup="searchFunction()" placeholder="Zoek match...">

                    </div>
                </form>
            </div>
        </div>
        </div>
        <div class="flex flex-col justify-center items-center ">
            <svg onclick="openModalMatch()" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class=" text-talent-white h-14 ml-96 mr-12">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
        </svg>
        <ul id="search">
                    @foreach ($joboffersEmployee as $jobofferEmployee)
                        <a href="/dashboard/single/{{ $jobofferEmployee->id }}">
                            <li class="jobFunction">
                                <div class=" shadow-lg w-80 bg-talent-white rounded-xl flex items-center mb-6 h-32">

                                <div class="text-sm font-sans font-bold flex-1 ml-5 mt-5 text-talent-green">

                                Bedrijf: {{ $jobofferEmployee->employer->companyName }}<br />

                                Functie:{{ $jobofferEmployee->function }}

                                    <div class=" font-sans font-bold  text-sm mb-5 text-talent-orange">
                                        Match percentage: {{ $jobofferEmployee->matchPercentage }}%
                                    </div>

                                </div>

                                <div class=" flex-2 mr-5 ml-3 ">
                                    <img class="h-20 w-20 rounded-full object-cover"
                                        src="{{ $jobofferEmployee->employer->user->getProfilePhotoUrlAttribute() }}"
                                        alt="{{ Auth::user()->name }}" />
                                </div>
                            </div>
                        </li>
                        </a>
                    @endforeach
                </ul>
        </div>
        </div>
                </div>
                <script>
                function searchFunction() {
                    var input, filter, ul, li, a, i, txtValue;
                    input = document.getElementById('searchInput');
                    filter = input.value.toUpperCase();
                    ul = document.getElementById("search");
                    li = ul.getElementsByTagName('li');

                    for (i = 0; i < li.length; i++) {
                        txtValue = li[i].textContent || li[i].innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            li[i].style.display = "";
                        } else {
                            li[i].style.display = "none";
                        }
                    }
                }
                </script>
</x-guest-layout>
