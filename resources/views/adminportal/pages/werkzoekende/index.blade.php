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

                @media screen and (max-width: 4000px) {
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
                <table id="myTable">
                    <caption class="tableTitle">
                        Werkzoekende
                        <div class=" flex justify-center items-center mt-8 ">
                            <form>
                                <label for="default-search"
                                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white ">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true"
                                            class="w-5 h-5 text-talent-orange dark:text-talent-orange" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                    <input type="text" id="myInput" onkeyup="myFunction()"
                                        class="block shadow-lg h-10 p-4 pl-10 text-sm text-talent-orange border border-gray-300 rounded-full bg-talent-green focus:ring-talent-green focus:border-talent-green dark:bg-talent-light-green dark:border-talent-green dark:placeholder-talent-orange dark:text-talent-orange dark:focus:ring-talent-green dark:focus:border-talent-green w-64"
                                        onkeyup="searchFunction()" placeholder="Zoek werkzoekende...">

                                </div>
                            </form>
                        </div>
                    </caption>

                    <thead>
                        <tr>
                            <th scope="col">Naam</th>
                            <th scope="col">Telefoonnummer</th>
                            <th scope="col">Adres</th>
                            <th scope="col">Geboortedatum</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Sector</th>
                            <th scope="col">Beschrijving</th>
                            <th scope="col">Diploma</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
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
                                <td data-label="geboortedatum">
                                    {{ $employee->birthDate }}
                                </td>
                                <td data-label="E-mail">
                                    {{ $employee->user->email }}
                                </td>
                                <td data-label="Functie">
                                    {{ $employee->jobCategorie->categoryName }}
                                </td>
                                <td data-label="beschrijving">
                                    @if (!empty($$employee->user->description))
                                        {{ $employee->user->description }}
                                    @else-
                                    @endif
                                </td>
                                <td data-label="diploma">
                                    {{ $employee->certificate }}
                                </td>
                                <td data-label="Edit">
                                    <a href="/admin/werkzoekende/edit/{{ $employee->id }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                                <td data-label="Delete">
                                    <form action="/admin/werkzoekende/delete/{{ $employee->user->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    function myFunction() {

        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementsByTagName("table")[0];
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {

            for (j = 0; j < tr[i].cells.length; j++) {
                td = tr[i].getElementsByTagName("td")[j];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        break;
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    }
</script>
