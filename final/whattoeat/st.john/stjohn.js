let currentImage = 0;
const images = document.querySelectorAll('.gallery img');

function showImage(n) {
    images.forEach(img => img.style.display = 'none');
    images[n].style.display = 'block';
}

function prevImage() {
    if (currentImage > 0) {
        currentImage--;
    } else {
        currentImage = images.length - 1;
    }
    showImage(currentImage);
}

function nextImage() {
    if (currentImage < images.length - 1) {
        currentImage++;
    } else {
        currentImage = 0;
    }
    showImage(currentImage);
}

// Show the first image initially
showImage(currentImage);
