window.onload = function() {
    const pictures = document.querySelectorAll('.picture');

    pictures.forEach(picture => {
        const defaultWidth = picture.clientWidth;
        const defaultHeight = picture.clientHeight;

        function zoomIn() {
            picture.style.width = `${defaultWidth * 2}px`; // Increase width 
            picture.style.height = `${defaultHeight * 2}px`; // Increase height 
        }

        function zoomOut() {
            picture.style.width = `${defaultWidth}px`; // Restore original width
            picture.style.height = `${defaultHeight}px`; // Restore original height
        }

        picture.addEventListener('mouseover', zoomIn);
        picture.addEventListener('mouseout', zoomOut);
    });
};
