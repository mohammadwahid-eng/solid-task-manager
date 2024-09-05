<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <x-navbar/>
        <div class="px-8 py-4">
            {{ $slot }}
        </div>
    </body>
</html>
