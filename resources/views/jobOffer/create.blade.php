
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
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
            height: 22.5vh;
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
            text-align: center;
            margin-left: 10px;
            margin-right: 10px;
            font-size: 14px;
            margin-top: 5px;
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
            font-weight: bold;
        }

        .modal-save {
            width: 100vw;
            height: 100vh;
            position: absolute;
            top: 0;
            display: none;
        }

        .modal-content-save {
            display: flex;
            flex-direction: column;
        }

        .modal-content-overlay-save {
            height: 100vh;
            background-color: black;
            opacity: 0.5;
            z-index: 1;
        }

        .modal-content-box-save {
            height: 25vh;
            width: 80vw;
            background-color: white;
            z-index: 2;
            position: absolute;
            top: 32.5vh;
            left: 10vw;
            border-radius: 16px;
        }

        .box-top-save {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 12.5vh;
            color: #1e796a;
            font-weight: bold;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 10px;
            text-align: center;
        }

        .box-content-save {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            height: 7.5vh;
        }

        .box-content-btn-save {
            background-color: #ef840c;
            padding-left: 10px;
            padding-right: 10px;
            /* width: 50px; */
            padding-top: 3px;
            padding-bottom: 3px;
            border-radius: 100px;
            color: white;
            display: flex;
            width: 100px;
            justify-content: center;
        }

        .content {
            display: flex;
            justify-content: center;
        }

        .question {
            padding-top: 15px;
            padding-bottom: 15px;
            width: 100vw;
            background-color: #bcd7d2;
            border-radius: 16px;
            display: flex;
            flex-direction: column;
            margin-top: 18px;
            justify-content: center;
            align-items: center;
            padding-left: 35px;
            padding-right: 35px;
            font-size: 13px;
            font-weight: bold;
            color: white;
        }

        .answer {
            margin-top: 10px;
            gap: 50px;
            font-size: 17px;
            color: #ef840c;
            display: flex;
        }

        @media only screen and (min-width: 600px) {
            .question {
                padding-top: 15px;
                padding-bottom: 15px;
                width: 600px;
                background-color: #bcd7d2;
                border-radius: 16px;
                display: flex;
                flex-direction: column;
                margin-top: 18px;
                justify-content: center;
                align-items: center;
                padding-left: 35px;
                padding-right: 35px;
                font-size: 13px;
                font-weight: bold;
                color: white;
            }
        }

        .body-scrollable {
            height: 100vh;
            overflow: scroll;
        }

        /* ---------------------------------------------------------------input fields-------------------------------------------------------------------------  */

        .container-input-fields{
            display: grid;
            justify-content: center;
            margin-block:50px;
        }


    </style>
</head>

