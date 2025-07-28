<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Profile Page</title>
    <style>
      /*Profile*/
      body {
        background-color: #0a2540;
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

      .profile-container {
        max-width: 700px;
        background: lightblue;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 50px auto;
      }

      .profile-img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #0a2540;
      }

      .form-label {
        font-weight: 500;
      }

      .btn-update {
        background-color: #0d6efd;
        color: white;
        border-radius: 30px;
        padding: 10px 30px;
      }

      .btn-update:hover {
        background-color: #0b5ed7;
      }
    </style>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- <link rel="stylesheet" href="stylesheet.css" /> -->
  </head>
  <body>
    <div class="container profile-container">
      <h3 class="mb-4 text-center">Edit Profile</h3>

      <!-- Profile Image -->
      <div class="text-center mb-4">
        <img
          src="profile_picture.jpeg"
          alt="Profile"
          class="profile-img mb-2"
        />
        <div>
          <input
            type="file"
            class="form-control w-50 mx-auto"
            accept="image/*"
          />
        </div>
      </div>

      <!-- Form -->
      <form>
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input
            type="text"
            class="form-control"
            placeholder="Enter your full name"
          />
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input
            type="email"
            class="form-control"
            placeholder="Enter your email"
          />
        </div>

        <div class="mb-3">
          <label class="form-label">Phone</label>
          <input
            type="text"
            class="form-control"
            placeholder="Enter your phone number"
          />
        </div>

        <div class="mb-3">
          <label class="form-label">Faculty</label>
          <input
            type="text"
            class="form-control"
            placeholder="Enter your faculty"
          />
        </div>

        <div class="mb-3">
          <label class="form-label">Department</label>
          <input
            type="text"
            class="form-control"
            placeholder="Enter your department"
          />
        </div>

        <div class="mb-3">
          <label class="form-label">Batch</label>
          <input
            type="text"
            class="form-control"
            placeholder="Enter your batch (e.g., 2020/2021)"
          />
        </div>

        <!-- Gender Radio -->
        <div class="mb-4">
          <label class="form-label d-block mb-2">Gender</label>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="gender"
              id="male"
              value="male"
            />
            <label class="form-check-label" for="male">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="gender"
              id="female"
              value="female"
            />
            <label class="form-check-label" for="female">Female</label>
          </div>
        </div>

        <!-- Update Button -->
        <div class="text-center">
          <a class="btn btn-update" href="home.html">Update</a>
        </div>
      </form>
    </div>
  </body>
</html>
