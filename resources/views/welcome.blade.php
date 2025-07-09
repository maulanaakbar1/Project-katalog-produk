<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Roti Sari</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Jarak antar item navbar */
    .navbar-nav .nav-item {
      margin-right: 20px; /* Menambahkan jarak antar elemen navbar */
    }

    /* Styling untuk link 'shope' */
    .navbar-nav .nav-item .nav-link.shope {
      border: 2px solid #ff6600; /* Menambahkan border dengan warna oranye */
      padding: 5px 10px; /* Memberikan padding di dalam border */
      border-radius: 5px; /* Membuat sudut border melengkung */
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">Roti Sari</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBasic">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarBasic">
      <ul class="navbar-nav me-auto">
        <!-- Menu lainnya -->
      </ul>

      <!-- Kanan navbar (opsional) -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link shope" href="#">Shope</a> <!-- Menambahkan class 'shope' untuk styling -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5 text-center">
  <h1>Selamat Datang!</h1>
  <img src="https://png.pngtree.com/background/20230813/original/pngtree-bread-with-wheat-and-ears-rye-bread-surface-seed-photo-picture-image_4624039.jpg" class="img-fluid" alt="Roti dan Gandum" />
  <p>Ini adalah halaman landing kosong siap kamu modifikasi.</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
    