<body class="bg-talent-green">
    <div class="body-scrollable">
        @include('components.navbar.index')
        <div class="w-full h-64 bg-talent-white rounded-b-3xl">
            <div class="flex">
                <!-- Logo -->
                <div class="mt-3">
                    <div class="flex justify-between w-screen">
                        <svg id="Laag_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 559.14 263.07"
                            class="w-36 ml-5">
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

            <div class="mt-8 flex justify-center text-2xl text-talent-green font-bold mb-6">
                Vacature
            </div>
        </div>

        <form action="{{ route('dashboard.jobOffer.store') }}" method="post">
            @csrf
            <div class="container-input-fields" id="container-input-fields">
                <input type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm  font-sans focus:ring-talent-orange decoration-talent-orange px-5 border-none block mt-1 w-64 rounded-full shadow-xl placeholder:text-talent-orange" name="function" id="input" placeholder="*Voeg vacaturenaam toe">
                <select class="text-talent-orange font-sans focus:ring-talent-orange decoration-talent-orange px-5 border-none block mt-1 w-64 rounded-full shadow-xl placeholder:text-talent-orange" name="jobCategoryId" id="select">
                    <option value="" selected>*Kies een sector</option>
                    @foreach($jobCategories as $jobCategory)
                        <option value="{{ $jobCategory->id }}">{{ $jobCategory->categoryName }}</option>
                    @endforeach
                </select>
                <textarea
                    name="description"
                    id="description"
                    class="text-talent-orange font-sans focus:ring-talent-orange decoration-talent-orange px-5 border-none block mt-1 w-64 h-40 rounded-md shadow-xl placeholder:text-talent-orange"
                    placeholder="Korte beschrijving vacature"
                ></textarea>
            </div>
        <div class="content">
            <div class="questionList">
                <?php
                $vragen = 0;
                ?>

                    @foreach ($questions as $question)
                        <?php
                        $vragen += 1;
                        $som = $vragen;
                        $naam = "vraag$som";
                        $questionid = "question$som";
                        $vraag1 = 1;
                        $vraag2 = 2;
                        $vraag3 = 3;
                        $vraag4 = 4;
                        ?>

                        <div id="{{ $questionid }}" class="question">

                            {{ $question->question }}
                            <div class="answer" id="answer">
                                <label class="custom-radio-button">
                                    1
                                    <input type="radio" name="{{ $naam }}" id="{{ $som }}"
                                        value="{{ $vraag1 }}"  />
                                    <span class="checkmark"></span>
                                </label>
                                <label class="custom-radio-button">
                                    2
                                    <input type="radio" name="{{ $naam }}" id="{{ $som }}"
                                        value="{{ $vraag2 }}" />
                                    <span class="checkmark"></span>
                                </label>
                                <label class="custom-radio-button">
                                    3
                                    <input type="radio" name="{{ $naam }}" id="{{ $som }}"
                                        value="{{ $vraag3 }}" />
                                    <span class="checkmark"></span>
                                </label>
                                <label class="custom-radio-button">
                                    4
                                    <input type="radio" name="{{ $naam }}" id="{{ $som }}"
                                        value="{{ $vraag4 }}" />
                                    <span class="checkmark"></span>
                                </label>
                                <style>
                                    .custom-radio-button {
                                        width: 25px;
                                        height: 25px;
                                        /* border: 2px solid #1f796a; */
                                        /* border-radius: 50px; */
                                        /* display: flex;
                                    justify-content: center;
                                    align-items: center; */
                                    }

                                    .custom-radio-button .checkmark {
                                        width: 100%;
                                        height: 100%;
                                        border-radius: 50px;
                                        border: 2px solid #1f796a;
                                        /* background-color: #ef840c; */
                                        border-radius: 50%;
                                        position: relative;
                                        right: 30%;
                                        bottom: 95%;
                                        display: none;
                                    }

                                    .custom-radio-button input {
                                        display: none;
                                    }

                                    .custom-radio-button input:checked+.checkmark {
                                        display: inline-block;
                                    }
                                </style>
                            </div>
                        </div>
                    @endforeach
                    <div class="modal-save" id="modalSave">
                        <div class="modal-content-save">
                            <div class="modal-content-overlay-save" onclick="closeModalSave()"></div>
                            <div class="modal-content-box-save">
                                <div class="box-top-save">
                                    U heeft alle vragen ingevuld. <br />
                                    Wilt u de vragenlijst opslaan en afsluiten?
                                </div>
                                <div class="box-content-save">
                                    <div class="box-content-btn-save" onclick="closeModalSave()">
                                        Nee
                                    </div>
                                    <button type="submit" class="box-content-btn-save"> Ja </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal" id="modalDone">
                        <div class="modal-content">
                            <div class="modal-content-overlay" onclick="closeModalDone()"></div>
                            <div class="modal-content-box">
                                <div class="box-top">
                                    U heeft nog niet alle vragen beantwoord. Geef eerst antwoord op
                                    de vragen voordat u doorgaat.
                                </div>
                                <div class="box-content">
                                    <div class="box-content-btn" onclick="closeModalDone()">
                                        Begrepen
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Pagination-end">
                        <div class="Pagination">
                            <div id="ModalButtonDone" class="button" onclick="openModalDone()">
                                <
                            </div>
                            <div id="ModalButtonSave" class="button" onclick="openModalSave()">
                                >
                            </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <script>
            document.getElementById("modalDone").style.display = "block";
        </script>
    @endif

    <style>
        .Pagination {
            display: flex;
            justify-content: space-between;
            width: 75px;
            cursor: pointer;
        }

        .button {
            font-size: 26px;
            font-weight: bold;
            color: lightgray;
            opacity: 0.8;
        }

        .buttonactive {
            font-size: 26px;
            font-weight: bold;
            color: white;
            opacity: 0.8;
        }

        .option {
            border: none;
            outline: none;
            width: 35px;
            height: 35px;
            background-color: #f1f1f1;
            cursor: pointer;
            font-size: 18px;
        }

        .active,
        .option:hover {
            background-color: #1f796a;
            color: #ef840c;
        }

        .Pagination-end {
            display: flex;
            justify-content: end;
            margin-right: 15px;
            margin-bottom: 15px;
        }

        .questioninvisible {
            display: none;
        }
    </style>
