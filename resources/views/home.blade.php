@extends('layouts.app')

@section('content')
<head>
     <style>

    
    .nav-item-home{
        background-color: #1A406B;
        padding-left: 6px;
        padding-right: 6px;
        border-radius: 25px;
        text-decoration: none;
    }

    .nav-item-home a{
        color: white;
        text-decoration: none;
    }

    .navbar {
      background-color: #E6EAEF;
      position: fixed;
      width: 100%;
      z-index: 2;
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



@endsection
