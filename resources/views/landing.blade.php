<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sabra Sport Education Unit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  <style>
   

    .sign-up{
        background-color: #1A406B;
        padding: 10px 20px;
        border-radius: 25px;
        color: white;
        text-decoration: none;
    }

    .sign-up:hover{
        background-color: #002d5b;
        text-decoration: none;
    } 

    .sign-up a{
        color: white;
        text-decoration: none;
    }

    .image-container {
        position: relative;
        display: inline-block;
    }

    .image-container img {
        display: block;
        width: 100%;
        height: 100vh;
        transition: filter 0.3s ease-in-out;
        object-fit: cover;
    }

    .image-container .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.4);
        z-index: 1;
    }

    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        z-index: 2;
    }
    
    nav {
            background-color: #ffffff;
            position: fixed;
            width: 100%;
            z-index: 2;
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

    body.homepage {
      background: white;
      font-family: "Segoe UI", Arial, sans-serif;
      color: lightblue;
    }

    .welcome {
      color: #003366;
      font-weight: bolder;
      margin-top: 32px;
      margin-bottom: 16px;
      font-size: 5rem;
      letter-spacing: 0.02em;
    }
    .main-title {
      font-weight: 700;
      color: #184d8a;
      font-size: 1.6rem;
      margin-bottom: 36px;
    }
    .stat-card {
      background: lightblue;
      border-radius: 16px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.04);
      width: 130px;
      height: 120px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin: 0 auto 10px auto;
      font-size: 1.3rem;
      font-weight: 600;
      color: #184d8a;
    }
    .stat-label {
      text-align: center;
      margin-top: 8px;
      font-size: 1rem;
      color: #0a2342;
      font-weight: 500;
    }
    .news-title {
      font-size: 1.3rem;
      font-weight: 700;
      color: #184d8a;
      margin: 40px 0 28px 0;
      text-align: center;
    }
    .news-card {
      background: #466385;
      border-radius: 12px;
      height: 170px;
      margin-bottom: 16px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.04);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .read-more-btn {
      background: #fff;
      color: #0a2342;
      border: none;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
      font-weight: 500;
      margin: 0 auto 24px auto;
      display: block;
      width: 120px;
      padding: 6px 0;
      transition: background 0.2s, color 0.2s;
    }
    .read-more-btn:hover {
      background: #184d8a;
      color: #fff;
    }
    @media (max-width: 767px) {
      .stat-card {
        width: 100px;
        height: 90px;
        font-size: 1.1rem;
      }
      .news-card {
        height: 120px;
      }
    }

    .logo {
      height: 60px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg shadow-sm">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="logo me-2">
      <div>
        <strong>Sabra Sport Education Unit</strong><br>
        <small>Sabaragamuwa University of Sri Lanka</small>
      </div>
    </a>
    <div class="ms-auto">
      <ul class="navbar-nav me-3">
        <!--<li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Teams</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Community</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Store</a></li>-->
        <div class="sign-up">
            <li><a href="{{ route('register') }}">Sign Up</a></li>
        </div>
    
      </ul>
      

    </div>
  </div>
</nav>


<!-- Hero Section -->

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="image-container">
            <img src="{{ asset('images/cover1.jpg') }}" class="d-block w-100" alt="...">
            <div class="overlay"></div>
        </div>
    </div>
    <div class="carousel-item">
        <div class="image-container">
            <img src="{{ asset('images/cover2.jpg') }}" class="d-block w-100" alt="...">
            <div class="overlay"></div>
        </div>
        <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <div class="image-container">
            <img src="{{ asset('images/cover3.jpg') }}" class="d-block w-100" alt="...">
            <div class="overlay"></div>
        </div>
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <div class="container text-center">
      <div class="welcome">WELCOME TO</div>
      <div class="main-title">Sabra Sport Education Unit</div>

      <!-- Stat Cards with count-up -->
      <div class="row justify-content-center mb-4">
        <div class="col-6 col-md-4 col-lg-2 mb-3">
          <div class="stat-card" data-target="{{ $userCount }}">0</div>
          <div class="stat-label">Students</div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mb-3">
          <div class="stat-card" data-target="{{ $uniqueSportsCount }}">0</div>
          <div class="stat-label">Sports</div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mb-3">
          <div class="stat-card" data-target="{{ $coachCount }}">0</div>
          <div class="stat-label">Staff</div>
        </div>
      </div>

      <!-- Latest News -->
      <div class="news-title">Latest News</div>
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-5 mb-3">
          <div class="news-card"></div>
          <button class="read-more-btn">Read More</button>
        </div>
        <div class="col-12 col-md-6 col-lg-5 mb-3">
          <div class="news-card"></div>
          <button class="read-more-btn">Read More</button>
        </div>
      </div>
    </div>


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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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
</body>
</html>
