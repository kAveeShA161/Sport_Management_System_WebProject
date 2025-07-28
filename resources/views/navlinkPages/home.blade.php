<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home Page</title>
    <style>
      /*Home page*/
      body.homepage {
        background: white;
        font-family: "Segoe UI", Arial, sans-serif;
        color: lightblue;
      }

      /*nav bar*/
      .navbar {
        background-color: white;
      }

      .navbar-brand,
      .nav-link {
        color: lightblue !important;
      }

      .navbar-custom {
        background-color: #f5f5f5;
      }

      .navbar-logo {
        width: 70px;
        height: auto;
        margin-right: 15px;
      }

      .navbar-brand-text .title {
        font-weight: 700;
        font-size: 1rem;
        color: #0d3b66;
      }

      .navbar-brand-text .subtitle {
        font-size: 11px;
        text-transform: uppercase;
        color: #0d3b66;
      }

      .nav-link {
        color: white !important;
        font-weight: 400;
        margin: 0 10px;
      }

      .nav-link.active {
        font-weight: 600;
        color: #0d6efd !important;
      }

      .btn-signup {
        background-color: #0d3b66;
        color: #fff;
        border-radius: 15px;
        padding: 5px 20px;
        font-size: 14px;
      }

      .btn-signup:hover {
        background-color: #084c9e;
      }

      .profile-icon img {
        width: 40px;
        height: 40px;
        object-fit: cover;
        border: 2px solid #0a2540;
      }

      /*end nav bar*/

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
      .footer {
        background-color: #0a2540;
        color: white;
        text-align: center;
        padding: 20px;
      }
    </style>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- <link rel="stylesheet" href="stylesheet.css" /> -->
  </head>
  <body class="homepage">
    <nav class="navbar navbar-expand-lg navbar-custom py-3">
      <div class="container">
        <!-- Logo and Brand Text -->
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="susl_logo.png" alt="University Logo" class="navbar-logo" />
          <div class="navbar-brand-text">
            <div class="title">Sabra Sport Education Unit</div>
            <div class="subtitle">Sabaragamuwa University of Sri Lanka</div>
          </div>
        </a>

        <!-- Toggle for mobile -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links and Button -->
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav align-items-center">
            <li class="nav-item">
              <a class="nav-link active" href="home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="team.html">Teams</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="community.html">Community</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="store.html">Store</a>
            </li>
            <li class="nav-item ms-3">
              <a class="btn btn-signup" href="reg.html">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container text-center">
      <div class="welcome">WELCOME TO</div>
      <div class="main-title">Sabra Sport Education Unit</div>
      <!-- Stat Cards -->
      <div class="row justify-content-center mb-4">
        <div class="col-6 col-md-4 col-lg-2 mb-3">
          <div class="stat-card">1500</div>
          <div class="stat-label">Students</div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mb-3">
          <div class="stat-card">20</div>
          <div class="stat-label">Sports</div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mb-3">
          <div class="stat-card">18</div>
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
          <!-- Contact Info -->
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

          <!-- The University -->
          <div class="col-md-3 mb-4 mb-md-0">
            <h6 class="text-uppercase fw-bold mb-3">The University</h6>
            <a href="#" class="text-white text-decoration-none">About Us</a>
          </div>

          <!-- Social Icons -->
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

    <!-- Bootstrap Icons (Add in <head> if not already included) -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
