
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: coral">
    <div class="container">
      <a class="navbar-brand" href="/">Siakad Biasa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link <?php echo e(($title ==="Home")?'active':''); ?>" aria-current="page" href="/">Data Mahasiswa</a>
          <a class="nav-link <?php echo e(($title ==="Tambah Data")?'active':''); ?>" href="/tambah">Tambah Data</a>
          <a class="nav-link <?php echo e(($title ==="About")?'active':''); ?>" href="/about">About</a>
        </div>
      </div>
    </div>
  </nav>

  <style>
    .navbar a {
    font-size: 20px;
}
  </style><?php /**PATH D:\Laravel\modul7\resources\views/part/navbar.blade.php ENDPATH**/ ?>