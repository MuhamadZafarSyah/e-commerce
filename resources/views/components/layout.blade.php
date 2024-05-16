<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZetStore| </title>
    {{-- CSS CUSTOM --}}
    <link rel="stylesheet" href="/css/style.css">
    <style>
        * {
            border: 1px solid black;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body>

    @include('components.navbar')
    <main class="">
        @yield('user_content')
    </main>
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
