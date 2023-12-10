let currentImage = 0;
const images = document.querySelectorAll('.gallery img');
const intervalTime = 3000; // Change the interval time (in milliseconds) as needed
let slideInterval;

function showImage(n) {
    images.forEach(img => img.style.display = 'none');
    images[n].style.display = 'block';
}

function nextImage() {
    currentImage = (currentImage + 1) % images.length;
    showImage(currentImage);
}

function startSlide() {
    slideInterval = setInterval(nextImage, intervalTime);
}

function stopSlide() {
    clearInterval(slideInterval);
}

// Show the first image initially
showImage(currentImage);

// Start the slideshow
startSlide();

// Optional: Stop the slideshow on mouseover and start on mouseout
const gallery = document.querySelector('.gallery');
gallery.addEventListener('mouseover', stopSlide);
gallery.addEventListener('mouseout', startSlide);
