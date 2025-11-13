<!DOCTYPE html>
<html lang="id">
<head>
  <title>Jejak Sejarah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-opacity-50 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-warning fw-bold" href="#">JEJAK SEJARAH!</a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white active fw-bold" aria-current="page" href="#home">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-bold" href="#galeri">GALLERY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-bold" href="#kontak">CONTACT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-bold" href="detailtiket.php">TICKETS</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="home" class="position-relative vh-100 text-white d-flex justify-content-center align-items-center">
    <img src="https://pariwisataindohitz.wordpress.com/wp-content/uploads/2017/08/candi-borobudur.jpg?w=768" 
         class="position-absolute top-0 start-0 w-100 h-100" alt="Background">
    <div class="card bg-dark bg-opacity-75 text-center p-4 position-relative text-white">
      <h1 class="fw-bold">Selamat Memasuki Kawasan Candi Borobudur!</h1>
      <p class="mx-auto py-4">Jelajahi jejak sejarah dan keindahan Candi Borobudur, ikon budaya Indonesia yang kaya akan nilai sejarah dan pesona arsitektur.</p>
      <a href="#sejarah" class="btn btn-warning mx-auto d-block px-4 fw-bold">Jelajahi Sekarang</a>
    </div>
  </section>

  <section id="sejarah" class="position-relative vh-100 text-white d-flex justify-content-center align-items-center">
    <img src="https://png.pngtree.com/thumb_back/fh260/background/20220611/pngtree-stupas-in-borobudur-temple-statues-ancient-meditation-photo-image_31407704.jpg" 
         class="position-absolute top-0 start-0 w-100 h-100" alt="Background">
    <div class="card bg-dark bg-opacity-75 text-center p-4 position-relative text-white w-75">
      <h1 class="fw-bold text-warning">Sejarah Candi Borobudur</h1>
      <p class="mx-auto py-4">
        Candi Borobudur adalah salah satu monumen Buddha terbesar dan paling megah di dunia. 
        Dikenal sebagai simbol kejayaan arsitektur dan seni budaya dari masa lalu, 
        Candi Borobudur memiliki sejarah yang kaya dan mendalam yang tercermin dalam setiap batu dan reliefnya.
      </p>
      <p>
        Borobudur dibangun dengan gaya Mandala yang mencerminkan alam semesta dalam kepercayaan Buddha. 
        Struktur bangunan ini berbentuk kotak dengan empat pintu masuk dan titik pusat berbentuk lingkaran.
        Jika dilihat dari luar hingga ke dalam, terbagi menjadi dua bagian yaitu alam dunia yang terdiri dari tiga zona di bagian luar,
        dan alam Nirwana di bagian pusat.
      </p>
    </div>
  </section>

  <section id="galeri" class="container-fluid py-5 bg-light">
    <div class="container">
      <h2 class="fw-bold text-center p-4">Galeri Candi Borobudur</h2>
      <div class="row g-2 align-items-stretch justify-content-center">
        <div class="col-md-4">
          <div class="card h-100">
            <img src="img/borobudur1.png" alt="Candi Borobudur 1" class="card-img-top h-100 object-fit-cover rounded" onclick="showLightbox(this.src)">
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <img src="img/borobudur2.png" alt="Candi Borobudur 2" class="card-img-top h-100 object-fit-cover rounded" onclick="showLightbox(this.src)">
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <img src="img/borobudur3.png" alt="Candi Borobudur 3" class="card-img-top h-100 object-fit-cover rounded" onclick="showLightbox(this.src)">
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <img src="img/borobudur4.png" alt="Candi Borobudur 4" class="card-img-top h-100 object-fit-cover rounded" onclick="showLightbox(this.src)">
          </div>
        </div>
      </div>
    </div>
    
    <div id="lightbox" onclick="hideLightbox()"
      class="position-fixed top-0 start-0 w-100 h-100 bg-dark bg-opacity-75 justify-content-center align-items-center z-3" style="display: none;">
      <img id="lightbox-img" alt="Tampilan gambar diperbesar" class="img-fluid rounded shadow-lg" />
    </div>
  </section>

  <section id="kontak">
    <div class="bg-dark bg-opacity-75 text-white text-center py-3 mt-auto">
      <h5 class="fw-bold text-center p-2">Kontak</h5>
      <p>
        Info lebih lanjut: 
        <strong>jejaksejarah@examples.com</strong> | 
        Telepon: <strong>0850-1010-1010</strong>
      </p>
    </div>
  </section>

  <footer class="bg-dark text-white text-center py-3 mt-auto">
    <p>© Jejak Sejarah Candi Borobudur</p>
  </footer>

  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>
