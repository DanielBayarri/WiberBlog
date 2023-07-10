<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wiber blog</title>  
    <meta name="description" content="Blog para el proceso de seleccion de Wiber Rent a Car ">
    <meta name="author" content="Daniel Bayarri Bernal">
    <meta name="keywords" content="blog, wiber, rent, car">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts & Icons-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <div id="app">
        <nav>
            <a href="{{ url('/') }}" class="logo">Daniel<span> Bayarri</span> </a>

            <div class="auth">
                @guest
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                    @endif
                @else
                <div class="user">
                    <strong>Usuario: </strong> 
                    <i class='bx bxs-user'></i>
                    <a>
                       {{ Auth::user()->name }}
                    </a>
                </div>
                <a href="{{ route('posts.create') }}">{{ __('Crear Post') }}</a>

                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                @endguest
            </div>
        </nav>
        <main>
            @yield('content')
        </main>

        <footer>
            <div class="info-footer">
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <a href="https://www.linkedin.com/in/danielbayarri/"><i class='bx bxl-linkedin'></i></a>
                    </li>
                    <li>
                        <a href="malito:d.bayarri.b@gmail.com"><i class='bx bx-envelope'></i></a>
                    </li>
                </ul>
                <h5>Daniel Bayarri Bernal</h5>
                <br>
            </div>
        </footer>
    </div>
</body>

</html>
