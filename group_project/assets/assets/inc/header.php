<!-- Header File
 Name: header.php
 Created by: Alex Vasilcoiu
 Date: 12/13/2023
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="javascript" href="./assets/script/script.js">
    <title>The Unix Files: <?php echo $curPage?></title>
</head>

<script>
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
</script>

<body>
    <h1>The Unix Files <span class="mag">&#x1F50E;&#xFE0E;</span></h1>
    <!-- The overlay -->
<div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
    <!-- Overlay content -->
    <div class="overlay-content">
      <a href="index.php">Homepage</a>
      <button class="dropdown-btn" id="dropdown-btn" onclick="dropDowndisplay('dropdown-btn')" >Start Unix ▾
      </button>
      <div class="dropdown-container" id="dropdown-container">
        <a href="whylearn.php">Why Learn Unix?</a>
        <a href="beginners.php">Unix for Beginners</a>
        <a href="advanced.php">Advanced Commands List</a>
        <a href="history.php">History of Unix</a>
      </div>
      <button class="dropdown-btn" id="dropdown-btn1" onclick="dropDowndisplay('dropdown-btn1')" >Tutorials ▾
    </button>
    <div class="dropdown-container" id="dropdown-container">
      <a href="videos.php">Videos</a>
      <a href="written.php">Written</a>
      <a href="stepbystep.php">Step-by-Step</a>
      <a href="othersource.php">Other Sources</a>
    </div>
      <button class="dropdown-btn" id="dropdown-btn2" onclick="dropDowndisplay('dropdown-btn2')" >Exercises ▾
    </button>
    <div class="dropdown-container" id="dropdown-container">
      <a href="quiz.php">Quiz</a>
      <a href="otherexer.php">Other Exercises</a>
    </div>
    <button class="dropdown-btn" id="dropdown-btn3" onclick="dropDowndisplay('dropdown-btn3')">About Us ▾
    </button>
    <div class="dropdown-container" id="dropdown-container">
      <a href="who.php">Who are We?</a>
      <a href="contact.php">Contact Us</a>
      <a href="review.php">Reviews/Comments</a>
    </div>
    
    </div>
  
  </div>
  
  <!-- Use any element to open/show the overlay navigation menu -->
  <span class= "navbar">
    <span onclick="openNav()">☰</span>
    <span class="curPage">
        <?php echo $curPage; ?>
    </span>
</span>