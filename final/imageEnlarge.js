window.onload = function() {
    const images = document.querySelectorAll('.picture');

    images.forEach(image => {
        const originalWidth = image.clientWidth;
        const originalHeight = image.clientHeight;

        function enlargeImage() {
            image.style.width = `${originalWidth * 2}px`; // Increase width 
            image.style.height = `${originalHeight * 2}px`; // Increase height 
        }

        function revertImageSize() {
            image.style.width = `${originalWidth}px`; // Restore original width
            image.style.height = `${originalHeight}px`; // Restore original height
        }

        image.addEventListener('mouseover', enlargeImage);
        image.addEventListener('mouseout', revertImageSize);
    });
};
