<link rel="stylesheet" href="/navbar/style.css" />

<style>
    .menuIcon {
        width: 50px;
        height: 50px;
        padding: 10px;
        background-color: #bcd7d2;
        color: #1e796a;
        border-radius: 100px;
        top: 0;
        right: 0;
        position: absolute;
        margin-right: 15px;
        margin-top: 15px;
    }

    .menu {
        width: 100vw;
        height: 100vh;
        position: absolute;
        top: 0;
        display: none;
    }

    .menu-content {
        display: flex;
    }

    .menu-content-overlay {
        height: 100vh;
        width: 100vw;
        background-color: black;
        opacity: 0.5;
        z-index: 2;
    }

    .menu-content-nav {
        position: absolute;
        top: 0;
        right: 0;
        height: 100vh;
        width: 60vw;
        background-color: white;
        border-bottom-left-radius: 16px;
        border-top-left-radius: 16px;
        z-index: 3;
    }

    .nav-top {
        height: 15vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #bcd7d2;
        font-size: 48px;
        font-weight: bold;
        color: white;
        border-bottom-left-radius: 16px;
        border-top-left-radius: 16px;
        margin-bottom: 10px;
    }

    .nav-content {
        display: flex;
        flex-direction: column;
    }

    .nav-content-end {
        display: flex;
        align-items: end;
    }

    .nav-content-btn {
        width: 60vw;
        height: 10vh;
        /* background-color: #bcd7d2; */
        color: #1e796a;
        font-weight: bold;
        font-size: 24px;
        border-bottom: solid 1px black;
        display: grid;
        grid-template-columns: 1fr 2fr;
        padding-left: 40px;
    }

    .active {
        color: #ef840c;
    }

    .modal {
        width: 100vw;
        height: 100vh;
        position: absolute;
        top: 0;
        display: none;
    }

    .modal-content {
        display: flex;
        flex-direction: column;
    }

    .modal-content-overlay {
        height: 100vh;
        background-color: black;
        opacity: 0.5;
        z-index: 1;
    }

    .modal-content-box {
        height: 25vh;
        width: 80vw;
        background-color: white;
        z-index: 2;
        position: absolute;
        top: 32.5vh;
        left: 10vw;
        border-radius: 16px;
    }

    .box-top {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 12.5vh;
        color: #1e796a;
        font-weight: bold;
    }
    .box-content {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        height: 7.5vh;
    }
    .box-content-btn {
        background-color: #ef840c;
        padding-left: 40px;
        padding-right: 40px;
        padding-top: 3px;
        padding-bottom: 3px;
        border-radius: 100px;
        color: white;
    }
</style>

<svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="menuIcon"
    onclick="openMenu(); check();"
>
    <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
    />
</svg>

