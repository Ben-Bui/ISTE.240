<?php
$pageTitle = "About Me";
$welcometitle = "Grading Myself";
include ("../header.php");
?>
<!-- Grading about requiremnt -->
    <h2>What I fixes</h2>
    <ul>I fix the font since Timnes News Roman not cutting it</ul>
    <ul>I make it so that the text wont be center anymore, instead to the left for better readabillity, and the background color since it annoying to the eye</ul>
    <ul>I seperate content instead of making it into a big chunks</ul>
    <ul>For the absolute URL, I can't find a fix for pathfile to be corrected</ul>
    <ul>For the Citation, I did have citation in my old website, it was on the homepage at the bottom, but since it is easy to miss, I made it into one of the nav bar a long with my
        grade and comments page for easier access
    </ul>


    <h2>Original Javascript and DHTML combine</h2>
    <p>As suggest that I could combine them together so I did just that, because my website is mainly focusing on tourism, I don't think I added something silly, 
        as when user needed a more detail look of the map, which mainly a picture on my web page, picture enlargement should be helpfull. What I did was using Java script 
        to handle the 'mouserover' and 'mouseout' event so user can interact with the image, it is original, not using any plugins or pre-built function per requirement. 
        When mouserover trigger, the Javascript function mouseroverEnlarge will happen, increasing the width and height of the image to make the picture bigger. 
        When user move the mouse away, trigger an mouseout, which trigger the mouseoutOriginalSize happen return the images to the intended size orgiinally. I use this script for all 
        of my pages which would be consistent</p>
    <p>It was implies that this might not count, so instead I also added a light and darkmode for my page, quite simple, I just change the bacground to dark and font to white if user 
        want to use this website at night, and a lightmode if they change their mind.
    </p>
        <!-- Extra cred -->
        <h2>Extra</h2>
    <ul>
        <li>It does not count but everything is validated, and I also make the citation page more visible so point should'nt be taken off</li>
        <li>I added an captcha, though I don't know if it work, I put it in the comments form page, 
            I just follow instruction on the website, it would be helpfull if you give me more insight</li>
        <li>I added an favicon, a ico file of an airplane I found free online, the plane symbolise for travelling, which is the purpose of my website</li>
        <li>I also added another field for the comments section, I added an phone number section so people can leave their number, I also use one of the old database on adminer, so it
            can show previous comment, make it a bit more realistic</li>
    </ul>
    <?php include ("../footer.php"); ?>
