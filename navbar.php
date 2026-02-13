<!DOCTYPE html>
<html lang="en">
<head>
    <title>SuaraDesa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        /* Gradient Pink */
        .navbar-custom {
            background: linear-gradient(45deg, #f5b3d4, #e7b3cc);
            box-shadow: 0 8px 8px rgba(0,0,0,0.2);
        padding-top: 20px;
    padding-bottom: 20px;
}

        .navbar-custom .navbar-brand {
            font-weight: bold;
            font-size: 22px;
            color: white !important;
        }

        .navbar-custom .nav-link {
            color: white !important;
            transition: 0.5s;
        }

        .navbar-custom .nav-link:hover {
            color: #895264 !important;
            transform: scale(1.05);
        }

        .dropdown-menu {
            border-radius: 10px;
        }
    </style>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
  <div class="container-fluid px-6">
    <a class="navbar-brand" href="#">🌸 SuaraDesa</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="tabel.php">Data Aduan Warga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form.php">Buat Aduan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
            Menu
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="pagination.php">Pagination</a>
            <a class="dropdown-item" href="#">Tentang</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
