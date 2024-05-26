<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FailureBrand| </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    {{-- CSS CUSTOM --}}
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/allproducts.css">

    <script src="/js/shop.js" async></script>
    @vite('resources/css/app.css')


</head>

<body>

    @include('components.navbar')
    <main class="">
        @yield('user_content')
    </main>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Isotope -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

    <script>
        //addToCart Slider

        const bar = document.getElementById("bar");
        const close = document.getElementById("close");
        const navbar = document.getElementById("navbar");


        //Open cart
        bar.onclick = () => {
            navbar.classList.add("active");
        }

        //Close cart
        close.onclick = () => {
            navbar.classList.remove("active");
        }

        // ------------------------------------------








        // Shop Page Isotope Filter

        // init Isotope
        var $grid = $('.pro-container').isotope({
            // options
        });
        // filter items on button click
        $('.filter-button-group').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
            // $grid.isotope({ layoutMode: 'fitColumns' });

        });
    </script>
</body>

</html>
