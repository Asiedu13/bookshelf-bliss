<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title ?? 'Page Not Found'}}</title>
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="">
        <span class="bg-[white] w-[45vw] h-[100vh] -z-10 absolute border-2 border-solid border-[blue]"></span>
        <span class="bg-[#f0eee2] w-[55vw] h-[100vh] absolute -z-10 "></span>
       {{$slot}}
    </body>
</html>
