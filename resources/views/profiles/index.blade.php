<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link href="/profiles/style.css" type="text/css" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body class="bg-talent-green">
    @include('components.navbar.index')
    <div id="top" class="w-full h-64 bg-talent-white rounded-b-3xl">
        <div class="flex">
            <!-- Logo -->
            <div class="flex-1 mt-3 ml-5">
                <?xml version="1.0" encoding="UTF-8"?><svg id="Laag_1" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 559.14 263.07" class="w-36">
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
            </div>


        </div>
        <div class="mt-8 flex justify-center text-2xl text-talent-green font-bold">
            Profiel
        </div>
        <div class="flex justify-center">
            <div>
                <a href="/dashboard/survey">
                    <div class="flex justify-between mt-5 w-32 h-8 bg-talent-orange rounded-full">
                        <div class="flex h-full ml-2 mr-1 items-center text-talent-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                            </svg>
                        </div>
                        <div
                            class="flex mr-7 text-center h-full items-center text-xs select-none text-talent-white font-bold">
                            Vragenlijst
                        </div>
                    </div>
                <a/>
                <a href="{{ route('dashboard.manageProfile.edit', $user->id) }}">
                    <div class="flex justify-between mt-3 w-32 h-8 bg-talent-orange rounded-full">
                        <div class="flex h-full ml-2 mr-1 items-center text-talent-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </div>
                        <div
                            class="flex mr-7 text-center h-full items-center text-xs select-none text-talent-white font-bold">
                            Profiel wijzigen
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-24">
        <div class="customCard">
            <div class="flex justify-center">
                <img class="h-20 w-20 rounded-full object-cover" src="{{ $user->getProfilePhotoUrlAttribute() }}"
                    alt="{{ Auth::user()->name }}" />
            </div>
            <div class="flex justify-center mt-2 text-talent-orange font-bold text-3xl">
                {{ $user->name }}
            </div>
            @if (isset($user->description))
                {{ $user->description }}
            @endif
        </div>
    </div>
    </div>


    <!-- **Dit in een if state zetten  -->


    <div class="flex mt-12  justify-center">
        <div class="customCard">
            <div class="flex justify-center text-xl font-bold text-talent-green">
                Kennismaking pitch
            </div>
            <div class="mt-2 flex flex-col justify-center">
                @if (isset($user->pitch))
                @php
                    $baseurl = env('APP_URL');
                @endphp
                <video width="320" height="240" controls="controls">
                    <source src="{{ $user->getProfilePitchUrlAttribute() }}" type="video/mp4" />
                        Your browser does not support the video tag.
                </video>
                @endif
                </div>
        </div>
    </div>
    <!-- **end de if state hier -->

    {{-- @include('components.scrollTop.index') --}}

    <div class="flex justify-center mt-12">
        <div class="customCard">
            <div class="flex justify-center text-xl font-bold text-talent-green">
                Persoongegevens
            </div>
            <div class="flex justify-center mt-8">
                <div class="grid grid-cols-5 gap-2">
                    <!-- Name -->
                    <div class="col-span-1">
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
                    </div>
                    <div class="col-span-4 text-base flex items-center font-bold text-talent-orange">
                        {{ $user->name }}
                    </div>
                    <!-- adres -->
                    <div class="col-span-1">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="w-10 h-10"
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
                    </div>
                    <div class="col-span-4 text-base flex items-center font-bold text-talent-orange">
                        {{ $user->adress }}
                    </div>
                    <!-- job -->
                    @if (isset($user->employee))
                        <div class="col-span-1">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mr-5" viewBox="0 0 50 50" style="" preserveAspectRatio="xMidYMid meet">
                                <g fill="#000000FF" stroke="#000000FF">
                                <path d="M 17.000 3.500 C 17.000 5.958 16.867 6.000 9.000 6.000 L 1.000 6.000 1.000 24.000 L 1.000 42.000 14.000 42.000 C 30.484 42.000 31.514 40.172 15.250 39.782 L 3.500 39.500 3.202 33.250 L 2.905 27.000 24.952 27.000 L 47.000 27.000 47.000 29.500 C 47.000 30.875 47.450 32.000 48.000 32.000 C 48.615 32.000 49.000 27.000 49.000 19.000 L 49.000 6.000 41.000 6.000 C 33.133 6.000 33.000 5.958 33.000 3.500 C 33.000 1.042 32.867 1.000 25.000 1.000 C 17.133 1.000 17.000 1.042 17.000 3.500 M 46.500 16.500 L 46.500 24.500 25.000 24.500 L 3.500 24.500 3.201 17.599 C 3.036 13.804 3.138 10.082 3.427 9.329 C 3.854 8.218 7.957 8.011 25.226 8.230 L 46.500 8.500 46.500 16.500 M 30.755 4.750 C 31.054 5.658 29.503 6.000 25.083 6.000 C 19.417 6.000 17.973 5.360 19.712 3.622 C 20.900 2.433 30.308 3.394 30.755 4.750 "/></g>
                                <g fill="#000000FF" stroke="#000000FF">
                                <path d="M 35.250 29.352 C 33.463 29.936 32.000 31.010 32.000 31.738 C 32.000 32.467 31.363 33.307 30.583 33.606 C 29.662 33.960 29.167 35.670 29.167 38.500 C 29.167 41.330 29.662 43.040 30.583 43.394 C 31.363 43.693 32.000 44.626 32.000 45.469 C 32.000 46.400 32.901 47.000 34.300 47.000 C 35.565 47.000 37.028 47.421 37.550 47.936 C 38.832 49.201 46.000 46.900 46.000 45.224 C 46.000 44.516 46.638 43.693 47.417 43.394 C 49.357 42.649 49.357 34.351 47.417 33.606 C 46.638 33.307 46.000 32.426 46.000 31.648 C 46.000 30.870 44.988 30.014 43.750 29.745 C 42.513 29.477 40.825 29.040 40.000 28.774 C 39.175 28.508 37.038 28.768 35.250 29.352 M 43.849 34.849 C 47.347 38.347 44.286 44.333 39.000 44.333 C 33.736 44.333 30.651 38.349 34.125 34.875 C 37.308 31.692 40.683 31.683 43.849 34.849 "/></g>
                                <g fill="#000000FF" stroke="#000000FF">
                                <path d="M 23.000 21.000 C 23.000 22.333 23.667 23.000 25.000 23.000 C 26.333 23.000 27.000 22.333 27.000 21.000 C 27.000 19.667 26.333 19.000 25.000 19.000 C 23.667 19.000 23.000 19.667 23.000 21.000 "/></g>
                                </svg>
                        </div>
                        <div class="col-span-4 text-baseflex items-center font-bold text-talent-orange">
                            {{ $user->employee->function }}
                        </div>

                        <!-- job-2? -->
                        <div class="col-span-1">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mr-5"
                                viewBox="0 0 50 50" style="" preserveAspectRatio="xMidYMid meet">
                                <g fill="#000000FF" stroke="#000000FF">
                                    <path
                                        d="M 7.000 22.500 C 7.000 42.333 7.065 43.000 9.000 43.000 C 10.333 43.000 11.000 43.667 11.000 45.000 C 11.000 46.879 11.667 47.000 22.000 47.000 C 28.667 47.000 33.000 46.606 33.000 46.000 C 33.000 45.400 29.000 45.000 23.000 45.000 L 13.000 45.000 13.000 26.500 L 13.000 8.000 27.000 8.000 L 41.000 8.000 41.000 20.000 C 41.000 27.333 41.389 32.000 42.000 32.000 C 42.615 32.000 43.000 27.000 43.000 19.000 C 43.000 6.667 42.897 6.000 41.000 6.000 C 39.667 6.000 39.000 5.333 39.000 4.000 C 39.000 2.083 38.333 2.000 23.000 2.000 L 7.000 2.000 7.000 22.500 M 37.000 5.000 C 37.000 5.615 32.000 6.000 24.000 6.000 L 11.000 6.000 11.000 23.500 C 11.000 34.500 10.629 41.000 10.000 41.000 C 9.369 41.000 9.000 34.167 9.000 22.500 L 9.000 4.000 23.000 4.000 C 31.667 4.000 37.000 4.381 37.000 5.000 " />
                                </g>
                                <g fill="#000000FF" stroke="#000000FF">
                                    <path
                                        d="M 35.000 41.500 L 35.000 50.000 42.500 50.000 L 50.000 50.000 50.000 41.500 L 50.000 33.000 42.500 33.000 L 35.000 33.000 35.000 41.500 M 48.000 46.500 C 48.000 47.652 46.722 48.000 42.500 48.000 C 38.278 48.000 37.000 47.652 37.000 46.500 C 37.000 45.348 38.278 45.000 42.500 45.000 C 46.722 45.000 48.000 45.348 48.000 46.500 M 48.000 41.500 C 48.000 42.652 46.722 43.000 42.500 43.000 C 38.278 43.000 37.000 42.652 37.000 41.500 C 37.000 40.348 38.278 40.000 42.500 40.000 C 46.722 40.000 48.000 40.348 48.000 41.500 M 48.000 36.500 C 48.000 37.652 46.722 38.000 42.500 38.000 C 38.278 38.000 37.000 37.652 37.000 36.500 C 37.000 35.348 38.278 35.000 42.500 35.000 C 46.722 35.000 48.000 35.348 48.000 36.500 " />
                                </g>
                                <g fill="#000000FF" stroke="#000000FF">
                                    <path
                                        d="M 18.186 14.471 C 18.447 16.707 18.130 18.120 17.296 18.440 C 14.434 19.538 16.264 21.000 20.500 21.000 C 24.736 21.000 26.566 19.538 23.704 18.440 C 22.870 18.120 22.553 16.707 22.814 14.471 C 23.188 11.261 23.014 11.000 20.500 11.000 C 17.986 11.000 17.812 11.261 18.186 14.471 " />
                                </g>
                                <g fill="#000000FF" stroke="#000000FF">
                                    <path
                                        d="M 16.000 40.000 C 16.000 40.578 19.167 41.000 23.500 41.000 C 27.833 41.000 31.000 40.578 31.000 40.000 C 31.000 39.422 27.833 39.000 23.500 39.000 C 19.167 39.000 16.000 39.422 16.000 40.000 " />
                                </g>
                                <g fill="#000000FF" stroke="#000000FF">
                                    <path
                                        d="M 16.000 28.000 C 16.000 28.578 19.167 29.000 23.500 29.000 C 27.833 29.000 31.000 28.578 31.000 28.000 C 31.000 27.422 27.833 27.000 23.500 27.000 C 19.167 27.000 16.000 27.422 16.000 28.000 " />
                                </g>
                                <g fill="#000000FF" stroke="#000000FF">
                                    <path
                                        d="M 16.000 34.000 C 16.000 34.556 18.667 35.000 22.000 35.000 C 25.333 35.000 28.000 34.556 28.000 34.000 C 28.000 33.444 25.333 33.000 22.000 33.000 C 18.667 33.000 16.000 33.444 16.000 34.000 " />
                                </g>
                                <g fill="#000000FF" stroke="#000000FF">
                                    <path
                                        d="M 29.000 19.000 C 29.000 19.550 31.025 20.000 33.500 20.000 C 35.975 20.000 38.000 19.550 38.000 19.000 C 38.000 18.450 35.975 18.000 33.500 18.000 C 31.025 18.000 29.000 18.450 29.000 19.000 " />
                                </g>
                                <g fill="#000000FF" stroke="#000000FF">
                                    <path
                                        d="M 29.000 14.000 C 29.000 14.550 31.025 15.000 33.500 15.000 C 35.975 15.000 38.000 14.550 38.000 14.000 C 38.000 13.450 35.975 13.000 33.500 13.000 C 31.025 13.000 29.000 13.450 29.000 14.000 " />
                                </g>
                                <g fill="#000000FF" stroke="#000000FF">
                                    <path
                                        d="M 34.000 28.000 C 34.000 28.550 34.900 29.000 36.000 29.000 C 37.100 29.000 38.000 28.550 38.000 28.000 C 38.000 27.450 37.100 27.000 36.000 27.000 C 34.900 27.000 34.000 27.450 34.000 28.000 " />
                                </g>
                            </svg>
                        </div>
                        <div class="col-span-4 text-base flex items-center font-bold text-talent-orange">
                            {{ $user->employee->certificate }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('components.scrollTop.index')

    <!-- @include('components.scrollTop.index')
    <div class="flex justify-center mb-10">

    <div class="customCard">
        <div
            class="flex justify-center text-xl font-bold text-talent-green"
        >
            Persoongegevens
        </div>
        <div class="flex justify-center mt-8">
            <div class="">


                <a href="{{ route('dashboard.manageProfile.edit', $user->id) }}">
                    <div class="px-3 py-2 bg-talent-white rounded-full">
                        <div class="text-center h-full select-none bg-red-500 font-bold">
                            Account verwijderen
                        </div>
                    </div>
                </a>


            </div>
        </div>
    </div> -->
    </div>




</body>

</html>
