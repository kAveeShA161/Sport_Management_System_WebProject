<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sabra Sport Education Unit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .sign-up{
        background-color: #1A406B;
        padding: 10px 20px;
        border-radius: 25px;
        color: white;
        text-decoration: none;
    }

    .navbar {
      background-color: #E6EAEF;
      position: fixed;
      width: 100%;
      z-index: 2;
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
    .stats-card {
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      border-radius: 12px;
      text-align: center;
      padding: 20px;
      margin-bottom: 20px;
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
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Teams</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Community</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Store</a></li>
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

      <div class="carousel-caption d-none d-md-block">
        <div class="text-center py-5">
            <h6>WELCOME TO</h6>
            <h2 class="fw-bold text-primary">Sabra Sport Education Unit</h2>
        </div>
      </div>
    </div>
    <div class="carousel-item">
        <div class="image-container">
            <img src="{{ asset('images/cover2.jpg') }}" class="d-block w-100" alt="...">
            <div class="overlay"></div>
        </div>
        <div class="carousel-caption d-none d-md-block">
        <div class="text-center py-5">
            <h6>WELCOME TO</h6>
            <h2 class="fw-bold text-primary">Sabra Sport Education Unit</h2>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="image-container">
            <img src="{{ asset('images/cover3.jpg') }}" class="d-block w-100" alt="...">
            <div class="overlay"></div>
        </div>
      <div class="carousel-caption d-none d-md-block">
        <div class="text-center py-5">
            <h6>WELCOME TO</h6>
            <h2 class="fw-bold text-primary">Sabra Sport Education Unit</h2>
        </div>
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




<!-- Stats Section -->
<div class="container mb-5">
  <div class="row text-center">
    <div class="col-md-4">
      <div class="stats-card">
        <h3>1500</h3>
        <p>Students</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="stats-card">
        <h3>20</h3>
        <p>Sports</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="stats-card">
        <h3>18</h3>
        <p>Staff</p>
      </div>
    </div>
  </div>
</div>

<!-- Latest News -->
<section class="container mb-5">
  <h3 class="text-center mb-4">Latest News</h3>
  <div class="row justify-content-center">
    <div class="col-md-4 mb-4">
      <div class="news-card mb-2"></div>
      <button class="read-more-btn w-100">Read More</button>
    </div>
    <div class="col-md-4 mb-4">
      <div class="news-card mb-2"></div>
      <button class="read-more-btn w-100">Read More</button>
    </div>
  </div>
</section>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
