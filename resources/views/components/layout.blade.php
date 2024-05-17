<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZetStore| </title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
  />
    {{-- CSS CUSTOM --}}
    <link rel="stylesheet" href="/css/home.css">
    @vite('resources/css/app.css')

</head>

<body>

    @include('components.navbar')
    <main class="">
        @yield('user_content')
    </main>
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="/js/home.js"></script>

     <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<!-- Isotope -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>


</body>

</html>
