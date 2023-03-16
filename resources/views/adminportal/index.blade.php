<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Admin-Portal</title>
        @vite('resources/css/app.css')
        <style>
            html,
            body {
                margin: 0;
                padding: 0;
            }

            body {
                background-color: #1e796a;
            }

            .body-flex {
                display: flex;
            }

            .contentContainer {
                display: flex;
                justify-content: center;
                height: 100vh;
                overflow: scroll;
            }

            table {
                border: 1px solid #ccc;
                border-collapse: collapse;
                margin: 0;
                padding: 0;
                width: 90%;
                table-layout: fixed;
            }

            table caption {
                font-size: 1.5em;
                margin: 0.5em 0 0.75em;
                color: black;
            }

            table tr {
                background-color: #f8f8f8;
                border: 1px solid #ddd;
                padding: 0.35em;
                /* box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; */
            }

            table th,
            table td {
                padding: 0.625em;
                text-align: center;
            }

            table th {
                font-size: 0.85em;
                letter-spacing: 0.1em;
                text-transform: uppercase;
            }

            @media screen and (max-width: 1600px) {
                table {
                    border: 0;
                }

                table caption {
                    font-size: 1.5em;
                    font-weight: bold;
                    color: black;
                }

                table thead {
                    border: none;
                    clip: rect(0 0 0 0);
                    height: 1px;
                    margin: -1px;
                    overflow: hidden;
                    padding: 0;
                    position: absolute;
                    width: 1px;
                }

                table tr {
                    border-bottom: 3px solid #ddd;
                    display: block;
                    margin-bottom: 0.625em;
                    border-radius: 10px;
                }

                table td {
                    border-bottom: 1px solid #ddd;
                    display: block;
                    font-size: 0.8em;
                    text-align: right;
                }

                table td::before {
                    content: attr(data-label);
                    float: left;
                    font-weight: bold;
                    text-transform: uppercase;
                }

                table td:last-child {
                    border-bottom: 0;
                }
            }

            .content {
                height: 100vh;
                overflow: scroll;
            }

            .center-table {
                display: flex;
                justify-content: center;
                margin-top: 25px;
                background-color: white;
                margin-left: 25px;
                margin-right: 25px;
                border-radius: 14px;
                box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            }
        </style>
    </head>

    <body>
        <div class="body-flex">
            @include('adminportal.components.navbar.index')
            <div class="content">
                <section class="bedrijvenSec">
                    <div class="center-table">
                        <table>
                            <caption class="tableTitle">
                                Bedrijven
                            </caption>
                            <thead>
                                <tr>
                                    <th scope="col">Bedrijfsnaam</th>
                                    <th scope="col">Contactpersoon</th>
                                    <th scope="col">Functie</th>
                                    <!-- <th scope="col">Telefoonummer</th>
                                    <th scope="col">Adres</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Website</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employers as $employer)
                                <tr>
                                    <td data-label="Bedrijfsnaam">
                                        {{ $employer->companyName }}
                                    </td>
                                    <td data-label="Contactpersoon">
                                        {{ $employer->user->name }}
                                    </td>
                                    <td data-label="Functie">
                                        {{ $employer->jobCategorie->categoryName }}
                                    </td>
                                    <!-- <td data-label="Telefoonummer">
                                        {{ $employer->user->phoneNumber }}
                                    </td>
                                    <td data-label="Adres">
                                        {{ $employer->user->adress }}
                                    </td>
                                    <td data-label="E-mail">
                                        {{ $employer->user->email }}
                                    </td>
                                    <td data-label="Website">
                                        <a
                                            href="{{ $employer->websiteUrl }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                        >
                                            <script>
                                                urlFixer(
                                                    "{{ $employer->websiteUrl }}"
                                                );

                                                function urlFixer(websiteLink) {
                                                    const wLink = websiteLink;

                                                    const fixer =
                                                        wLink.split("/")[
                                                            (0, 1, 2)
                                                        ];

                                                    document.write(fixer);
                                                }
                                            </script>
                                        </a>
                                    </td> -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>
                <section class="werkzoekendeSec">
                    <div class="center-table">
                        <table>
                            <caption class="tableTitle">
                                Werkzoekende
                            </caption>
                            <thead>
                                <tr>
                                    <th scope="col">Naam</th>
                                    <th scope="col">Telefoonnummer</th>
                                    <th scope="col">Adres</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Functie</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                <tr>
                                    <td data-label="Naam">
                                        {{ $employee->user->name }}
                                    </td>
                                    <td data-label="Telefoonnummer">
                                        {{ $employee->user->phoneNumber }}
                                    </td>
                                    <td data-label="Adres">
                                        {{ $employee->user->adress }}
                                    </td>
                                    <td data-label="E-mail">
                                        {{ $employee->user->email }}
                                    </td>
                                    <td data-label="Functie">
                                        {{ $employee->jobCategoryEmployee->categoryName }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>
