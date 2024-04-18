/* Javacript file

Name: script.js
Created by: Alex Vasilcoiu
Date: 12/13/2023

*/


function dropDowndisplay(id) {
    var dropdownContent = document.getElementById(id).nextElementSibling;
    console.log(dropdownContent);
    
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
}

    /* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
