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
            align-items: center;
            height: 100vh;
            overflow: scroll;
        }

        .form {
            background-color: white;
            display: flex;
            align-items: center;
            min-height: 50vh;
            padding-inline: 25px;
            padding-block: 25px;
            border-radius: 14px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .title {
            border-radius: 111px;
            border: 2px solid #1e796a;
        }

        .desc {
            border-radius: 14px;
            border: 2px solid #1e796a;
            min-height: 100px;
        }

        .check {
            border: 2px solid #1e796a;
            margin-block: 10px;
        }

        .submit {
            margin-top: 10px;
            width: 125px;
            height: 40px;
            border-radius: 111px;
            background-color: #f0850b;
            color: white;
            font-weight: bold;
        }

        .justifyEnd {
            display: flex;
            justify-content: end;
        }
    </style>
</head>

<body>
    <div class="body-flex">
        @include('adminportal.components.navbar.index')
        <div class="content">
            <div class="form">
                <form action="/admin/nieuws/edit/{{ $oldNews->id }}" method="post" class="formNews">
                    @csrf
                    @method('PUT')
                    <input class="title" type="text" name="title" id="" value="{{ $oldNews->title }}"
                        placeholder="Titel" /><br />

                    <input class="check" type="checkbox" checked="{{ $oldNews->isImportant }}" name="isImportant"
                        id="" />
                    Is belangrijk voor gebruikers?<br />

                    <textarea class="desc" name="description" id="" placeholder="Beschrijving van de nieuws item">{{ $oldNews->description }}</textarea><br />
                    <div class="justifyEnd">
                        <button type="submit" class="submit">
                            Opslaan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
