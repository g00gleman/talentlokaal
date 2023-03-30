<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Nieuws</title>
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

            .content {
                padding-top: 25px;
                width: 100%;
                display: flex;
                justify-content: center;
                height: 100vh;
                overflow: scroll;
            }

            .createItem {
                width: 90%;
                /* height: 100px; */
                padding-top: 20px;
                padding-bottom: 20px;
                border-radius: 14px;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: white;
            }

            .inputCenter {
                display: flex;
                align-items: center;
            }

            .submitNieuws {
                background-color: #f0850b;
                color: white;
                font-weight: bold;
                padding-left: 5px;
                padding-right: 5px;
                padding-top: 2px;
                padding-bottom: 2px;
                border-radius: 8px;
            }

            .nieuwsbutton {
                background-color: #1e796a !important;
                border: 0px;
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
        </style>
    </head>

    <body>
        <div class="body-flex">
            @include('adminportal.components.navbar.index')
            <div class="content">
                <table>
                    <caption class="tableTitle">
                        Nieuws
                    </caption>
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Belangrijk?</th>
                            <th scope="col">Description</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="nieuwsbutton">
                            <td>
                                <a href="/admin/nieuws/create">
                                    <div
                                        class="flex w-32 h-8 bg-talent-orange rounded-full"
                                    >
                                        <div
                                            class="flex ml-10 text-center h-full items-center text-xs select-none text-talent-white font-bold"
                                        >
                                            Create
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        @foreach ($items as $item)
                        <tr>
                            <td data-label="Title">
                                {{ $item->title }}
                            </td>
                            <td data-label="belangrijk?">
                                @if ($item->isImportant == 1) Belangrijk @else -
                                @endif
                            </td>
                            <td data-label="Description">
                                {{ $item->description }}
                            </td>
                            <td data-label="Edit">
                                <a
                                    href="/admin/nieuws/edit/{{$item->id}}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    >Edit</a
                                >
                            </td>
                            <td data-label="Delete">
                                <form
                                    action="/admin/nieuws/delete/{{$item->id}}"
                                    method="post"
                                >
                                    @csrf @method('delete')
                                    <button
                                        type="submit"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    >
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
