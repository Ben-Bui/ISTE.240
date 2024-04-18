<?php 

$path = "./";
$curPage = "Homepage";

include($path . "assets/inc/header.php");
?>

<div class="letter">
	<h2>Welcome to Unix Files!</h2>
	<div id="homeContainer">
		<div class="homeItem"><p id="welcomeText">If you are here you must be interested in learning about Unix!
		 Everyone on the team would like to extend our warmest welcomes to you!
		 After reading through this homepage please use the navigation bar on the left of your page to redirect yourself to whatever page seems of interest to you!
		 <br/>Explore why you should and want to learn unix under our 'start unix' section! We have a variety of pages to give you information about whatever you desire.
		 <br/>Discover our tutorials tab where we cover topics about everything a beginner and intermediate needs to know, as well as step-by-step tutorials!
		 <br/>Once you're done reading test your knowledge under our exercise tab! Can you answer all of detective pengi's questions correctly? If not get yourself to reading!
		 <br/>If you have any questions or want to get in contact with a support agent please navigate to the "About Us" section where we can better assist your needs.
		 <br/>Again, we extend our warmest welcomes and hope you enjoy your investigation through the unix files!
		 </p></div>
		<div class="homeItem"><img src="assets/images/logo-open-square.png" class="penguinOpen" onmouseover="this.src='assets/images/logo-close-square.png';"onmouseout="this.src='assets/images/logo-open-square.png'"></div>
	</div>
	<p id="homeCaption"><i><u>Hover of Detective Pengi for a surprise!</u></i></p>
	
</div>

<?php
    include($path . "assets/inc/footer.php");
?>