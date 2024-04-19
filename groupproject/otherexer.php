<?php 

$path = "./";
$curPage = "Other Exercises";

include($path . "assets/inc/header.php");
?>

<div class="letter">
    <a class="externalLink" href="https://linuxsurvival.com/" target="blank_">
        <h2>Linux Survival</h2>
        <img class="exerciseIMG" src="<?php $path ?>assets/images/linuxSurv.png" alt="an image of the Linux Survival Site">
        <p> 
            Linux survival runs the user through multiple beginners exercises that use an online linux terminal. The site gives prompts for the user to 
            enter into the linux terminal, giving feedback when incorrect and showing the desired output.
        </p>
    </a>
    <a class="externalLink" href="https://overthewire.org/wargames/bandit/" target="blank_">
        <h2>Over the Wire: Bandit</h2>
        <img class="exerciseIMG" src="<?php $path ?>assets/images/bandit.png" alt="an image of Over the Wire: Bandit">
        <p> 
            Over the wire is a webpage with indepentent exercises that the user can perform on their own unix machine. The site is themed after a video game, 
            with each exercise being called a "level", and the difficulty of exercises increasing up to level 34. 
        </p>
    </a>
    <a class="externalLink" href="https://www.reddit.com/r/linuxupskillchallenge/" target="blank_">
        <h2>Linux Challenge Reddit</h2>
        <img class="exerciseIMG" src="<?php $path ?>assets/images/linuxReddit.png" alt="an image of the linuxupskillchallenge subreddit">
        <p> 
            r/linuxupskillchallenge is a subreddit dedicated to giving daily exercises and challenges to complete over a month to learn unix. The 
            exercises are uploaded each weekday, ramping up in difficulty before resetting at the end of each month.
        </p>
    </a>
    
    
</div>

<?php
    include($path . "assets/inc/footer.php");
?>