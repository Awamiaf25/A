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
        a{
        color:#ffffff
        }
        *{
        font-family: Almarai;
        }
        .cart-icon {
        position: relative;
        display: inline-block;
        }
        .cart-count {
        position: absolute;
        top: -10px;
        right: -10px;
        background-color: red;
        color: white;
        border-radius: 50%;
        padding: 2px 6px;
        font-size: 12px;
        }
    </style>
    </head>
<body dir="rtl">
    <header>
    
        <nav class="navbar" style="background-color:  rgb(1, 45, 24)">
            <div class="container">
                <teble class="text-white">
                    <td class="text-white m-3 d-flex justify-content-center"><a href="{{route('get_cat')}}">الرئيسية | </a></td>
                    <td class="text-white m-3 d-flex justify-content-center"><a href="{{route('get_cat')}}">الأقسام | </a></td>
                    <td class="text-white m-3 d-flex justify-content-center"><a href="{{route('callUs')}}">اتصل بنا | </a></td>
                    <td class="text-white m-3 d-flex justify-content-center"><a href="{{route('aboutUs')}}">حول الموقع | </a></td>
                    <td class="text-white m-3 d-flex justify-content-center"><a href="{{route('cart')}}" class="cart-icon"><i class="bi bi-bag text-white width=200px height=200px"></i>
                      <span class="cart-count">{{ session('count') }}</span></a></td>
                </ul>
              </table>
              <div>
                <h3 class="d-flex justify-content-center" style="color:white;">موقع بذرة</h3>
              </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

    <footer class="bg-body-tertiary text-center d-flex justify-content-center align-items-center">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase mt-5">متجر بذرة، دائمًا معكم.. لحدائق خضراء منعشة!</h5>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2025 Copyright:
    <a class="text-body" style="color:#270101" href="">Bathra.com</a>
  </div>
  <!-- Copyright -->
</footer>
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
