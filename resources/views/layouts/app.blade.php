<!doctype html>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sabra') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <style>
        .sign-up {
            background-color: #1A406B;
            padding: 10px 20px;
            border-radius: 25px;
            color: white;
            text-decoration: none;
        }

        nav {
            background-color: #E6EAEF;
            position: fixed;
            width: 100%;
            z-index: 2;
        }

        .sign-up a {
            color: white;
            text-decoration: none;
        }

        .footer {
            background-color: #1A406B;
            color: white;
            padding: 40px 0;
        }

        .footer a {
            color: white;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .read-more-btn {
            background-color: #f8f9fa;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .news-card {
            background-color: #6c757d;
            height: 200px;
            border-radius: 10px;
        }

        .navbar-brand img {
            height: 60px;
        }

        ul li {
            margin: 8px;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <img src="{{ asset('images/Logo.png') }}" alt="Logo" style="height: 40px; margin-right: 10px;">
                    <div>
                        <strong>Sabra Sport Education Unit</strong><br>
                        <small>Sabaragamuwa University of Sri Lanka</small>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Wrap both navs inside flex container -->
                    <div class="d-flex justify-content-between w-100 align-items-center">
                        <!-- Left Side Of Navbar -->
                        <div class="ms-auto">
                            <ul class="navbar-nav me-3">
                                <li class="nav-item-home"><a class="nav-link" href="#">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Teams</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Community</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Store</a></li>
                                
                            
                            </ul>
                            

                        </div>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav align-items-center">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                            {{ __('Edit Profile') }}
                                        </a>

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="footer text-center">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h5>Contact Info</h5>
                        <p>+94-45-2269215 | +94-45-2269217</p>
                        <p>sbrsports@sab.ac.lk</p>
                    </div>
                    <div class="col-md-6">
                        <h5>The University</h5>
                        <a href="#">About Us</a>
                    </div>
                </div>
                <p>&copy; Copyright Sabra, 2025. All Rights Reserved</p>
                <div>
                    <a href="#" class="me-3">📘</a>
                    <a href="#">▶️</a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
