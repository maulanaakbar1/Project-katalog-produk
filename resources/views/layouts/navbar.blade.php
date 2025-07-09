<!-- Navbar Bootstrap 5 - Kosongan -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">Roti Sari</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBasic">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarBasic">
      <ul class="navbar-nav me-auto">
        <!-- Tambahkan menu di sini -->
        <li class="nav-item">
          <a class="nav-link" href="#">Menu 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu 2</a>
        </li>
      </ul>

      <!-- Kanan navbar (opsional) -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
