<!DOCTYPE html>
<html lang="en">
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Store page</title>
      <style>
        /*Store page*/
        body.storepage {
          background-color: white;
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
      </style>
      <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
      />
      <!-- <link rel="stylesheet" href="stylesheet.css" /> -->
    </head>
    <body class="storepage">
      <!--Nav bar-->
      <nav class="navbar navbar-expand-lg navbar-custom py-3">
        <div class="container">
          <!-- Logo and Brand Text -->
          <a class="navbar-brand d-flex align-items-center" href="#">
            <img
              src="susl_logo.png"
              alt="University Logo"
              class="navbar-logo"
            />
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
        </div>
      </nav>
      <!-- Store Page Content -->
      <div class="container py-5">
        <div class="row justify-content-center g-4">
          <div class="col-auto">
            <div class="product-card">
              <div class="product-img">
                <!-- Replace the div below with an <img> tag for a real image -->
                <img src="wristband.jpg" alt="Wrist Band" />
              </div>
              <div class="product-title">Wrist Band - 200 LKR</div>
              <button class="add-cart-btn">Add To Cart</button>
            </div>
          </div>
          <div class="col-auto">
            <div class="product-card">
              <div class="product-img">
                <!-- Replace the div below with an <img> tag for a real image -->
                <img src="wristband.jpg" alt="Wrist Band" />
              </div>
              <div class="product-title">Wrist Band - 200 LKR</div>
              <button class="add-cart-btn">Add To Cart</button>
            </div>
          </div>
          <div class="col-auto">
            <div class="product-card">
              <div class="product-img">
                <!-- Replace the div below with an <img> tag for a real image -->
                <img src="wristband.jpg" alt="Wrist Band" />
              </div>
              <div class="product-title">Wrist Band - 200 LKR</div>
              <button class="add-cart-btn">Add To Cart</button>
            </div>
          </div>
          <div class="col-auto">
            <div class="product-card">
              <div class="product-img">
                <!-- Replace the div below with an <img> tag for a real image -->
                <img src="tshirt.jpeg" alt="tshirt" />
              </div>
              <div class="product-title">Tshirt - 2000 LKR</div>
              <button class="add-cart-btn">Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </body>
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
  </html>
</html>
