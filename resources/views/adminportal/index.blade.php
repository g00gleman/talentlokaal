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

    </div>
</body>

</html>
