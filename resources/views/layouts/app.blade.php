<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <header class="bg-gray-800 pt-8 pb-20">
                <div class="w-9/12 text-center mr-auto ml-auto -mt-0 mb-0">
                    <h1 class="text-orange text-5xl p-10">Book Shop</h1>
                    <p class="w-9/12 mr-auto ml-auto -mt-0 mb-0 text-white">Cupcake ipsum dolor sit amet croissant. I love topping candy canes sweet roll croissant caramels. Soufflé macaroon liquorice chocolate tart I love.</p>
                </div>
            </header>

            <main class="bg-white">
                @yield('content')
            </main>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
