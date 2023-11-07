document.addEventListener("DOMContentLoaded", function () {
    const imageSlider = document.querySelector(".image-slider .slider");
    const videoSlider = document.querySelector(".video-slider .slider");
    const prevImageButton = document.getElementById("prevImage");
    const nextImageButton = document.getElementById("nextImage");
    const prevVideoButton = document.getElementById("prevVideo");
    const nextVideoButton = document.getElementById("nextVideo");
    const slides = document.querySelectorAll(".slider img, .slider iframe");
    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.transform = `translateX(-${index * 100}%)`;
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    }

    nextImageButton.addEventListener("click", nextSlide);
    prevImageButton.addEventListener("click", prevSlide);
    nextVideoButton.addEventListener("click", nextSlide);
    prevVideoButton.addEventListener("click", prevSlide);
});
