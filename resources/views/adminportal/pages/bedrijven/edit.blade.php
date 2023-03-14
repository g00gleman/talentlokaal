<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-talent-light-green">

        <form action="/bedrijven/edit/{{ $employer->id }}" method="post">
            {{ csrf_field() }}
            @method('put')
                <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        {{ csrf_field() }}
                        <label for="text" class="block mb-2 text-sm font-medium text-amber-300 dark:text-amber-300">Categorien naam:</label>

                            <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium  text-talent-orange ">Bedrijfsnaam:</label>
                            <input type="text" id="name" name="name" value="" class=" w-96 bg-talent-white text-talent-orange"  placeholder="" required>
                            </div>
                            @error('name')
                            {{$message}}
                            @enderror
                            <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium  text-amber-300 dark:text-amber-300">Beschrijving:</label>
                            <input type="text" id="description"  name="description" value=""  class= "w-96 " required>
                            </div>
                            @error('description')
                            {{$message}}
                            @enderror
                                <div class="mb-6">
                                    <label for="text" class="block mb-2 text-sm font-medium  text-amber-300 dark:text-amber-300">Prijs:</label>
                                    <input type="text" id="price" name="price" value=""  class="w-96" required>
                                </div>
                                @error('price')
                                {{$message}}
                                @enderror
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium  text-amber-300 dark:text-amber-300">Hoeveelheid:</label>
                                <input type="text" id="price" name="amount" value=""  class="w-96 " required>
                            </div>
                            @error('amount')
                            {{$message}}
                            @enderror
                            <button type="submit" class="">Submit</button>
                </div>
</body>
</form>
</html>
