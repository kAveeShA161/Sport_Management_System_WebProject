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


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
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
        background-color: #0a2540;
        color: white;
        padding: 30px 20px;
        }

        .footer a {
        color: white;
        text-decoration: none;
        }

        .footer .social-icons i {
        font-size: 18px;
        margin-right: 10px;
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

        .product-card {
        background: #f8f8f8;
        border-radius: 28px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 28px 18px 22px 18px;
        text-align: center;
        width: 210px;
        margin: 0 auto;
        transition: box-shadow 0.2s;
        }
        .product-card:hover {
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.16);
        }
        .product-circle {
        background: #0a2540;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        margin: 0 auto 18px auto;
        display: flex;
        align-items: center;
        justify-content: center;
        }
        .product-img {
        width: 120px;
        height: 120px;
        background: #0a2540;
        border-radius: 50%;
        margin: 0 auto 18px auto;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        }
        .product-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        }
        .product-title {
        font-size: 1rem;
        font-weight: 500;
        margin-bottom: 12px;
        color: #212529;
        }
        .add-cart-btn {
        background: #ffc107;
        color: #222;
        font-weight: 600;
        border: none;
        border-radius: 12px;
        padding: 7px 0;
        width: 85%;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.06);
        transition: background 0.15s;
        }
        .add-cart-btn:hover {
        background: #ffb300;
        color: #fff;
        }
        @media (max-width: 991px) {
        .product-card {
            width: 180px;
        }
        .product-circle {
            width: 95px;
            height: 95px;
        }
        }
        @media (max-width: 767px) {
        .product-card {
            width: 90%;
            margin-bottom: 30px;
        }
        .product-circle {
            width: 80px;
            height: 80px;
        }
        }


        // Community Post Styles
        .container {
            max-width: 800px;
            margin: auto;
        }
        .card {
            margin-bottom: 20px;
        }
        .react-btn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.5em;
        }
        .reactions {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }
        .reaction-buttons {
            display: flex;
            gap: 10px;
        }
        .who-reacted {
            margin-top: 5px;
        }

        .comment, .reply {
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .active {
            background-color: #eef; /* light highlight */
            font-weight: bold;
            border-radius: 5px;
        }
        textarea {
            width: 100%;
            height: 80px;
            margin-bottom: 10px;
        }
        button {
            margin-top: 10px;
        }

        // Teams
        .container-team {
      margin-top: 50px;
      max-width: 1000px;
    }

    .section-title {
      font-size: 24px;
      font-weight: 600;
      color: #002b5b;
      margin-bottom: 30px;
      text-align: center;
    }

    .profile-box {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 30px;
      position: relative;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* Highlight effect for Coach, Captain & Vice Captain */
   
    .highlighted .circle {
      border: 3px solid #00509e;
      background: linear-gradient(145deg, #003865, #00509e);
      box-shadow: 0 8px 15px rgba(0, 80, 158, 0.6);
      color: white;
      font-size: 38px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .highlighted:hover {
      transform: translateY(-8px) scale(1.05);
      box-shadow: 0 12px 35px rgba(0, 43, 91, 0.5);
    }
    .highlighted:hover .circle {
      box-shadow: 0 15px 25px rgba(0, 80, 158, 0.8);
      transform: scale(1.1);
    }

    .circle {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      background-color: #002b5b;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-size: 36px;
      margin-bottom: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: all 0.3s ease;
    }

    .circle img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 50%;
      display: block;
    }

    .name-box {
      background-color: white;
      padding: 12px 25px;
      border-radius: 12px;
      font-weight: 700;
      color: #002b5b;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      text-align: center;
      position: relative;
      font-size: 18px;
      user-select: none;
    }

    /* Badge icon near name */
    .name-box .role-badge {
      position: absolute;
      top: -12px;
      right: -15px;
      background-color: #00509e;
      color: white;
      font-size: 14px;
      padding: 4px 9px;
      border-radius: 20px;
      font-weight: 600;
      box-shadow: 0 2px 6px rgba(0,80,158,0.4);
      text-transform: uppercase;
      letter-spacing: 0.1em;
    }

    hr.section-divider {
      border-top: 3px solid #002b5b;
      margin: 40px 0;
    }

    .row .profile-box {
      margin-bottom: 40px;
    }

    /* Search section styling */
    .input-group select {
      background-color: #ffffff;
      color: rgb(0, 0, 0);
      border: 1px solid rgb(0, 0, 0);
    }

    .input-group select:focus {
      box-shadow: none;
    }

    .input-group input {
      border: 1px solid #002b5b;
    }

    .input-group .btn {
      background-color: #002b5b;
      color: white;
    }

    .input-group .btn:hover {
      background-color: #084c9e;
    }


    // edit profile styles
    .profile-edit-form {
        max-width: 800px;
        margin: auto;
    }

    .profile-edit-form h2 {
        font-weight: 600;
        color: #002b5b;
    }

    .profile-edit-form form {
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
        padding: 30px;
    }

    .profile-edit-form .form-control,
    .profile-edit-form .form-select {
        border-radius: 8px;
        padding: 10px 14px;
        font-size: 15px;
    }

    .profile-edit-form .btn-primary {
        background-color: #00509e;
        border: none;
        border-radius: 8px;
        padding: 10px 24px;
    }

    .profile-edit-form .btn-primary:hover {
        background-color: #003865;
    }

    .profile-edit-form label {
        font-weight: 500;
        color: #333;
    }

    .profile-pic {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #003865;
    }

    .upload-icon {
        bottom: 0;
        right: 0;
        background-color: #003865;
        color: white;
        padding-left: 6px;
        padding-right: 6px;
        border-radius: 50%;
        padding-top; 2px;
        cursor: pointer;
        font-size: 20px;
        border: 2px solid #003865;
        transition: background-color 0.2s ease-in-out;
    }

    .upload-icon:hover {
        background-color: #015498;
        transition: background-color 0.2s ease-in-out;
    }

    .upload-icon i {
        border-radius: 50%;
        font-size: 24px;
        color: #fff;
        transition: background-color 0.2s ease-in-out;
    }
    .upload-icon:hover i {
        background-color: #015498;
        color: #fff;

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
                            @php
                                $currentRoute = Route::currentRouteName();
                            @endphp

                            @if (!in_array($currentRoute, ['login', 'register', 'password.request', 'admin', 'admin.login.submit']))
                                <ul class="navbar-nav me-3">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('sports.index') }}">Teams</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}">Community</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('store.index') }}">Store</a></li>
                                </ul>
                            @endif

                            
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

                                @if (Route::has('admin'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin') }}">{{ __('Admin') }}</a>
                                    </li>
                                @endif

                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        @if(Auth::user()->profile_image)
                                            <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="Profile Image" class="rounded-circle me-2" style="width: 50px; height: 50px; object-fit: cover;">
                                        @else
                                            <img src="{{ asset('images/default-profile.png') }}" alt="Default Profile" class="rounded-circle me-2" style="width: 30px; height: 30px; object-fit: cover;">
                                        @endif
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
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="footer text-white py-5" style="background-color: #002d5b">
        <div class="container">
            <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <h6 class="text-uppercase fw-bold mb-3">Contact Info</h6>
                <p>
                <i class="bi bi-geo-alt-fill me-2"></i>Sabaragamuwa University of
                Sri Lanka,<br />
                P.O. Box 02, Belihuloya, 70140, Sri Lanka
                </p>
                <p>
                <i class="bi bi-telephone-fill me-2"></i>+94-45-2280014 /
                +94-45-2280087
                </p>
                <p>
                <i class="bi bi-envelope-fill me-2"></i
                ><a
                    href="mailto:info@sab.ac.lk"
                    class="text-white text-decoration-none"
                    >info@sab.ac.lk</a
                >
                </p>
            </div>

            <div class="col-md-3 mb-4 mb-md-0">
                <h6 class="text-uppercase fw-bold mb-3">The University</h6>
                <a href="#" class="text-white text-decoration-none">About Us</a>
            </div>

            <div class="col-md-3 text-md-end">
                <div class="d-flex justify-content-md-end gap-3">
                <a href="#" class="text-white fs-5"
                    ><i class="bi bi-facebook"></i
                ></a>
                <a href="#" class="text-white fs-5"
                    ><i class="bi bi-youtube"></i
                ></a>
                </div>
            </div>
            </div>

            <hr class="border-light my-4" />

            <div class="text-center small">
            &copy; Copyright SUSL 2025. All Rights Reserved.
            </div>
        </div>
        </footer>
    </div>

<script>
      function countUp() {
        const counters = document.querySelectorAll('.stat-card');
        counters.forEach(counter => {
          const target = +counter.getAttribute('data-target');
          let count = 0;
          const increment = target / 100;
          const duration = 2000; // total duration in ms
          const stepTime = Math.abs(Math.floor(duration / (target / increment)));

          function updateCounter() {
            count += increment;
            if (count < target) {
              counter.textContent = Math.floor(count);
              setTimeout(updateCounter, stepTime);
            } else {
              counter.textContent = target;
            }
          }
          updateCounter();
        });
      }

      document.addEventListener('DOMContentLoaded', countUp);
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function () {
                document.getElementById('preview').src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>


</body>
</html>
