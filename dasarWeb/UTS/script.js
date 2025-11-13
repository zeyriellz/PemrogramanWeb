function showLightbox(src) {
  const lightbox = document.getElementById("lightbox");
  const img = document.getElementById("lightbox-img");

  img.src = src;
  lightbox.style.display = "flex";
  // lightbox.classList.remove('d-none');
  // lightbox.classList.add('d-flex');
}

function hideLightbox() {
  const lightbox = document.getElementById("lightbox");
  lightbox.style.display = "none";
  // lightbox.classList.add('d-none');
  // lightbox.classList.remove('d-flex');
}