<div class="menu" id="menu">
    <div class="menu-content">
        <div class="menu-content-overlay" onclick="closeMenu()"></div>
        <div class="menu-content-nav">
            <div class="nav-top">Menu</div>
            <div class="nav-content">
                <a href="/dashboard" class="nav-content-btn" id="home">
                    <div class="nav-content-end">
                        <svg
                            version="1.0"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 mb-2 mr-4"
                            viewBox="0 0 50.000000 50.000000"
                            preserveAspectRatio="xMidYMid meet"
                        >
                            <g
                                transform="translate(0.000000,50.000000) scale(0.100000,-0.100000)"
                                fill="#000000"
                                stroke="none"
                            >
                                <path
                                    d="M130 399 c-109 -85 -144 -120 -106 -106 14 6 16 -8 16 -128 l0 -135
                       210 0 210 0 0 135 c0 115 2 134 15 129 29 -11 15 12 -25 42 -34 25 -40 35 -40
                       67 0 34 -2 37 -29 37 -16 0 -31 -5 -33 -11 -2 -6 -24 6 -50 25 -26 20 -48 36
                       -50 36 -2 -1 -55 -41 -118 -91z m220 -10 l90 -71 0 -134 0 -134 -60 0 -60 0 0
                       95 0 95 -70 0 -70 0 0 -95 0 -95 -60 0 -60 0 0 134 0 135 91 70 c50 39 95 71
                       100 71 5 0 50 -32 99 -71z m40 16 c0 -8 -4 -15 -10 -15 -5 0 -10 7 -10 15 0 8
                       5 15 10 15 6 0 10 -7 10 -15z m-90 -270 l0 -85 -50 0 -50 0 0 85 0 85 50 0 50
                       0 0 -85z"
                                />
                            </g>
                        </svg>
                    </div>
                    <div class="nav-content-end">Home</div>
                </a>
                <a
                    href="{{ route('dashboard.manageProfile.index') }}"
                    class="nav-content-btn"
                    id="profile"
                >
                    <div class="nav-content-end">
                        <svg
                            version="1.0"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 mb-2 mr-4"
                            viewBox="0 0 50.000000 50.000000"
                            preserveAspectRatio="xMidYMid meet"
                        >
                            <g
                                transform="translate(0.000000,50.000000) scale(0.100000,-0.100000)"
                                fill="#000000"
                                stroke="none"
                            >
                                <path
                                    d="M201 456 c-35 -19 -50 -54 -51 -113 0 -52 16 -103 32 -103 4 0 8 -13
                       8 -29 0 -26 -7 -34 -59 -61 -33 -18 -63 -42 -70 -56 -25 -55 -27 -54 189 -54
                       219 0 216 -1 185 59 -9 18 -35 38 -70 54 -62 30 -68 46 -35 99 23 38 27 122 8
                       163 -22 48 -88 68 -137 41z m104 -31 c21 -20 25 -34 25 -83 0 -44 -5 -66 -20
                       -85 -11 -14 -20 -39 -20 -56 0 -26 7 -34 62 -63 36 -19 65 -42 69 -55 l8 -23
                       -179 0 -179 0 8 23 c4 13 33 36 69 55 55 29 62 37 62 63 0 17 -9 42 -20 56
                       -15 19 -20 41 -20 85 0 49 4 63 25 83 15 16 36 25 55 25 19 0 40 -9 55 -25z"
                                />
                            </g>
                        </svg>
                    </div>
                    <div class="nav-content-end">Profiel</div>
                </a>
                <a
                    href="{{ route('dashboard.matches.index') }}"
                    class="nav-content-btn"
                    id="matches"
                >
                    <div class="nav-content-end">
                        <svg
                            version="1.0"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 mb-2 mr-4"
                            viewBox="0 0 50.000000 50.000000"
                            preserveAspectRatio="xMidYMid meet"
                        >
                            <g
                                transform="translate(0.000000,50.000000) scale(0.100000,-0.100000)"
                                fill="#000000"
                                stroke="none"
                            >
                                <path
                                    d="M93 415 c-38 -16 -62 -50 -70 -98 -12 -78 39 -158 150 -235 l77 -53
                       47 32 c93 63 132 101 158 152 28 58 31 93 11 142 -28 65 -111 92 -178 57 -37
                       -20 -39 -20 -75 -1 -44 22 -76 23 -120 4z m122 -31 l38 -25 22 21 c31 29 84
                       36 123 16 66 -34 79 -119 29 -195 -27 -41 -152 -141 -176 -141 -24 0 -157 106
                       -180 144 -46 73 -36 151 23 187 42 26 76 24 121 -7z"
                                />
                            </g>
                        </svg>
                    </div>
                    <div class="nav-content-end">Matches</div>
                </a>
                <a href="/inbox" class="nav-content-btn" id="inbox">
                    <div class="nav-content-end">
                        <svg
                            version="1.0"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-12 h-12 mb-2 mr-4"
                            viewBox="0 0 64.000000 64.000000"
                            preserveAspectRatio="xMidYMid meet"
                        >
                            <g
                                transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)"
                                fill="#000000"
                                stroke="none"
                            >
                                <path
                                    d="M310 464 l0 -85 -31 21 c-46 33 -50 13 -5 -26 22 -19 42 -34 46 -34
                       4 0 24 15 46 34 45 39 41 59 -5 26 l-31 -21 0 85 c0 51 -4 86 -10 86 -6 0 -10
                       -35 -10 -86z"
                                />
                                <path
                                    d="M148 448 c-8 -7 -31 -43 -52 -80 -31 -57 -36 -75 -36 -132 0 -136 18
                       -146 260 -146 197 0 226 6 248 55 21 47 15 146 -14 211 -34 78 -59 104 -101
                       104 -44 0 -42 -16 2 -24 29 -6 39 -15 60 -56 14 -27 25 -54 25 -60 0 -6 -25
                       -10 -58 -10 -57 0 -59 -1 -75 -35 l-17 -36 -73 3 c-71 3 -72 4 -86 36 -14 31
                       -17 32 -73 32 -32 0 -58 3 -58 8 0 4 14 30 30 59 22 39 37 53 60 58 16 4 30
                       11 30 16 0 13 -54 11 -72 -3z m57 -178 c14 -43 45 -60 111 -60 66 0 106 21
                       119 60 5 17 15 20 61 20 l54 0 0 -68 c0 -107 0 -107 -230 -107 -230 0 -230 0
                       -230 107 l0 68 54 0 c46 0 56 -3 61 -20z"
                                />
                            </g>
                        </svg>
                    </div>
                    <div class="nav-content-end">Inbox</div>
                </a>
                <a
                    href="/dashboard/support"
                    class="nav-content-btn"
                    id="support"
                >
                    <div class="nav-content-end">
                        <svg
                            version="1.0"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 mb-2 mr-4"
                            viewBox="0 0 50.000000 50.000000"
                            preserveAspectRatio="xMidYMid meet"
                        >
                            <g
                                transform="translate(0.000000,50.000000) scale(0.100000,-0.100000)"
                                fill="#000000"
                                stroke="none"
                            >
                                <path
                                    d="M175 471 c-48 -22 -69 -44 -91 -96 -9 -22 -32 -57 -50 -78 -45 -50
                       -46 -93 -3 -142 21 -24 39 -35 53 -33 19 3 21 10 24 97 2 58 -1 98 -8 106 -9
                       10 -7 23 5 50 60 126 230 126 290 -1 12 -26 14 -39 6 -47 -14 -14 -15 -194 -1
                       -202 15 -9 12 -23 -10 -45 -22 -22 -69 -27 -87 -9 -5 5 -30 9 -54 7 -39 -3
                       -44 -6 -44 -28 0 -22 5 -25 44 -28 24 -2 49 2 54 7 6 6 21 11 34 11 33 0 72
                       21 79 42 3 10 23 39 45 64 51 59 53 99 5 151 -18 21 -41 56 -50 78 -9 21 -24
                       48 -34 59 -24 27 -91 56 -132 56 -19 0 -53 -9 -75 -19z m-85 -246 c0 -50 -4
                       -85 -10 -85 -6 0 -10 35 -10 85 0 50 4 85 10 85 6 0 10 -35 10 -85z m340 0 c0
                       -50 -4 -85 -10 -85 -6 0 -10 35 -10 85 0 50 4 85 10 85 6 0 10 -35 10 -85z
                       m-380 -1 c0 -49 -2 -55 -15 -44 -18 15 -20 71 -3 88 7 7 13 12 15 12 2 0 3
                       -25 3 -56z m430 1 c0 -18 -7 -38 -15 -45 -13 -11 -15 -5 -15 45 0 50 2 56 15
                       45 8 -7 15 -27 15 -45z m-190 -175 c0 -5 -16 -10 -35 -10 -19 0 -35 5 -35 10
                       0 6 16 10 35 10 19 0 35 -4 35 -10z"
                                />
                            </g>
                        </svg>
                    </div>
                    <div class="nav-content-end">Support</div>
                </a>

                <button
                    class="nav-content-btn"
                    onclick="openModal(); closeMenu();"
                >
                    <div class="nav-content-end">
                        <svg
                            version="1.0"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 mb-2 mr-4"
                            viewBox="0 0 50.000000 50.000000"
                            preserveAspectRatio="xMidYMid meet"
                        >
                            <g
                                transform="translate(0.000000,50.000000) scale(0.100000,-0.100000)"
                                fill="#000000"
                                stroke="none"
                            >
                                <path
                                    d="M5 488 c-3 -8 -4 -119 -3 -248 l3 -235 195 0 195 0 3 53 c2 36 0 52
                       -7 47 -6 -3 -11 -24 -11 -46 l0 -39 -180 0 -180 0 0 230 0 230 180 0 180 0 0
                       -32 c0 -18 5 -40 10 -48 8 -11 10 1 8 40 l-3 55 -193 3 c-150 2 -194 0 -197
                       -10z"
                                />
                                <path
                                    d="M370 363 c0 -4 21 -29 47 -55 l47 -48 -152 0 c-95 0 -152 -4 -152
                       -10 0 -6 57 -10 152 -10 l152 0 -49 -50 c-27 -27 -46 -53 -42 -57 4 -4 36 21
                       70 55 l62 62 -60 60 c-56 56 -75 70 -75 53z"
                                />
                            </g>
                        </svg>
                    </div>
                    <div class="flex justify-start items-end">Log uit</div>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal">
    <div class="modal-content">
        <div class="modal-content-overlay" onclick="closeModal()"></div>
        <div class="modal-content-box">
            <div class="box-top">Weet u zeker dat u wilt uitloggen?</div>
            <div class="box-content">
                <a href="/dashboard/logout" class="box-content-btn"> Ja </a>
                <button class="box-content-btn" onclick="closeModal()">
                    Nee
                </button>
            </div>
        </div>
    </div>
</div>

<script src="/navbar/app.js"></script>
