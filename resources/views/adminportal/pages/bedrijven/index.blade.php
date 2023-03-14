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
            <div class="flex justify-center m-auto" id="bedrijfContent">
                <div class="rounded-lg">
                    <table
                        class="w-full text-sm text-left text-talent-orange dark:text-talent-orange rounded-full ml-10 mr-10"
                    >
                        <thead
                            class="text-xs text-talent-orange uppercase bg-talent-green dark:bg-talent-orange shadow-lg dark:text-talent-green"
                        >
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Bedrijfsnaam:
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Contactpersoon:
                                </th>
                                <th scope="col" class="py-3 px-6">Functie:</th>
                                <th scope="col" class="py-3 px-6">
                                    Telefoonummer:
                                </th>
                                <th scope="col" class="py-3 px-6">adress:</th>
                                <th scope="col" class="py-3 px-6">email:</th>
                                <th scope="col" class="py-3 px-6">
                                    websiteUrl:
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    <span class="sr-only">Edit</span>
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    <span class="sr-only">delete</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employers as $employer)
                            <tr
                                class="bg-talent-light-green border-b dark:bg-talent-light-green dark:border-talent-light-green"
                            >
                                <th
                                    scope="row"
                                    class="py-4 px-6 font-medium dark:text-talent-green whitespace-nowrap"
                                >
                                    {{$employer->companyName}}
                                </th>
                                <td class="py-4 px-6">
                                    {{$employer->user->name}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$employer->jobcategory->categoryName}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$employer->user->phoneNumber}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$employer->user->adress}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$employer->user->email}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$employer->websiteUrl}}
                                </td>
                                <td class="py-4 px-6 text-right">
                                    <a
                                        href=""
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                        >Edit</a
                                    >
                                </td>
                                <td class="py-4 px-6 text-right">
                                    <a
                                        href=""
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                        >Delete</a
                                    >
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </body>
</html>
