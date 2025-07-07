
<html lang="en">
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    
    <style>
        body {
        margin: 0;
        font-family: 'Segoe UI', sans-serif;
        background-color: #f8f9fa;
        }
        /* Fixed top banner */
        .admin-banner {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color:#f5f5f5;
        padding: 20px 25px;
        font-size: 24px;
        font-weight: bold;
        color: #002b5b;
        z-index: 1000;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        /* Sidebar */
        .sidebar {
        height: 100vh;
        width: 170px;
        position: fixed;
        top: 56px; /* height of admin-banner */
        background-color: #002b5b;
        padding-top: 35px;
        color: white;
        overflow-y: auto;
        }
        .sidebar a {
        display: flex;
        align-items: center;
        padding: 12px 20px;
        color: white;
        text-decoration: none;
        font-size: 16px;
        }
        .sidebar a:hover {
        background-color: #084c9e;
        }
        .sidebar a i {
        margin-right: 12px;
        font-size: 18px;
        }
        /* Main content */
        .content {
        margin-left: 170px;
        padding: 20px;
        padding-top: 20px; /* more space for fixed admin-banner + gap */
        }
        .action-buttons button {
        margin-right: 15px;
        }
        .action-buttons button i {
        margin-right: 6px;
        }
        a{
        color: #f5f5f5;
        text-decoration: none;
        }

    

    .container {
      margin-top: 50px;
      max-width: 700px;
    }

    .comment-card {
      background: white;
      border-radius: 12px;
      padding: 25px 30px 30px 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
      margin-bottom: 25px;
      border-left: 6px solid #002b5b;
      transition: box-shadow 0.3s ease;
    }

    .comment-card:hover {
      box-shadow: 0 0 20px rgba(0, 43, 91, 0.15);
    }

    /* Make post-by a flex container with space-between */
    .post-by {
      color: #002b5b;
      font-weight: 700;
      font-size: 1.3rem;
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
    }

    /* Left side inside post-by: icon + text */
    .post-by-left {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    /* Font Awesome icon in post-by left */
    .post-by-left i {
      color: #002b5b;
      font-size: 1.2rem;
      min-width: 20px;
      text-align: center;
    }

    /* Trash icon on right */
    .delete-icon {
      color: #cc0000;
      cursor: pointer;
      font-size: 1.3rem;
      transition: color 0.3s ease;
    }

    .delete-icon:hover {
      color: #ff4444;
    }

    hr.post-separator {
      border-top: 2px solid #002b5b;
      margin-bottom: 20px;
      width: 100%;
    }

    .post-desc, .comment-by, .comment-text {
      color: #002b5b;
      font-weight: 600;
      margin-bottom: 8px;
      font-size: 1rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    /* Font Awesome icons next to labels */
    .post-desc i, .comment-by i, .comment-text i {
      min-width: 20px;
      text-align: center;
      color: #002b5b;
      font-size: 1.2rem;
    }

    /* Subtle text for content after label */
    .content-text {
      font-weight: 400;
      color: #3a3a3a;
      font-size: 0.95rem;
      margin-left: 5px;
    }


    .container-table {
      margin-top: 40px;
    }

    .table-card h4{
        color: #002b5b;
    }

    .table-card {
      background: white;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    /* Header background and white font */
    .table thead {
      background-color: #002b5b;
      color: white;
    }

    /* Table body font color same as button background */
    .table tbody tr td {
      color: #002b5b;
    }

    .table th, .table td {
      vertical-align: middle;
      text-align: center;
    }

    .table th:nth-child(1),
    .table td:nth-child(1) {
      width: 20%;
    }

    .table th:nth-child(2),
    .table td:nth-child(2) {
      width: 20%;
    }

    .table th:nth-child(3),
    .table td:nth-child(3) {
      width: 25%;
    }

    .table th:nth-child(4),
    .table td:nth-child(4) {
      width: 15%;
    }

    .table th:nth-child(5),
    .table td:nth-child(5) {
      width: 20%;
    }

    .action-icons i {
      margin: 0 8px;
      cursor: pointer;
      transition: 0.2s;
      font-size: 18px;
    }

    .action-icons i:hover {
      opacity: 0.8;
    }

    .fa-trash {
      color: red;
    }

    .btn-add-member {
      margin-bottom: 20px;
      background-color: #002b5b;
      border-color: #002b5b;
      color: white;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    .btn-add-member:hover {
      background-color: #084c9e;
      border-color: #084c9e;
      color: white;
    }

    .student-img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid #ccc;
      margin-right: 10px;
    }

    .student-info {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container-form {
      margin-top: 50px;
      max-width: 700px;
    }

    .form-card {
      background: white;
      border-radius: 12px;
      padding: 30px 35px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
      transition: box-shadow 0.3s ease;
    }

    .form-card:hover {
      box-shadow: 0 0 25px rgba(0, 43, 91, 0.2);
    }

    .form-title {
      font-size: 24px;
      font-weight: 700;
      color: #002b5b;
      margin-bottom: 30px;
      letter-spacing: 0.5px;
    }

    label {
      font-weight: 600;
      color: #002b5b;
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 1rem;
      user-select: none;
    }

    /* Icon style for labels */
    label i {
      color: #002b5b;
      font-size: 1.2rem;
      min-width: 22px;
      text-align: center;
    }

    /* Pro-style radio buttons */
    .form-check-input {
      width: 1.3em;
      height: 1.3em;
      border: 2.5px solid #002b5b;
      border-radius: 50%;
      transition: all 0.3s ease;
      cursor: pointer;
      position: relative;
      appearance: none;
      -webkit-appearance: none;
      outline: none;
      background-color: #fff;
      margin-top: 0.25rem;
    }

    .form-check-input:checked {
      background-color: #002b5b;
      border-color: #002b5b;
      box-shadow: 0 0 5px rgba(0, 43, 91, 0.7);
    }

    .form-check-label {
      cursor: pointer;
      user-select: none;
      margin-left: 8px;
      font-weight: 600;
      color: #002b5b;
      font-size: 1rem;
    }

    .form-check-inline {
      margin-right: 20px;
    }

    .btn-submit {
      background-color: #002b5b;
      color: white;
      font-weight: 600;
      border-radius: 8px;
      margin-top: 25px;
      padding: 10px 25px;
      font-size: 1.1rem;
      transition: background-color 0.3s ease;
      box-shadow: 0 4px 10px rgba(0, 43, 91, 0.2);
    }

    .btn-submit:hover {
      background-color: #084c9e;
      box-shadow: 0 6px 14px rgba(8, 76, 158, 0.6);
    }

    /* File input tweaks */
    input[type="file"].form-control {
      padding: 6px 12px;
    }
    </style>
</head>

<body>

<!-- Admin Dashboard Banner -->
  <div class="admin-banner">Admin Dashboard</div>

  <!-- Sidebar -->
  <div class="sidebar">
    <a href="{{ route('admin.dashboard') }}"><i class="fas fa-house"></i> Home</a>
    <a href="{{ route('admin.teams.index') }}"><i class="fas fa-users"></i> Teams</a>
    <a href="{{ route('admin.posts.manage') }}"><i class="fas fa-bullhorn"></i> Posts</a>
    <a href="{{ route('admin.comments.index') }}"><i class="fas fa-comments"></i> Comments</a>
    <a href="{{ route('admin.store_items.index') }}"><i class="fas fa-store"></i> Store</a>
    <a href="{{ route('admin.users.index') }}"><i class="fas fa-user"></i> Users</a>
    <form method="POST" action="{{ route('admin.logout') }}">
         @csrf
        <a><button type="submit" class="nav-link btn btn-link"><i class="fas fa-sign-out-alt"></i>Log Out</button></a>
    </form>
  </div>
      
                        



    <div class="content">
        <div class="container mt-5 pt-5">
            @yield('content')
        </div>
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>

            <!-- jQuery (required for select2) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#student-select').select2({
                placeholder: "Select or search for a student"
            });
        });
    </script>

</body>
</html>