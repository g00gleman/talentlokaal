<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin</title>
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
                flex-direction: column;
                align-items: center;
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
            .normalBtn {
                width: 200px;
                height: 40px;
                border-radius: 999px;
                color: white;
                font-weight: bold;
                font-size: 16px;
                background-color: #f0850b;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <div class="body-flex">
            @include('adminportal.components.navbar.index')
            <div class="content">
                @if ($items->isEmpty())
                <a href="/admin/support/create" class="normalBtn"
                    >Voeg data toe</a
                >
                @else
                <a href="/admin/support/create/media" class="normalBtn"
                    >Voeg social media toe</a
                >
                @endif
                <!-- TODO: Create social media button, Edit and delete Social media, Social Media has an image and a link -->
                <table>
                    <caption class="tableTitle">
                        Support
                    </caption>
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Belangrijk?</th>
                            <th scope="col">Description</th>
                            <th scope="col">Description</th>
                            <th scope="col">Edit</th>
                            <!-- <th scope="col">Delete</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td data-label="Text">
                                {{$item -> text}}
                            </td>
                            <td data-label="E-mail">
                                {{$item -> email}}
                            </td>
                            <td data-label="Telefoon">
                                {{ $item->phonenumber }}
                            </td>
                            <td data-label="Website">
                                <a
                                    href="{{ $item->website }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                >
                                    <script>
                                        urlFixer("{{ $item->website }}");

                                        function urlFixer(websiteLink) {
                                            const wLink = websiteLink;

                                            const fixer =
                                                wLink.split("/")[(0, 1, 2)];

                                            document.write(fixer);
                                        }
                                    </script>
                                </a>
                            </td>
                            <td data-label="Edit">
                                <a
                                    href="/admin/support/edit/{{$item->id}}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    >Edit</a
                                >
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
