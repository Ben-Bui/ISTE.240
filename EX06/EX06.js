// EX05 A
function jsStyle() {
    // function to change style
    // Change the color and the size of the font
    // in the paragraph with id='text'
    var paragraph = document.getElementById('text');

    // Check if  exists
    if (paragraph) {
        paragraph.style.color = 'red';  // Change the text color to blue
        paragraph.style.fontSize = '30px';  // Change the font size to 24 pixels
    }
}
// EX05 B

function getFormValues() {
    // function to send first and last names
    // to an 'alert' message.
    var firstNameInput = document.getElementById('fname');
    var lastNameInput = document.getElementById('lname');

    // Get the values 
    var firstName = firstNameInput.value;
    var lastName = lastNameInput.value;

    // Create a message with the values
    var message = "First Name: " + firstName + "\nLast Name: " + lastName;

    // Display the message in an alert
    alert(message);
}
// EX05 C

function getOptions() {
	// function to display the number of options in an alert()
    var selectElement = document.getElementById('mySelect');
    
    // Get the number of options in the select element
    var numberOfOptions = selectElement.options.length;
    
    // Display the number of options in an alert
    alert('Number of options: ' + numberOfOptions);	

}
// EX05 D

//create a function that is called on the mouseover that turns the text red
function turnRed() {
    var pElement = document.getElementById('rb');
    pElement.style.color = 'red';
}
//create a function that is called on the mouseout that turns the text black
function turnBlack() {
    var pElement = document.getElementById('rb');
    pElement.style.color = 'black';
}
// EX05 E

function multiply() {
    var firstOperand = parseInt(document.getElementById('firstoperand').value);
    var secondOperand = parseInt(document.getElementById('secondoperand').value);

    // Check if numbers
    if (!isNaN(firstOperand) && !isNaN(secondOperand)) {
        //  multiplication
        var result = firstOperand * secondOperand;
        document.getElementById('result').innerHTML = "Result: " + result;
    } else {
        document.getElementById('result').innerHTML = "Please enter valid numbers.";
    }
}

function divide() {
    var firstOperand = parseInt(document.getElementById('firstoperand').value);
    var secondOperand = parseInt(document.getElementById('secondoperand').value);

    // Check if numbers
    if (!isNaN(firstOperand) && !isNaN(secondOperand)) {
        // Check if not zero
        if (secondOperand !== 0) {
            // using divide function
            var result = firstOperand / secondOperand;
            document.getElementById('result').innerHTML = "Result: " + result;
        } else {
            document.getElementById('result').innerHTML = "Division by zero is not allowed.";
        }
    } else {
        document.getElementById('result').innerHTML = "Please enter valid numbers.";
    }
}