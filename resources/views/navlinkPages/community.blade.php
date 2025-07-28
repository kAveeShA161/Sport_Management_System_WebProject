<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Community Page</title>
    <style>
      /*Community page*/
      body.communitypage {
        background: #f5f8fa;
        color: #21314d;
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

      .community-title {
        font-size: 2rem;
        font-weight: 700;
        color: #184d8a;
        margin: 32px 0 24px 0;
        text-align: center;
      }

      .btn-primary {
        background-color: #003366;
        align-items: end;
      }
      .btn-primary:hover {
        background-color: #084c9e;
      }
      .post-bar {
        background: lightblue;
        border-radius: 12px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.08);
        padding: 20px;
        margin: 32px auto;
        max-width: 540px;
      }
      .post-actions {
        margin-top: 18px;
      }
      .action-btn {
        display: flex;
        align-items: center;
        gap: 6px;
        background: none;
        border: none;
        color: #555;
        font-weight: 500;
        font-size: 1rem;
        padding: 6px 16px;
        border-radius: 8px;
        transition: background 0.15s;
        cursor: pointer;
      }
      .action-btn:hover {
        background: #f3f6fa;
      }
      .action-btn .bi {
        font-size: 1.3rem;
      }
      .action-video {
        color: #2ea043;
      }
      .action-photo {
        color: #1976d2;
      }
      .action-document {
        color: #e65100;
      }

      .post-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        margin-bottom: 28px;
        padding: 20px 24px;
      }
      .post-author {
        font-weight: 600;
        color: #002b5b;
        font-size: 1rem;
      }
      .post-date {
        font-size: 0.92rem;
        color: #888;
        margin-left: 8px;
      }
      .post-content {
        margin: 12px 0 16px 0;
        font-size: 1.08rem;
      }
      .reactions {
        margin-bottom: 8px;
      }
      .reaction-btn {
        background: #f5f8fa;
        border: none;
        border-radius: 20px;
        margin-right: 8px;
        padding: 4px 14px;
        font-size: 1.1rem;
        color: #184d8a;
        transition: background 0.2s;
      }
      .reaction-btn:hover,
      .reaction-btn.active {
        background: #184d8a;
        color: #fff;
      }
      .comments-section {
        margin-top: 18px;
        padding-left: 12px;
        border-left: 2px solid #e1e6ed;
      }
      .comment {
        margin-bottom: 12px;
      }
      .comment-author {
        font-weight: 500;
        color: #184d8a;
        font-size: 0.97rem;
      }
      .comment-date {
        color: #aaa;
        font-size: 0.87rem;
        margin-left: 6px;
      }
      .comment-content {
        margin-top: 2px;
        font-size: 0.98rem;
      }
      .add-comment {
        margin-top: 10px;
      }
      .add-comment input {
        border-radius: 8px;
      }
      @media (max-width: 767px) {
        .create-post-card,
        .post-card {
          padding: 16px;
        }
        .community-title {
          font-size: 1.4rem;
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

  <!-- Navbar -->
  <body class="communitypage">
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

    <div class="community-title">Community</div>
    <div class="container">
      <div class="post-bar position-relative">
        <!-- Post Input -->
        <div class="mb-2">
          <textarea
            class="form-control"
            rows="2"
            placeholder="What's on your mind?"
          ></textarea>
        </div>
        <!-- Actions -->
        <div class="d-flex justify-content-between post-actions">
          <button class="action-btn action-video">
            <i class="bi bi-play-btn-fill"></i> Video
          </button>
          <button class="action-btn action-photo">
            <i class="bi bi-image-fill"></i> Photo
          </button>
          <button class="action-btn action-document">
            <i class="bi bi-file-earmark-text"></i> Document
          </button>
        </div>
        <div class="text-end">
          <button type="submit" class="btn btn-primary px-4">Post</button>
        </div>
      </div>
      <!-- Post Card Example 1 -->
      <div class="post-card">
        <div class="d-flex align-items-center mb-1">
          <img
            src="profile_picture.jpeg"
            class="rounded-circle me-2"
            width="38"
            height="38"
            alt="User"
          />
          <div>
            <span class="post-author">John Doe</span>
            <span class="post-date">· 2 hours ago</span>
          </div>
        </div>
        <div class="post-content">
          Excited to announce our new community event this Saturday! Who's
          joining?
        </div>
        <div class="reactions mb-2">
          <button class="reaction-btn">👍 12</button>
          <button class="reaction-btn">❤️ 5</button>
          <button class="reaction-btn">😂 2</button>
        </div>
        <!-- Comments -->
        <div class="comments-section">
          <div class="comment">
            <span class="comment-author">Priya</span>
            <span class="comment-date">1 hour ago</span>
            <div class="comment-content">
              Count me in! Looking forward to it.
            </div>
          </div>
          <div class="comment">
            <span class="comment-author">Alex</span>
            <span class="comment-date">45 min ago</span>
            <div class="comment-content">I'll be there too!</div>
          </div>
          <!-- Add Comment -->
          <form class="add-comment d-flex mt-2">
            <input
              type="text"
              class="form-control me-2"
              placeholder="Add a comment..."
            />
            <button class="btn btn-outline-primary" type="submit">Send</button>
          </form>
        </div>
      </div>

      <!-- Post Card Example 2 -->
      <div class="post-card">
        <div class="d-flex align-items-center mb-1">
          <img
            src="profile_picture.jpeg"
            class="rounded-circle me-2"
            width="38"
            height="38"
            alt="User"
          />
          <div>
            <span class="post-author">Sarah Lee</span>
            <span class="post-date">· 4 hours ago</span>
          </div>
        </div>
        <div class="post-content">
          Does anyone have recommendations for good sports podcasts? 🎧
        </div>
        <div class="reactions mb-2">
          <button class="reaction-btn">👍 8</button>
          <button class="reaction-btn">❤️ 3</button>
        </div>
        <!-- Comments -->
        <div class="comments-section">
          <div class="comment">
            <span class="comment-author">Mike</span>
            <span class="comment-date">3 hours ago</span>
            <div class="comment-content">
              Check out "The Game Changers" podcast!
            </div>
          </div>
          <!-- Add Comment -->
          <form class="add-comment d-flex mt-2">
            <input
              type="text"
              class="form-control me-2"
              placeholder="Add a comment..."
            />
            <button class="btn btn-outline-primary" type="submit">Send</button>
          </form>
        </div>
      </div>

      <!-- More posts can be added here -->
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
