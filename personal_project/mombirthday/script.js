// script.js
let currentIndex = 0;
const imageSlides = document.querySelectorAll('.slider img');
const videoFrames = document.querySelectorAll('.video-slider iframe');
const totalImageSlides = imageSlides.length;
const totalVideoFrames = videoFrames.length;

function showImageSlide(index) {
    imageSlides.forEach((slide, i) => {
        const scale = i === index ? 1 : 0.8;
        slide.style.transform = `translateX(-${index * 100}%) scale(${scale})`;
    });
}

function showVideoFrame(index) {
    videoFrames.forEach((frame, i) => {
        if (i === index) {
            frame.classList.add('active');
        } else {
            frame.classList.remove('active');
        }
    });
}

function changeSlide(direction) {
    currentIndex = (currentIndex + direction + totalImageSlides) % totalImageSlides;
    showImageSlide(currentIndex);
    showVideoFrame(currentIndex);
}

document.addEventListener('DOMContentLoaded', function () {
    showImageSlide(currentIndex);
    showVideoFrame(currentIndex);
});
