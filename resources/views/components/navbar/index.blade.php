<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <script
            src="https://kit.fontawesome.com/8e80fea8d7.js"
            crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="style.css" />
        <style>
            html,
            body {
                margin: 0px;
                padding: 0px;
            }

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

            .flex {
                display: flex;
            }

            .menu {
                left: 0;
                right: 0;
                position: absolute;
                display: none;
                height: 100vh;
                width: 100vw;
                z-index: 999;
            }

            .overlay {
                height: 100vh;
                width: 30vw;
                background-color: black;
                opacity: 0.25;
            }

            .navbar {
                height: 100vh;
                width: 70vw;
                background-color: white;
            }
            .top {
                height: 15vh;
                width: 100%;
                background-color: #bcd7d2;
                display: flex;
                justify-content: center;
                align-items: center;
                font-weight: bold;
                color: white;
                font-size: 32px;
                /* border-top-left-radius: 16px; */
                border-bottom-left-radius: 16px;
            }

            .content {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .item-i {
                width: 50px;
                height: 50px;
            }

            .item-text {
                height: 75%;
                display: flex;
                justify-content: center;
                align-items: end;
                font-weight: bold;
                color: #1e796a;
            }

            .item {
                width: 100%;
                display: grid;
                grid-template-columns: 1fr 2fr;
                margin-top: 40px;
            }

            .bar {
                width: 100%;
                height: 1px;
                background-color: black;
            }
        </style>
    </head>

    <body>
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="menuIcon"
            onclick="showElement()"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
            />
        </svg>
        <div class="menu" id="menu">
            <div class="flex">
                <div class="overlay" onclick="hideElement()"></div>
                <div class="navbar">
                    <div class="top">Menu</div>
                    <div class="content">
                        <a href="/dashboard">
                            <div class="item">
                                <div class="item-i">
                                    <i class="fa-solid fa-house fa-2x"></i>
                                </div>
                                <div class="item-text">Home</div>
                            </div>
                        </a>
                        <div class="bar"></div>

                        <a href="dashboard/manageProfile">
                            <div class="item">
                                <div class="item-i">
                                    <i class="fa-solid fa-user fa-2x"></i>
                                </div>
                                <div class="item-text">Profile</div>
                            </div>
                        </a>
                        <div class="bar"></div>

                        <a href="/">
                            <div class="item">
                                <div class="item-i">
                                    <i class="fa-solid fa-heart fa-2x"></i>
                                </div>
                                <div class="item-text">Matches</div>
                            </div>
                        </a>
                        <div class="bar"></div>

                        <a href="/">
                            <div class="item">
                                <div class="item-i">
                                    <i class="fa-solid fa-inbox fa-2x"></i>
                                </div>
                                <div class="item-text">Inbox</div>
                            </div>
                        </a>
                        <div class="bar"></div>

                        <a href="/">
                            <div class="item">
                                <div class="item-i">
                                    <i class="fa-solid fa-phone fa-2x"></i>
                                </div>
                                <div class="item-text">Support</div>
                            </div>
                        </a>
                        <div class="bar"></div>

                        <a href="/dashboard/logout">
                            <div class="item">
                                <div class="item-i">
                                    <i
                                        class="fa-solid fa-right-from-bracket fa-2x"
                                    ></i>
                                </div>
                                <div class="item-text">
                                    {{ __("Log Out") }}
                                </div>
                            </div>
                        </a>
                        <div class="bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <!-- <script src="app.js"></script> -->
    <script>
        function showElement() {
            document.getElementById("menu").style.display = "block";
        }
        function hideElement() {
            document.getElementById("menu").style.display = "none";
        }
    </script>
</html>
