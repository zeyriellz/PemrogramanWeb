function showLightbox(src) {
  const lightbox = document.getElementById('lightbox');
  const img = document.getElementById('lightbox-img');
  img.src = src;
  lightbox.style.display = 'flex';
}

function hideLightbox() {
  document.getElementById('lightbox').style.display = 'none';
}
