<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Almarai" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        font-family: Almarai;
    </style>
    </head>
<body dir="rtl">
    <header>
        <nav class=navbar style="background-color: rgb(1, 47, 53);">
            <div class="container">
                <teble class="text-white">
                    <td class="text-white m-3 d-flex justify-content-center"><a href="{{route('home')}}">الرئيسية | </a></td>
                    <td class="text-white m-3 d-flex justify-content-center"><a href="">خدماتنا | </a></td>
                    <td class="text-white m-3 d-flex justify-content-center"><a href="{{route('myproduct')}}">المنتجات | </a></td>
                    <td class="text-white m-3 d-flex justify-content-center"><a href="{{route('callus')}}">اتصل بنا | </a></td>
                    <td class="text-white m-3 d-flex justify-content-center"><a href="{{route('aboutus')}}">حول الموقع | </a></td>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
    </footer>

</body>
</html>
