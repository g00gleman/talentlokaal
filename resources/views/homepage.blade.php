    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>
        @vite('resources/css/app.css')
        <style>
            .scrollbar-hide {
                -ms-overflow-style: none;
                /* IE and Edge */
                scrollbar-width: none;
                /* Firefox */
            }

            .scrollbar-hide::-webkit-scrollbar {
                display: none;
            }

            .notifier{
                background-color: red;
                color: white;
                border-radius: 666px;
                width: 15px;
                height: 15px;
                font-size: 10px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .notifier-pos{
                left: 15px;
                position: absolute;
            }

            .test{
                min-height: 200px;
            }

        .dots {
            position: fixed;
            top: 65%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: row;
            gap: 1rem;
            left: 47rem;
            cursor: pointer;
        }

        @media only screen and (max-width: 600px) {
        .dots {
            position: fixed;
            top: 65%;
            left: 12rem;
            cursor: pointer;
        }
        }



        .dot {
            width: 0.75rem;
            height: 0.75rem;
            border-radius: 50%;
            border: 2px solid #fff;
            opacity: 0.5;
            background-color: transparent;
            transition: background-color 0.3s ease;
        }

        .dot.active {
            background-color: #fff;
        }
        </style>
    </head>

    <body class="bg-talent-green">
        @include('components.navbar.index')
        <div class="w-full h-64 bg-talent-white rounded-b-3xl">
            <div class="flex">
                <!-- Logo -->
                <div class=" mt-3">
                    <div class="flex justify-between w-screen">
                        <svg id="Laag_1" xmlns="http://www.w3.org/2000/svg"
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
            <div class="mt-12 flex justify-center text-2xl text-talent-green font-bold mb-12">
                Welkom {{ Auth::user()->name }}
            </div>
            <div class="flex justify-center">
                <a href="{{ route('dashboard.manageProfile.index') }}">
                    <div class="flex justify-between w-28 h-8 bg-talent-orange rounded-full">
                        <div class="flex h-full ml-2 items-center text-talent-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div
                            class="flex mr-7 text-center h-full items-center text-xs select-none text-talent-white font-bold">
                            Profiel
                        </div>
                    </div>
                </a>
            </div>


        </div>
        <?php
            $count = 0;
        ?>
        @if(!empty($items))
        @foreach ($items as $item)
        @if ($item->isImportant == 1)
            <?php
                $count += 1;
            ?>
        @endif
        @endforeach
        @endif
        @if (!Auth::user()->employer)
            @if (count(Auth::user()->employee->answers) == 0)
            <?php
                $count += 1;
            ?>
            @endif
        @endif
        <div class="flex justify-center text-talent-white text-2xl font-bold mt-2">
            <div class="w-min flex relative">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mt-0.5 mr-1 w-7 h-7">
                    <path fill-rule="evenodd"
                        d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 003 3h15a3 3 0 01-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125zM12 9.75a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H12zm-.75-2.25a.75.75 0 01.75-.75h1.5a.75.75 0 010 1.5H12a.75.75 0 01-.75-.75zM6 12.75a.75.75 0 000 1.5h7.5a.75.75 0 000-1.5H6zm-.75 3.75a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5H6a.75.75 0 01-.75-.75zM6 6.75a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 00.75-.75v-3A.75.75 0 009 6.75H6z"
                        clip-rule="evenodd" />
                    <path d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 01-3 0V6.75z" />
                </svg>
                @if (!$count == 0)
                <div class="notifier-pos">
                    <div class="notifier">
                        {{$count}}
                    </div>
                </div>
                @endif
                Nieuws
            </div>
        </div>

        <!-- *News Slider -->
        <div class="dots"></div>

        <div class="slider snap-x snap-mandatory w-full flex overflow-scroll scrollbar-hide test" id="slider">
            @if (!Auth::user()->employer)
                @if (count(Auth::user()->employee->answers) == 0)
                    <!-- *Vragenlijst MSG -->
                    <div class="snap-start w-full pl-10 pr-10 flex items-center justify-center flex-shrink-0">
                        <a href="/dashboard/survey" class="w-80 bg-talent-white rounded-xl p-5">
                            <div class="flex justify-between">
                                <div class="flex flex-col">
                                    <div class="font-bold text-talent-green text-xl">Vragenlijst</div>
                                    <div class="opacity-30 text-sm italic">belangrijk!</div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-8 h-8 text-talent-red">
                                    <path fill-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="mt-5">Om specifiekere matches te kunnen genereren, vul de vragenlijst dan in
                                op de profiel pagina.</div>
                        </a>
                    </div>
                @endif
            @endif
            @if (!count($items) == 0)
                @foreach ($items as $item)
                    <!-- TODO: Moet nog in een if state -->
                    <div class="snap-start w-full pl-10 pr-10 flex items-center justify-center flex-shrink-0 ">
                        <div href="/dashboard/survey" class="w-80 bg-talent-white rounded-xl p-5">
                            <div class="flex justify-between">
                                <div class="flex flex-col">
                                    <div class="font-bold text-talent-green text-xl">{{ $item->title }}</div>
                                    <div class="opacity-30 text-sm italic">
                                        @if ($item->isImportant == 1)
                                            <?php
                                                $count += 1;
                                            ?>
                                            Belangrijk
                                        @else
                                            <br />
                                        @endif
                                    </div>
                                </div>
                                @if ($item->isImportant == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-8 h-8 text-talent-red">
                                        <path fill-rule="evenodd"
                                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                @endif
                            </div>
                            <div class="mt-5">{{ $item->description }}</div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <!-- *Matches -->
        <div class="flex justify-center mt-5">
            <div class="text-talent-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class=" mt-0.5 mr-0.5 w-7 h-7">
                    <path fill-rule="evenodd"
                        d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                        clip-rule="evenodd" />
                </svg>
            </div>

            <div class="text-talent-white font-bold ml-1 text-2xl">Matches</div>
        </div>

        <!-- slider voor matches -->
        <div class="snap-x snap-mandatory w-full flex overflow-scroll mt-6 mb-6 scrollbar-hide">
            <?php
            $matches = 0;
            ?>
            @if (Auth::user()->employee)
                @if (count(Auth::user()->employee->answers) > 1)
                    @foreach ($joboffers as $joboffer)
                        <?php
                        $matches += 1;
                        ?>
                        <div class="snap-start w-full pl-10 pr-10 flex items-center justify-center flex-shrink-0">
                            <div class="w-80 bg-talent-white rounded-xl p-5">
                                <div class="flex">
                                    <div class="flex flex-col">
                                        <div class="font-bold text-talent-green text-xl">Match {{ $matches }}
                                        </div>
                                        <div class="opacity-30 text-sm italic"> Match 2 dagen geleden</div>
                                    </div>
                                    <div class=" ml-20">
                                        <img class="h-15 w-15 rounded-full object-cover"
                                            src="{{ $joboffer->employer->user->getProfilePhotoUrlAttribute() }}"
                                            width="50px" height="5  0px ">
                                    </div>
                                </div>
                                <div class=" grid grid-cols-2 mt-5">
                                    <div class=" font-bold">Functie:</div>
                                    <div class="">{{ $joboffer->function }}</div>
                                    <div class=" font-bold">Bedrijf:</div>
                                    <div class="">{{ $joboffer->employer->companyName }}</div>
                                    <div class=" font-bold">Status:</div>
                                    <div class="">Lopend</div>
                                </div>
                                <div class=" overflow-y-auto h-32 mt-5">
                                    {{ $joboffer->description }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            @else
                    @foreach ($firstEmployerofJoboffers as $employee)
                    <?php
                    $matches += 1;
                    ?>
                        <div class="snap-start w-full pl-10 pr-10 flex items-center justify-center flex-shrink-0">
                            <div class="w-80 bg-talent-white rounded-xl p-5">
                                <div class="flex">
                                    <div class="flex flex-col">
                                        <div class="font-bold text-talent-green text-xl">Match {{ $matches }}
                                        </div>
                                        <div class="opacity-30 text-sm italic"> Match 2 dagen geleden</div>
                                    </div>
                                    <div class=" ml-20">
                                        <img class="h-15 w-15 rounded-full object-cover"
                                             src="{{ $employee->user->getProfilePhotoUrlAttribute() }}"
                                             width="50px" height="5  0px ">
                                    </div>
                                </div>
                                <div class=" grid grid-cols-2 mt-5">
                                    <div class=" font-bold">Sector:</div>
                                    <div class="">{{ $employee->jobCategorie->categoryName }}</div>
                                    <div class=" font-bold">Naam:</div>
                                    <div class="">{{ $employee->user->name }}</div>
                                    <div class=" font-bold">Status:</div>
                                    <div class="">Lopend</div>
                                </div>
                                <div class=" overflow-y-auto h-32 mt-5">
                                    {{ $employee->user->description }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

        </div>

        <script>
            const slider = document.querySelector("#slider");
            const dotsContainer = document.querySelector(".dots");
            const cards = document.querySelectorAll(".slider > div");

            const numItems = cards.length;

            for (let i = 0; i < numItems; i++) {
                const dot = document.createElement("div");
                dot.classList.add("dot");
                dotsContainer.appendChild(dot);
                dot.addEventListener("click", () => {
                    slider.scroll({
                        left: i * slider.offsetWidth,
                        behavior: "smooth"
                    });
                });
            }

            const dots = document.querySelectorAll(".dot");
            dots[0].classList.add("active");

            slider.addEventListener("scroll", () => {
                const index = Math.round(slider.scrollLeft / slider.offsetWidth);

                dots.forEach(dot => dot.classList.remove("active"));

                dots[index].classList.add("active");
            });
        </script>
    </body>

    </html>
