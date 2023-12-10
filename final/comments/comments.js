function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var comment = document.getElementById('comment').value;
    var phone = document.getElementById('phone').value;

    if (name.trim() === '' || comment.trim() === '') {
        alert('Please input name and comments.');
        return false;
    }

    return true;
}