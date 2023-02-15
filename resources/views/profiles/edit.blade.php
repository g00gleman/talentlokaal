<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>
        @vite('resources/css/app.css')
        <script
            src="https://kit.fontawesome.com/8e80fea8d7.js"
            crossorigin="anonymous"
        ></script>
        <link href="/profiles/style.css" type="text/css" rel="stylesheet" />
    </head>

    <body class="bg-talent-green">
        @include('components.navbar.index')
        <div class="w-full h-64 bg-talent-white rounded-b-3xl" id="top">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-1 mt-3 ml-5">
                    <?xml version="1.0" encoding="UTF-8"?><svg
                        id="Laag_1"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 559.14 263.07"
                        class="w-36"
                    >
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
                        <path
                            class="cls-2"
                            d="M138.41,62.85l-13.61-.02c-1.4,0-2.63,.91-3.04,2.24l-16.99,55.32c-.63,2.04,.9,4.11,3.03,4.11h7.75c1.43,.01,2.68-.94,3.07-2.31l3.12-11.17c.38-1.38,1.64-2.33,3.07-2.32l12.89,.02c1.4,0,2.64,.92,3.04,2.27l3.38,11.31c.4,1.34,1.64,2.27,3.04,2.27h8.34c2.14,.02,3.67-2.06,3.04-4.1l-17.08-55.36c-.41-1.33-1.64-2.24-3.03-2.24Zm-12.49,31.42l2.58-9.74c.83-3.13,5.26-3.16,6.13-.04l2.74,9.75c.57,2.03-.96,4.04-3.06,4.04h-5.32c-2.08-.01-3.6-1.99-3.07-4Z"
                        />
                        <path
                            class="cls-2"
                            d="M426.47,135.34h-13.61c-1.4,0-2.63,.91-3.04,2.25l-16.91,55.34c-.62,2.04,.9,4.11,3.04,4.11h7.75c1.43,0,2.68-.95,3.06-2.33l3.1-11.18c.38-1.38,1.63-2.33,3.06-2.33h12.89c1.4,0,2.64,.92,3.04,2.26l3.4,11.31c.4,1.34,1.64,2.26,3.04,2.26h8.34c2.14,0,3.67-2.07,3.03-4.12l-17.16-55.34c-.41-1.33-1.64-2.24-3.03-2.24Zm-12.44,31.44l2.57-9.74c.82-3.13,5.25-3.17,6.13-.05l2.75,9.74c.57,2.03-.95,4.04-3.06,4.04h-5.32c-2.08,0-3.6-1.97-3.07-3.99Z"
                        />
                        <path
                            class="cls-2"
                            d="M364.74,135.34h-13.61c-1.4,0-2.63,.91-3.04,2.25l-16.91,55.34c-.62,2.04,.9,4.11,3.04,4.11h7.75c1.43,0,2.68-.95,3.06-2.33l3.1-11.18c.38-1.38,1.63-2.33,3.06-2.33h12.89c1.4,0,2.64,.92,3.04,2.26l3.4,11.31c.4,1.34,1.64,2.26,3.04,2.26h8.34c2.14,0,3.67-2.07,3.03-4.12l-17.16-55.34c-.41-1.33-1.64-2.24-3.03-2.24Zm-12.44,31.44l2.57-9.74c.82-3.13,5.25-3.17,6.13-.05l2.75,9.74c.57,2.03-.95,4.04-3.06,4.04h-5.32c-2.08,0-3.6-1.97-3.07-3.99Z"
                        />
                        <path
                            class="cls-2"
                            d="M73.15,74.57h-10.21c-1.75,0-3.18-1.42-3.18-3.18v-5.36c0-1.75,1.42-3.18,3.18-3.18h41.06c1.75,0,3.18,1.42,3.18,3.18v5.36c0,1.75-1.42,3.18-3.18,3.18h-10.49c-1.75,0-3.18,1.42-3.18,3.18v43.62c0,1.75-1.42,3.18-3.18,3.18h-7.65c-1.75,0-3.18-1.42-3.18-3.18v-43.62c0-1.75-1.42-3.18-3.18-3.18Z"
                        />
                        <path
                            class="cls-2"
                            d="M233.12,98.46h-16.35c-1.75,0-3.18,1.42-3.18,3.18v8.29c0,1.75,1.42,3.18,3.18,3.18h19c1.75,0,3.18,1.42,3.18,3.18v5.09c0,1.75-1.42,3.18-3.18,3.18h-33c-1.75,0-3.18-1.42-3.18-3.18v-55.34c0-1.75,1.42-3.18,3.18-3.18h31.72c1.75,0,3.18,1.42,3.18,3.18v5.09c0,1.75-1.42,3.18-3.18,3.18h-17.72c-1.75,0-3.18,1.42-3.18,3.18v6.46c0,1.75,1.42,3.18,3.18,3.18h16.35c1.75,0,3.18,1.42,3.18,3.18v5c0,1.75-1.42,3.18-3.18,3.18Z"
                        />
                        <path
                            class="cls-2"
                            d="M248.48,121.37v-55.34c0-1.75,1.42-3.18,3.18-3.18h11.26c1.14,0,2.2,.62,2.76,1.61l11.9,21c3.66,6.5,7.32,14.19,10.07,21.15h.27c-.92-8.15-1.19-16.48-1.19-25.72v-14.86c0-1.75,1.42-3.18,3.18-3.18h6.46c1.75,0,3.18,1.42,3.18,3.18v55.34c0,1.75-1.42,3.18-3.18,3.18h-9.59c-1.16,0-2.22-.63-2.78-1.64l-12.27-22.16c-3.66-6.59-7.69-14.55-10.71-21.79l-.27,.09c.37,8.15,.55,16.84,.55,26.91v15.4c0,1.75-1.42,3.18-3.18,3.18h-6.46c-1.75,0-3.18-1.42-3.18-3.18Z"
                        />
                        <path
                            class="cls-2"
                            d="M320.36,74.57h-10.21c-1.75,0-3.18-1.42-3.18-3.18v-5.36c0-1.75,1.42-3.18,3.18-3.18h41.06c1.75,0,3.18,1.42,3.18,3.18v5.36c0,1.75-1.42,3.18-3.18,3.18h-10.49c-1.75,0-3.18,1.42-3.18,3.18v43.62c0,1.75-1.42,3.18-3.18,3.18h-7.65c-1.75,0-3.18-1.42-3.18-3.18v-43.62c0-1.75-1.42-3.18-3.18-3.18Z"
                        />
                        <path
                            class="cls-2"
                            d="M171.23,62.85h7.65c1.75,0,3.18,1.42,3.18,3.18v116.11c0,1.75,1.42,3.18,3.18,3.18h18.18c1.75,0,3.18,1.42,3.18,3.18v5.36c0,1.75-1.42,3.18-3.18,3.18h-32.18c-1.75,0-3.18-1.42-3.18-3.18V66.03c0-1.75,1.42-3.18,3.18-3.18Z"
                        />
                        <path
                            class="cls-2"
                            d="M280.17,135.34h7.47c1.75,0,3.18,1.42,3.18,3.18v24.1h.27c1.37-2.38,2.84-4.58,4.21-6.77l13.06-19.12c.59-.87,1.57-1.39,2.62-1.39h8.95c2.64,0,4.13,3.04,2.51,5.13l-15.09,19.42c-.81,1.04-.89,2.47-.21,3.6l17.44,28.73c1.29,2.12-.24,4.83-2.72,4.83h-8.8c-1.14,0-2.2-.62-2.76-1.61l-11.9-20.99c-1.1-1.94-3.81-2.17-5.22-.44l-1.66,2.03c-.46,.57-.72,1.28-.72,2.01v15.83c0,1.75-1.42,3.18-3.18,3.18h-7.47c-1.75,0-3.18-1.42-3.18-3.18v-55.34c0-1.75,1.42-3.18,3.18-3.18Z"
                        />
                        <path
                            class="cls-2"
                            d="M457.67,135.34h7.65c1.75,0,3.18,1.42,3.18,3.18v43.62c0,1.75,1.42,3.18,3.18,3.18h18.18c1.75,0,3.18,1.42,3.18,3.18v5.36c0,1.75-1.42,3.18-3.18,3.18h-32.18c-1.75,0-3.18-1.42-3.18-3.18v-55.34c0-1.75,1.42-3.18,3.18-3.18Z"
                        />
                        <g>
                            <circle
                                class="cls-1"
                                cx="238.98"
                                cy="167.09"
                                r="10.27"
                            />
                            <path
                                class="cls-1"
                                d="M270.42,165.8c-.52-16.08-13.43-29.41-29.48-30.4-.66-.04-1.31-.06-1.96-.06h-.05c-.65,0-1.3,.02-1.96,.06-16.05,1-28.96,14.33-29.48,30.4-.29,9.11,3.28,17.4,9.21,23.33l14.27,14.25h0l7.96,8,.03-.03,.03,.03,4.6-4.62c1.79-1.8,1.8-4.71,.02-6.52l-7.8-7.91-7.81-7.74c-2.19-2.17-4.18-4.52-5.88-7.08-2.67-4.01-3.71-6.94-3.42-12.27,.4-7.46,4.92-14.19,11.84-17.02,2.87-1.17,5.72-1.71,8.44-1.71,2.72,0,5.57,.54,8.44,1.71,6.92,2.82,11.44,9.56,11.84,17.02,.29,5.34-.76,8.27-3.42,12.27-1.7,2.56-3.7,4.92-5.88,7.08l-2.57,2.55c-1.65,1.64-1.67,4.3-.04,5.96l1.9,1.94c1.66,1.69,4.38,1.71,6.06,.03l5.94-5.93c5.93-5.93,9.51-14.21,9.21-23.33Z"
                            />
                        </g>
                    </svg>
                </div>
            </div>
            <div
                class="mt-8 flex justify-center text-2xl text-talent-green font-bold"
            >
                Profiel wijzigen
            </div>
        </div>

        <!-- <style>
            .accordion-center {
                display: flex;
                justify-content: center;
                margin-top: 50px;
            }

            .accordion {
                margin-left: 20px;
                margin-right: 20px;
                padding: 20px;
                border-radius: 12px;
                width: 100%;
                background-color: #bcd7d2;
            }

            .dropdown-panel {
                margin-top: 10px;
                margin-left: 20px;
                margin-right: 20px;
                padding: 20px;
                border-radius: 12px;
                background-color: #bcd7d2;
                display: none;
            }

            .panel-content {
                display: flex;
                justify-content: center;
            }

            .center-content {
                display: flex;
                justify-content: center;
                flex-direction: column;
                gap: 10px;
            }

            .inputText {
                border: none;
                border-radius: 2px;
            }

            .inputTextarea {
                border: none;
                border-radius: 2px;
                min-height: 100px;
            }

            .inputButton {
                background-color: #ef840c;
                height: 35px;
                border-radius: 4px;
                font-weight: bold;
                color: white;
                cursor: pointer;
            }

            .icon {
                display: flex;
                justify-content: end;
            }

            .data {
                display: grid;
                gap: 5px;
                column-gap: 10px;
                grid-template-columns: 1fr 2fr 2fr;
            }

            .data_item_left {
                display: flex;
                justify-content: start;
            }
            .data_item_right {
                display: flex;
                justify-content: end;
            }

            .personalData {
                font-weight: bold;
                color: #1f796a;
                font-size: 22px;
            }
        </style> -->

        <!-- <div class="item">
            <div class="accordion-center">
                <button class="accordion" onclick="openProfile()">
                    <div class="profile-picture">
                        <div class="flex justify-center">
                            <img
                                class="h-20 w-20 rounded-full object-cover"
                                src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}"
                            />
                        </div>
                    </div>
                    <div class="profile-username">
                        <div
                            class="flex justify-center mt-2 text-talent-orange font-bold text-3xl"
                        >
                            {{ $user->name }}
                        </div>
                    </div>
                    <div class="profile-content">
                        <div class="mt-2 text-talent-green">
                            @if (!($user->description == ''))
                            <p>
                                Geef extra info over u en voeg een beschrijving
                                toe
                            </p>
                            <form
                                action="/dashboard/description/{{ $user->id }}"
                                method="post"
                            >
                                @csrf @method('put')
                                <textarea
                                    name="description"
                                    id=""
                                    cols="30"
                                    rows="10"
                                    >{{ $user->description }}</textarea
                                >
                                <button type="submit">Opslaan</button>
                            </form>
                            @else
                            <p class="text-center">
                                Voeg eerst een beschrijving toe op de profile
                                pagina
                            </p>
                            @endif
                        </div>
                    </div>
                    <div class="icon">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 15"
                            stroke-width="3"
                            stroke="currentColor"
                            class="w-8 h-8 text-talent-green"
                            id="profileIcon"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                            />
                        </svg>
                    </div>
                </button>
            </div>
            <div class="dropdown-panel" id="profileBlock">
                <div class="panel-content">
                    <form action="" class="center-content">
                        <input
                            type="text"
                            class="inputText"
                            placeholder="Gebruikersnaam"
                        />
                        <textarea
                            name=""
                            id=""
                            class="inputTextarea"
                            placeholder="Beschrijving"
                        ></textarea>
                        <input
                            type="submit"
                            value="Opslaan"
                            class="inputButton"
                        />
                    </form>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="accordion-center">
                <button class="accordion" onclick="openPersonal()">
                    <div class="personalData">Persoonsgegevens</div>
                    <div class="data">
                        <div class="user_icon data_item_right">*</div>
                        <div class="user data_item_left">Username</div>
                        <div class="user_data data_item_left">Admin</div>
                        <div class="location_icon data_item_right">*</div>
                        <div class="location data_item_left">Location</div>
                        <div class="location_data data_item_left">RSD</div>
                        <div class="job_icon data_item_right">*</div>
                        <div class="job data_item_left">Job</div>
                        <div class="job_data data_item_left">Developer</div>
                        <div class="certificate_icon data_item_right">*</div>
                        <div class="certificate data_item_left">
                            Certificate
                        </div>
                        <div class="certificate_data data_item_left">MBO 4</div>
                    </div>
                    <div class="icon">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 15"
                            stroke-width="3"
                            stroke="currentColor"
                            class="w-8 h-8 text-talent-green"
                            id="profileIcon"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                            />
                        </svg>
                    </div>
                </button>
            </div>
            <div class="dropdown-panel" id="personalBlock">
                <div class="panel-content">
                    <form action="" class="center-content">
                        <input
                            type="text"
                            class="inputText"
                            placeholder="Gebruikersnaam"
                        />
                        <textarea
                            name=""
                            id=""
                            class="inputTextarea"
                            placeholder="Beschrijving"
                        ></textarea>
                        <input
                            type="submit"
                            value="Opslaan"
                            class="inputButton"
                        />
                    </form>
                </div>
            </div>
        </div> -->
        <script>
            // var profile = document.getElementById("profileBlock");
            // var personal = document.getElementById("personalBlock");

            // // var profileIcon = document.getElementById("profileIcon");

            // profile.style.display = "none";
            // personal.style.display = "none";

            // function openProfile() {
            //     if (profile.style.display == "none") {
            //         profile.style.display = "block";
            //         // profileIcon.style.transform = "rotate(180deg)";
            //     } else if (profile.style.display == "block") {
            //         profile.style.display = "none";
            //         // profileIcon.style.transform = "rotate(-180deg)";
            //     }
            // }

            // function openPersonal() {
            //     if (personal.style.display == "none") {
            //         personal.style.display = "block";
            //         // profileIcon.style.transform = "rotate(180deg)";
            //     } else if (personal.style.display == "block") {
            //         personal.style.display = "none";
            //         // profileIcon.style.transform = "rotate(-180deg)";
            //     }
            // }
        </script>

        <div class="flex justify-center mt-24">
            <div class="customCard">
                <div class="flex justify-center">
                    <img
                        class="h-20 w-20 rounded-full object-cover"
                        src="{{ Auth::user()->profile_photo_url }}"
                        alt="{{ Auth::user()->name }}"
                    />
                </div>
                <div
                    class="flex justify-center mt-2 text-talent-orange font-bold text-3xl"
                >
                    {{ $user->name }}
                </div>
                <div class="mt-2 text-talent-green">
                    @if (!($user->description == ''))
                    <p>Geef extra info over u en voeg een beschrijving toe</p>
                    <form
                        action="/dashboard/description/{{ $user->id }}"
                        method="post"
                    >
                        @csrf @method('put')
                        <textarea
                            name="description"
                            id=""
                            class="w-full border-none rounded-md mt-2 mb-2 focus:ring-talent-orange shadow-md"
                            >{{ $user->description }}</textarea
                        >
                        <div class="flex justify-end">
                            <button
                                type="submit"
                                class="bg-talent-orange shadow-md pl-5 pr-5 pt-1 pb-1 text-talent-white font-bold rounded-full"
                            >
                                Opslaan
                            </button>
                        </div>
                    </form>
                    @else
                    <p class="text-center">
                        Voeg eerst een beschrijving toe op de profile pagina
                    </p>
                    @endif
                </div>
            </div>
        </div>

        <!-- @include('components.scrollTop.index') -->

        <div class="flex mt-12 justify-center">
            <div class="customCard">
                <div
                    class="flex justify-center text-xl font-bold text-talent-green"
                >
                    Kennismaking pitch
                </div>
                <div class="mt-2 flex justify-center">
                    @if (!($user->pitch == ''))
                    <p>Maak uw profiel persoonlijker en voeg een pitch toe</p>
                    <form
                        action="/dashboard/pitch/{{ $user->id }}"
                        method="post"
                        enctype="multipart/form-data"
                    >
                        @csrf @method('put')
                        <input type="file" name="pitch" id="" />
                        <button type="submit">Upload</button>
                    </form>
                    @else
                    <p>Voeg eerst een pitch toe op de profile pagina</p>
                    @endif
                </div>
            </div>
        </div>

        <!-- @include('components.scrollTop.index') -->

        <form
            action="{{ route('dashboard.manageProfile.update', $user->id) }}"
            method="post"
            class="mt-12"
        >
            @csrf @method('put')

            <div class="flex justify-center mb-10">
                <div class="customCard">
                    <div
                        class="flex justify-center text-xl font-bold text-talent-green"
                    >
                        Persoongegevens
                    </div>
                    <div class="flex justify-center mt-8">
                        <div class="grid grid-cols-5 gap-2">
                            <!-- Name -->
                            <div class="col-span-1 mx-auto my-auto">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div
                                class="col-span-4 text-xs flex items-center font-bold text-talent-orange"
                            >
                                <input
                                    name="name"
                                    type="text"
                                    class="w-full shadow-md focus:ring-talent-orange border-none rounded-md"
                                    value="{{ $user->name }}"
                                />
                            </div>

                            <!-- adres -->
                            <div class="col-span-1 mx-auto my-auto">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div
                                class="col-span-4 text-xs flex items-center font-bold text-talent-orange"
                            >
                                <input
                                    name="city"
                                    type="text"
                                    class="w-full shadow-md focus:ring-talent-orange border-none rounded-md"
                                    value="{{ $user->adress }}"
                                />
                            </div>

                            <!-- job -->
                            <div class="col-span-1 mx-auto my-auto">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                            <div
                                class="col-span-4 text-xs flex items-center font-bold text-talent-orange"
                            >
                                <input
                                    name="employeeFunction"
                                    type="text"
                                    class="w-full shadow-md focus:ring-talent-orange border-none rounded-md"
                                    value="{{ $user->employee->function }}"
                                />
                            </div>

                            <!-- job-2? -->
                            <div class="col-span-1 mx-auto my-auto">
                                <i class="fa-solid fa-clipboard-list"></i>
                            </div>

                            <div
                                class="col-span-4 text-xs flex items-center font-bold text-talent-orange"
                            >
                                <input
                                    name="employeeCertificate"
                                    type="text"
                                    class="w-full shadow-md focus:ring-talent-orange border-none rounded-md"
                                    value="{{ $user->employee->certificate }}"
                                />
                            </div>

                            <div
                                class="col-span-5 flex justify-end text-center"
                            >
                                <button
                                    class="bg-talent-orange shadow-md pl-5 pr-5 pt-1 pb-1 text-talent-white font-bold rounded-full"
                                    type="submit"
                                >
                                    Opslaan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @include('components.scrollTop.index')
    </body>
</html>
