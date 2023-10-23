// EX06 A
// Function for 'getElementById' so I don't have to do it again
function $(id){
	return document.getElementById(id);
}
function moveText(id) { 
	var moveright = parseInt($(id).style.left);
	moveright = moveright + 10;
    $(id).style.left = moveright + 'px';
}
// EX06 B

function howmany() {
  
    // Count all input elements in the form
    var totalInputCount = document.getElementsByTagName('input');
  
    // Count input elements of type 'text' in the form
    var textInputCount = 0;
    for(var i = 0; i < totalInputCount.length; i++) {
        if(totalInputCount[i].type == "text") {
            textInputCount++;   
        }
    }
    // Print the counts to the console
    console.log('Total input elements in the form: ' + totalInputCount.length);
    console.log('Input elements of type "text" in the form: ' + textInputCount);
  }


// EX06 C
function colorchanger() {
    // Get the select element by its id
    var select = document.getElementById("mySelect").options[mySelect.selectedIndex].value;
    // Get the selected option
    document.getElementById("changecolor").style.backgroundColor = select;
  }


// EX06 D
function changeColor() { 
	// When the user rolls the mouse over the text it changes 
	// to the color of the selected option in exercise 6c.
    var select = document.getElementById("mySelect").options[mySelect.selectedIndex].value;
    document.getElementById("rb").style.color= select;
}

// EX05 E
function multiply() {
    var num1 = parseFloat(document.getElementById('firstoperand').value);
    var num2 = parseFloat(document.getElementById('secondoperand').value);

    if (isNaN(num1), isNaN(num2)) {
        var result = document.createTextNode("Enter valid numbers.");
        var resultElement = document.getElementById('result');
        resultElement.innerHTML = '';
        resultElement.appendChild(result);
    } else {
        var multiplication = num1 * num2;
        var division = num1 / num2;

        var resultText = document.createTextNode("Multiply: " + multiplication + "\nDivide: " + division);
        var resultElement = document.getElementById('result');
        resultElement.innerHTML = '';
        resultElement.appendChild(resultText);
    }
}

function divide() {
    var num1 = parseFloat(document.getElementById('firstoperand').value);
    var num2 = parseFloat(document.getElementById('secondoperand').value);

    if (isNaN(num1) || isNaN(num2)) {
        var result = document.createTextNode("Enter valid numbers.");
        var resultElement = document.getElementById('result');
        resultElement.innerHTML = '';
        resultElement.appendChild(result);
    } else {
        var multiplication = num1 * num2;
        var division = num1 / num2;

        var resultText = document.createTextNode("Multiply: " + multiplication + "\nDivide: " + division);
        var resultElement = document.getElementById('result');
        resultElement.innerHTML = '';
        resultElement.appendChild(resultText);
    }
}
