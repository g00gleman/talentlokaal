<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
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
                <div class="flex justify-between mt-5 w-32 h-8 bg-talent-orange rounded-full">
                    <div class="flex h-full ml-2 mr-1 items-center text-talent-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                        </svg>
                    </div>
                    <div class="flex mr-7 text-center h-full items-center text-xs select-none text-talent-white font-bold">
                        Profiel wijzigen
                    </div>
                </div>
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

    <style>
        .customCard {
            border-radius: 12px;
            background-color: #bcd7d2;
            padding: 25px;
            width: 90%;
            min-width: 300px;
            max-width: 600px;
        }

        .customArrowbtn {
            margin-top: 25px;
            margin-bottom: 25px;
            margin-right: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #bcd7d2;
            width: 25px;
            height: 25px;
            border-radius: 100px;
        }

        .customSpacing {
            height: 50px;
        }

        @media only screen and (min-width: 450px) {
            .customArrowbtn {
                display: none;
            }
        }

        @media only screen and (max-width: 450px) {
            .customSpacing {
                display: block;
            }
        }

        .formBtn {
            padding-top: 8px;
            padding-bottom: 8px;
            padding-left: 16px;
            padding-right: 16px;
            border-radius: 100px;
            background-color: #ef840c;
            color: white;
            font-weight: bold;
        }
    </style>

    <div class="flex justify-center mt-24">
        <div class="customCard">
            <div class="flex justify-center">
                <img class="h-20 w-20 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                    alt="{{ Auth::user()->name }}" />
            </div>
            <div class="flex justify-center mt-2 text-talent-orange font-bold text-3xl">
                {{ $user->name }}
            </div>
            <div class="mt-2 text-talent-green">
                @if (empty($user->description))
                    <p>Geef extra info over u en voeg een beschrijving toe</p>
                    <form action="/dashboard/description/{{ $user->id }}" method="post">
                        @csrf
                        @method('put')
                        <textarea name="description" class="w-full h-32 mt-2" id=""></textarea>
                        <div class="flex justify-end mt-2" ><button class="formBtn" type="submit">Opslaan</button></div>
                    </form>
                @else
                    {{ $user->description }}
                @endif
            </div>
        </div>
    </div>

    @include('components.scrollTop.index')

    <div class="flex justify-center">
        <div class="customCard">
            <div class="flex justify-center text-xl font-bold text-talent-green">
                Kennismaking pitch
            </div>
            <div class="mt-2 flex flex-col justify-center">
                @if (empty($user->pitch))
                    <p>Maak uw profiel persoonlijker en voeg een pitch toe</p>

                    <x-jet-validation-errors class="mb-4 text-red-500" />
                    <form action="/dashboard/pitch/{{ $user->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="file" name="pitch" id="" />
                        <button type="submit">Upload</button>
                    </form>
                @else
                    @php
                        $baseurl = env('APP_URL');
                    @endphp
                    <video width="320" height="240" controls="controls">
                        <source src="{{ asset($baseurl . '/pitch/' . $user->pitch) }}" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                @endif

            </div>
        </div>
    </div>

    @include('components.scrollTop.index')

    <div class="flex justify-center">
        <div class="customCard">
            <div class="flex justify-center text-xl font-bold text-talent-green">
                Persoongegevens
            </div>
            <div class="flex justify-center mt-8">
                <div class="grid grid-cols-5 gap-2">
                    <!-- Name -->
                    <div class="col-span-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </div>
                    <div class="col-span-4 text-xs flex items-center font-bold text-talent-orange">
                        {{ $user->name }}
                    </div>
                    <!-- adres -->
                    <div class="col-span-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </div>
                    <div class="col-span-4 text-xs flex items-center font-bold text-talent-orange">
                        {{ $user->city }} {{ $user->street }} {{ $user->houseNumber }} {{ $user->postalCode }}
                    </div>
                    <!-- job -->
                    <div class="col-span-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                        </svg>
                    </div>
                    <div class="col-span-4 text-xs flex items-center font-bold text-talent-orange">
                        {{ $user->employee->function }}
                    </div>
                    <!-- job-2? -->
                    <div class="col-span-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                        </svg>
                    </div>
                    <div class="col-span-4 text-xs flex items-center font-bold text-talent-orange">
                        {{ $user->employee->certificate }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.scrollTop.index')
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
    </div>
</div>




</body>

</html>
