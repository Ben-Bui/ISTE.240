// Get the image element
const image = document.querySelector('.picture');

// Define original width and height of the image
const originalWidth = image.clientWidth;
const originalHeight = image.clientHeight;

// Function to enlarge the image on mouseover
function enlargeImage() {
    image.style.width = `${originalWidth * 1.2}px`; // Increase width by 20%
    image.style.height = `${originalHeight * 1.2}px`; // Increase height by 20%
}

// Function to revert the image to its original size on mouseout
function revertImageSize() {
    image.style.width = `${originalWidth}px`; // Restore original width
    image.style.height = `${originalHeight}px`; // Restore original height
}

// Event listeners for mouseover and mouseout
image.addEventListener('mouseover', enlargeImage);
image.addEventListener('mouseout', revertImageSize);
