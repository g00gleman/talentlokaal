<style>
    .navbar {
        width: 200px;
        height: 100vh;
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .logo-sec {
    }

    .navbar-links-center {
        margin-top: 75px;
        display: flex;
        justify-content: end;
    }

    .navbar-links {
        width: 90%;
    }

    .link {
        display: flex;
        justify-content: center;
        border-top-left-radius: 666px;
        border-bottom-left-radius: 666px;
        padding-top: 7.5px;
        padding-bottom: 7.5px;
        margin-bottom: 15px;
        font-weight: bold;
        font-size: large;
        color: #1f796a;

        background-color: #bcd7d2;
    }

    .logo-1 {
        display: flex;
        justify-content: center;
        background-color: #bcd7d2;
        height: 100px;
        width: 100%;
    }

    .link-last {
        margin-top: 200px;
    }

    .closeBtn {
        height: 0;
    }

    @media only screen and (max-width: 450px) {
        .navbar {
            width: 100vw;
            height: 100vh;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .logo {
            width: 250px;
        }

        .navbar-links-center {
            margin-top: 75px;
            display: flex;
            justify-content: center;
        }

        .navbar-links {
            width: 80%;
        }

        .link {
            display: flex;
            justify-content: center;
            border-radius: 666px;
            padding-top: 7.5px;
            padding-bottom: 7.5px;
            margin-bottom: 15px;
            font-weight: bold;
            font-size: large;
            color: #1f796a;
            background-color: #bcd7d2;
        }

        .link:hover {
            scale: 1.05;
            background-color: #8fccc1;
            transition-timing-function: ease-in;
            transition: 0.3s;
            /* transform: translateX(4%); */
        }

        .link-last {
            margin-top: 150px;
        }

        .closeBtn {
            position: absolute;
            right: 0;
            width: 50px;
            height: 50px;
            border-radius: 666px;
            margin-top: 10px;
            margin-right: 10px;
            background-color: #8fccc1;
        }

        .closeBtnC {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .iconCloseBtn {
            height: 35px;
            width: 35px;
            color: #1f796a;
        }

        .openBtn {
            position: absolute;
            right: 0;
            width: 50px;
            height: 50px;
            border-radius: 666px;
            margin-top: 10px;
            margin-right: 10px;
            background-color: #8fccc1;
        }

        .openBtnC {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .iconOpenBtn {
            height: 35px;
            width: 35px;
            color: #1f796a;
        }
    }
    @media only screen and (min-width: 450px) {
        .link:hover {
            /* scale: 1.05; */
            background-color: #8fccc1;
            transition-timing-function: ease-in;
            transition: 0.3s;
            transform: translateX(4%);
        }
    }
</style>

<button class="openBtn" onclick="openMobileMenu()">
    <div class="openBtnC">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="2.5"
            stroke="currentColor"
            class="iconOpenBtn"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
            />
        </svg>
    </div>
</button>
<div class="navbar" id="navbar">
    <div class="logo-sec">
        <div class="logo-1">
            <button class="closeBtn" onclick="closeMobileMenu()">
                <div class="closeBtnC">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2.5"
                        stroke="currentColor"
                        class="iconCloseBtn"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </div>
            </button>

            <?xml version="1.0" encoding="UTF-8"?><svg
                id="Laag_1"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 559.14 263.07"
                class="logo"
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
                    <circle class="cls-1" cx="238.98" cy="167.09" r="10.27" />
                    <path
                        class="cls-1"
                        d="M270.42,165.8c-.52-16.08-13.43-29.41-29.48-30.4-.66-.04-1.31-.06-1.96-.06h-.05c-.65,0-1.3,.02-1.96,.06-16.05,1-28.96,14.33-29.48,30.4-.29,9.11,3.28,17.4,9.21,23.33l14.27,14.25h0l7.96,8,.03-.03,.03,.03,4.6-4.62c1.79-1.8,1.8-4.71,.02-6.52l-7.8-7.91-7.81-7.74c-2.19-2.17-4.18-4.52-5.88-7.08-2.67-4.01-3.71-6.94-3.42-12.27,.4-7.46,4.92-14.19,11.84-17.02,2.87-1.17,5.72-1.71,8.44-1.71,2.72,0,5.57,.54,8.44,1.71,6.92,2.82,11.44,9.56,11.84,17.02,.29,5.34-.76,8.27-3.42,12.27-1.7,2.56-3.7,4.92-5.88,7.08l-2.57,2.55c-1.65,1.64-1.67,4.3-.04,5.96l1.9,1.94c1.66,1.69,4.38,1.71,6.06,.03l5.94-5.93c5.93-5.93,9.51-14.21,9.21-23.33Z"
                    />
                </g>
            </svg>
        </div>
        <svg
            id="visual"
            viewBox="0 0 500 100"
            width="100%"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            version="1.1"
        >
            <path
                d="M0 73L27.8 67.7C55.7 62.3 111.3 51.7 166.8 49.2C222.3 46.7 277.7 52.3 333.2 56.2C388.7 60 444.3 62 472.2 63L500 64L500 0L472.2 0C444.3 0 388.7 0 333.2 0C277.7 0 222.3 0 166.8 0C111.3 0 55.7 0 27.8 0L0 0Z"
                fill="#BCD7D2"
                stroke-linecap="round"
                stroke-linejoin="miter"
            ></path>
        </svg>
    </div>
    <div class="navbar-links-center">
        <div class="navbar-links">
            <a href="/dashboard/admin-portal" class="link">Dashboard</a>
            <a href="/dashboard/admin-portal/bedrijven" class="link"
                >Bedrijven</a
            >
            <a href="/dashboard/admin-portal/werkzoekende" class="link"
                >Werkzoekende</a
            >
            <a href="/dashboard/admin-portal/vacatures" class="link"
                >Vacatures</a
            >
            <a href="#" class="link link-last">Log uit</a>
        </div>
    </div>
</div>

<script>
    function closeMobileMenu() {
        document.getElementById("navbar").style.display = "none";
    }
    function openMobileMenu() {
        document.getElementById("navbar").style.display = "block";
    }
</script>
