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
        </style>
    </head>
    <style>
        .body-flex {
            display: flex;
        }
    </style>
</head>

<body>
    <div class="body-flex">
        @include('adminportal.components.navbar.index')
            <div class=" ml-5 mr-5 flex justify-center items-center">
                <table class="w-full text-xs text-left text-talent-orange dark:text-talent-orange shadow-lg ">
                    <thead class="text-xs text-talent-orange uppercase bg-talent-green dark:bg-talent-orange shadow-lg dark:text-talent-green">
                        <tr>
                            <th scope="col" class="py-2 px-4">
                                Bedrijfsnaam:
                            </th>
                            <th scope="col" class="py-2 px-4">
                                Contactpersoon:
                            </th>
                            <th scope="col" class="py-2 px-4">
                                Functie:
                            </th> 
                            <th scope="col" class="py-2 px-4">
                                Telefoonummer:
                            </th>
                            <th scope="col" class="py-2 px-4">
                                adress:
                            </th>
                            <th scope="col" class="py-2 px-4">
                                email:
                            </th>
                            <th scope="col" class="py-2 px-4">
                                websiteUrl:
                            </th>
                            <th scope="col" class="py-2 px-4">
                                <span class="sr-only">Edit</span>
                            </th>
                            <th scope="col" class="py-2 px-4">
                                <span class="sr-only">delete</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employers as $employer)
                        <tr class="bg-talent-light-green border-b dark:bg-talent-light-green dark:border-talent-light-green">
                            <th scope="row" class="py-2 px-4 font-medium dark:text-talent-green whitespace-nowrap ">
                                {{$employer->companyName}}
                            </th>
                            <td class="py-2 px-4">
                                {{$employer->user->name}}
                            </td>
                            <td class="py-2 px-4">
                                {{$employer->jobcategory->categoryName}}
                            </td>
                            <td class="py-2 px-4">
                                {{$employer->user->phoneNumber}}
                            </td>
                            <td class="py-2 px-4">
                                {{$employer->user->adress}}
                            </td>
                            <td class="py-2 px-4">
                                {{$employer->user->email}}
                            </td>
                            <td class="py-2 px-4">
                                {{$employer->websiteUrl}}
                            </td>
                            <td class="py-2 px-4 text-right">
                                <a href="/bedrijven/edit/{{$employer->id}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                            <td class="py-2 px-4 text-right">
                                <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                            </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
=======
    <body>
        <div class="body-flex">
            @include('adminportal.components.navbar.index')
            <div class="contentContainer" id="bedrijfContent">
                <style>
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
                    }

                    table tr {
                        background-color: #f8f8f8;
                        border: 1px solid #ddd;
                        padding: 0.35em;
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
                            color: white;
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
                            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
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
                        display: flex;
                        justify-content: center;
                        margin-top: 25px;
                    }
                </style>
                <div class="content">
                    <table>
                        <caption class="tableTitle">
                            Bedrijven
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col">Bedrijfsnaam</th>
                                <th scope="col">Contactpersoon</th>
                                <th scope="col">Functie</th>
                                <th scope="col">Telefoonummer</th>
                                <th scope="col">Adres</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Website</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employers as $employer)
                            <tr>
                                <td data-label="Bedrijfsnaam">
                                    {{$employer->companyName}}
                                </td>
                                <td data-label="Contactpersoon">
                                    {{$employer->user->name}}
                                </td>
                                <td data-label="Functie">
                                    {{$employer->jobcategory->categoryName}}
                                </td>
                                <td data-label="Telefoonummer">
                                    {{$employer->user->phoneNumber}}
                                </td>
                                <td data-label="Adres">
                                    {{$employer->user->adress}}
                                </td>
                                <td data-label="E-mail">
                                    {{$employer->user->email}}
                                </td>
                                <td data-label="Website">
                                    <a
                                        href="{{$employer->websiteUrl}}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                        ><script>
                                            urlFixer(
                                                "{{$employer->websiteUrl}}"
                                            );

                                            function urlFixer(websiteLink) {
                                                const wLink = websiteLink;

                                                const fixer =
                                                    wLink.split("/")[(0, 1, 2)];

                                                document.write(fixer);
                                            }
                                        </script></a
                                    >
                                </td>
                                <td data-label="Edit">
                                    <a
                                        href=""
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                        >Edit</a
                                    >
                                </td>
                                <td data-label="Delete">
                                    <a
                                        href=""
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                        >Delete</a
                                    >
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <script>
            // const url2 = window.location.href;

            // const lastSegment2 = url.split("/")[(0, 1, 2)];

            // console.log(lastSegment2);
        </script>
    </body>
</html>
