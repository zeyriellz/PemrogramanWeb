<!DOCTYPE html>
<html lang="id">
<head>
  <title>Jejak Sejarah</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header class="navbar">
    <div class="logo">
      <span>JEJAK</span>
      <span>SEJARAH!</span>
    </div>
    <nav class="nav-menu">
      <a href="#home">HOME</a>
      <a href="#galeri">GALLERY</a>
      <a href="#kontak">CONTACT</a>
      <a href="detailtiket.php">TICKETS</a>
    </nav>
  </header>

  <section id="home">
    <h2>Selamat Memasuki Kawasan Candi Borobudur!</h2>
    <p>
      Jelajahi jejak sejarah dan keindahan Candi Borobudur, ikon budaya Indonesia yang kaya akan nilai sejarah dan pesona arsitektur.
    </p>
    <a href="#sejarah" class="btn-home">Jelajahi Sekarang</a>
  </section>

  <section id="sejarah">
    <div class="content">
      <h2>Sejarah Candi Borobudur</h2>
      <p>
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

  <section id="galeri">
    <h2>Galeri Candi Borobudur</h2>
    <div class="gallery">
      <img src="img/borobudur1.png" alt="Candi Borobudur 1" onclick="showLightbox(this.src)">
      <img src="img/borobudur2.png" alt="Candi Borobudur 2" onclick="showLightbox(this.src)">
      <img src="img/borobudur3.png" alt="Candi Borobudur 3" onclick="showLightbox(this.src)">
      <img src="img/borobudur4.png" alt="Candi Borobudur 4" onclick="showLightbox(this.src)">
    </div>

    <div id="lightbox" onclick="hideLightbox()">
      <img id="lightbox-img" alt="Tampilan gambar diperbesar">
    </div>
  </section>

  <section id="kontak">
    <h3>Kontak</h3>
    <p>
      Info lebih lanjut: 
      <strong>jejaksejarah@examples.com</strong> | 
      Telepon: <strong>0850-1010-1010</strong>
    </p>
  </section>

  <footer>
    <p>© Jejak Sejarah Candi Borobudur</p>
  </footer>

  <script src="script.js"></script>

</body>
</html>
