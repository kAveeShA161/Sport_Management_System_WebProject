<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Teams Page</title>
    <style>
      /*Team page*/
      body.teampage {
        background-color: #f5f5f5;
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

      .navbar {
        background-color: #e9edf2;
      }

      .nav-link {
        color: #0a2540 !important;
      }

      .search-bar {
        margin: 30px auto;
      }

      .search-box {
        border: 1px solid #ccc;
        border-radius: 8px;
        overflow: hidden;
        width: 400px;
        max-width: 90%;
        background-color: white;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      }

      .search-input {
        border: none;
        outline: none;
        flex: 1;
        padding: 10px 15px;
      }

      .search-btn {
        border: none;
        border-left: 1px solid #ccc;
        border-radius: 0;
        padding: 10px 16px;
        background-color: #003366;
      }

      .search-btn:hover {
        background-color: #0059b3;
      }
      .profile-pic {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background-color: #002b5b;
        object-fit: cover;
        border: 3px solid #f3f3f3;
        box-shadow: 4px 6px 10px rgba(0, 0, 0, 0.09);
        margin-bottom: -12px;
        z-index: 2;
      }
      .member-name {
        background-color: #002b5b;
        color: #fff;
        width: 120px;
        text-align: center;
        padding: 8px 0;
        border-radius: 2px;
        font-weight: 500;
        margin-bottom: 8px;
        box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.07);
        z-index: 1;
      }
      .designation {
        font-size: 0.95rem;
        color: #003366;
        font-weight: 600;
        margin-bottom: 20px;
      }
      .special-member {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 32px;
      }
      .team-title {
        background-color: #002b5b;
        color: #fff;
        font-weight: 600;
        padding: 8px 32px;
        margin: 32px auto 40px auto;
        box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 3px;
        display: inline-block;
      }
      .team-member {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 40px;
      }
      .team-row {
        justify-content: center;
        margin-bottom: 0;
      }
      .team-title {
        background-color: #003366;
        color: #fff;
        font-weight: 600;
        padding: 8px 32px;
        margin: 32px auto 40px auto;
        box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 3px;
        display: inline-block;
      }
      .team-member {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 40px;
      }
      .profile-pic {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background-color: #0059b3;
        box-shadow: 4px 6px 10px rgba(0, 0, 0, 0.09);
        object-fit: cover;
        margin-bottom: -12px;
        z-index: 2;
        border: 3px solid #f3f3f3;
      }
      .member-name {
        background-color: lightblue;
        color: #002b5b;
        width: 100px;
        text-align: center;
        padding: 8px 0;
        border-radius: 2px;
        font-weight: 500;
        box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.07);
        z-index: 1;
      }
      .team-row {
        justify-content: center;
        margin-bottom: 0;
      }
      @media (max-width: 991px) {
        .col-lg-2 {
          flex: 0 0 auto;
          width: 20%;
        }
      }
      @media (max-width: 767px) {
        .col-lg-2 {
          width: 33.3333%;
        }
      }
      @media (max-width: 575px) {
        .col-lg-2 {
          width: 50%;
        }
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
    </style>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- <link rel="stylesheet" href="stylesheet.css" /> -->
  </head>
  <body class="teampage">
    <!-- Navbar -->
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
          </ul>
        </div>
        <!-- Profile Icon with Image -->
        <div class="profile-icon">
          <a href="profile.html" target="_blank">
            <img
              src="profile_picture.jpeg"
              alt="Profile"
              class="rounded-circle"
          /></a>
        </div>
      </div>
    </nav>

    <!-- Search Bar -->
    <div class="search-bar text-center">
      <div class="search-box d-inline-flex align-items-center">
        <input
          type="text"
          class="form-control search-input"
          placeholder="Search teams..."
        />
        <button class="btn btn-primary search-btn">
          <i class="bi bi-search"></i>
        </button>
      </div>
    </div>

    <!-- Team Members Grid -->
    <div class="container py-4">
      <div class="text-center">
        <div class="team-title">Team Elle</div>
      </div>
      <div class="row justify-content-center mb-4">
        <div class="col-md-3 col-6 special-member">
          <img src="profile_picture.jpeg" alt="Captain" class="profile-pic" />
          <div class="member-name">Captain Name</div>
          <div class="designation">Team Captain</div>
        </div>
        <div class="col-md-3 col-6 special-member">
          <img
            src="profile_picture.jpeg"
            alt="Vice Captain"
            class="profile-pic"
          />
          <div class="member-name">Vice Captain Name</div>
          <div class="designation">Vice Captain</div>
        </div>
      </div>
      <!-- Regular Team Members Grid -->
      <div class="row team-row">
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 team-member">
          <img src="profile_picture.jpeg" alt="Member" class="profile-pic" />
          <div class="member-name">Name 1</div>
          <div class="designation">Team Member</div>
        </div>
        <!-- Add more team members as needed -->
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Icons -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
      rel="stylesheet"
    />
  </body>
</html>