</body>
<script>
    var refresh = window.location.protocol + "//" + window.location.host + window.location.pathname + '?page=1';
    window.history.pushState({
        path: refresh
    }, '', refresh);

    if (window.location.search == "?page=1") {
        document.getElementById("question1").classList.add("questioninvisible");
        document.getElementById("question2").classList.add("questioninvisible");
        document.getElementById("question3").classList.add("questioninvisible");
        document.getElementById("question4").classList.add("questioninvisible");
        document.getElementById("question5").classList.add("questioninvisible");
        document.getElementById("question6").classList.add("questioninvisible");
        document.getElementById("question7").classList.add("questioninvisible");
        document.getElementById("question8").classList.add("questioninvisible");
        document.getElementById("question9").classList.add("questioninvisible");
        document.getElementById("ModalButtonSave").classList.add("buttonactive");
        document.getElementById("ModalButtonDone").classList.remove("buttonactive");
    }

    function openModalSave() {
        if (window.location.search == "?page=1") {
            var refresh = window.location.protocol + "//" + window.location.host + window.location.pathname + '?page=2';
            window.history.pushState({
                path: refresh
            }, '', refresh);
            document.getElementById("container-input-fields").classList.add("questioninvisible");
            document.getElementById("description").classList.add("questioninvisible");
            document.getElementById("select").classList.add("questioninvisible");
            document.getElementById("question1").classList.remove("questioninvisible");
            document.getElementById("question2").classList.remove("questioninvisible");
            document.getElementById("question3").classList.remove("questioninvisible");
            document.getElementById("question4").classList.remove("questioninvisible");
            document.getElementById("question5").classList.add("questioninvisible");
            document.getElementById("question6").classList.add("questioninvisible");
            document.getElementById("question7").classList.add("questioninvisible");
            document.getElementById("question8").classList.add("questioninvisible");
            document.getElementById("question9").classList.add("questioninvisible");
            document.getElementById("ModalButtonDone").classList.add("buttonactive");
            return;
        } else if (window.location.search == "?page=2") {
            var refresh = window.location.protocol + "//" + window.location.host + window.location.pathname + '?page=3';
            window.history.pushState({
                path: refresh
            }, '', refresh);
            document.getElementById("input").classList.add("questioninvisible");
            document.getElementById("select").classList.add("questioninvisible");
            document.getElementById("question1").classList.add("questioninvisible");
            document.getElementById("question2").classList.add("questioninvisible");
            document.getElementById("question3").classList.add("questioninvisible");
            document.getElementById("question4").classList.add("questioninvisible");
            document.getElementById("question5").classList.remove("questioninvisible");
            document.getElementById("question6").classList.remove("questioninvisible");
            document.getElementById("question7").classList.remove("questioninvisible");
            document.getElementById("question8").classList.remove("questioninvisible");
            document.getElementById("question9").classList.add("questioninvisible");
            return;

        } else if (window.location.search == "?page=3") {
            var refresh = window.location.protocol + "//" + window.location.host + window.location.pathname + '?page=4';
            window.history.pushState({
                path: refresh
            }, '', refresh);
            document.getElementById("question5").classList.add("questioninvisible");
            document.getElementById("question6").classList.add("questioninvisible");
            document.getElementById("question7").classList.add("questioninvisible");
            document.getElementById("question8").classList.add("questioninvisible");
            document.getElementById("question9").classList.remove("questioninvisible");
            document.getElementById("ModalButtonSave").classList.remove("buttonactive");
            return;
        }else if (window.location.search == "?page=4") {
            document.getElementById("modalSave").style.display = "block";
        }


    }

    function closeModalSave() {
        document.getElementById("modalSave").style.display = "none";
    }

    function openModalDone() {
        if (window.location.search == "?page=2") {
            var refresh = window.location.protocol + "//" + window.location.host + window.location.pathname + '?page=1';
            window.history.pushState({
                path: refresh
            }, '', refresh);
            document.getElementById("select").classList.remove("questioninvisible");
            document.getElementById("input").classList.remove("questioninvisible");
            document.getElementById("description").classList.remove("questioninvisible");
            document.getElementById("question1").classList.add("questioninvisible");
            document.getElementById("question2").classList.add("questioninvisible");
            document.getElementById("question3").classList.add("questioninvisible");
            document.getElementById("question4").classList.add("questioninvisible");
            document.getElementById("question5").classList.add("questioninvisible");
            document.getElementById("question6").classList.add("questioninvisible");
            document.getElementById("question7").classList.add("questioninvisible");
            document.getElementById("question8").classList.add("questioninvisible");
            document.getElementById("question9").classList.add("questioninvisible");
            document.getElementById("ModalButtonSave").classList.add("buttonactive");
            document.getElementById("ModalButtonDone").classList.remove("buttonactive");
            return;

        } else if (window.location.search == "?page=3") {
            var refresh = window.location.protocol + "//" + window.location.host + window.location.pathname + '?page=2';
            window.history.pushState({
                path: refresh
            }, '', refresh);
            document.getElementById("question1").classList.remove("questioninvisible");
            document.getElementById("question2").classList.remove("questioninvisible");
            document.getElementById("question3").classList.remove("questioninvisible");
            document.getElementById("question4").classList.remove("questioninvisible");
            document.getElementById("question5").classList.add("questioninvisible");
            document.getElementById("question6").classList.add("questioninvisible");
            document.getElementById("question7").classList.add("questioninvisible");
            document.getElementById("question8").classList.add("questioninvisible");
            document.getElementById("question9").classList.add("questioninvisible");
            return;
        }else if (window.location.search == "?page=4") {
            var refresh = window.location.protocol + "//" + window.location.host + window.location.pathname + '?page=3';
            window.history.pushState({
                path: refresh
            }, '', refresh);
            document.getElementById("question1").classList.add("questioninvisible");
            document.getElementById("question2").classList.add("questioninvisible");
            document.getElementById("question3").classList.add("questioninvisible");
            document.getElementById("question4").classList.add("questioninvisible");
            document.getElementById("question5").classList.remove("questioninvisible");
            document.getElementById("question6").classList.remove("questioninvisible");
            document.getElementById("question7").classList.remove("questioninvisible");
            document.getElementById("question8").classList.remove("questioninvisible");
            document.getElementById("question9").classList.add("questioninvisible");
            document.getElementById("ModalButtonSave").classList.add("buttonactive");
            return;
        }
    }

    function closeModalDone() {
        document.getElementById("modalDone").style.display = "none";
    }
</script>

</html>
