<?php 

$path = "./";
$curPage = "Quiz";

include($path . "assets/inc/header.php");
?>

<div class='letter'>
    <h2>Help Detective Pengi Solve the Case!</h2>
    <h3 id="subtitleQuiz">For each question right, Detective Pengi moves one step closer to solving the case! Help him by solving the following questions!</h3>
    <img style="display:block; overflow:hidden;" class="pengiQuiz" id="pengiQuiz" src="./assets/images/full-logo.png" alt="logo open">
    <div id="quiz" class="quiz">
        <form>
    <fieldset>
        <legend>Question 1.</legend>
            <h3>What is the command to create new directory?</h3>
            <input class="fill-in1" type="text" id="q1">
    </fieldset>
    <fieldset>
        <legend>Question 2.</legend>
            <h3>What is the command to change permissions on file?</h3>
            <input class="fill-in1" type="text" id="q2">
    </fieldset>
    <fieldset>
        <legend>Question 3.</legend>
            <h3>What does SED stand for?</h3>
            <input class="fill-in1" type="text" id="q3" >
</fieldset>
   <fieldset>
        <legend>Question 4.</legend>
            <h3>What command can be used to test network connectivity between hosts?</h3>
            <input class="fill-in1" type="text" id="q4" >
    </fieldset><fieldset>
        <legend>Question 5.</legend>
            <h3>What command is used to kill a process based on its PID?</h3>
            <input class="fill-in1" type="text" id="q5" >
    </fieldset><fieldset>
        <legend>Question 6.</legend>
            <h3>What command can be used to bring up the manual page of a command?</h3>
            <input class="fill-in1" type="text" id="q6" >
    </fieldset><fieldset>
        <legend>Question 7.</legend>
            <h3>What command can be used to display only the last handful of lines of a file?</h3>
            <input class="fill-in1" type="text" id="q7" value="">
    </fieldset><fieldset>
        <legend>Question 8.</legend>
            <h3>What command can be used to display the contents of a file to standard output?</h3>
            <input class="fill-in1" type="text" id="q8" value="">
    </fieldset><fieldset>
        <legend>Question 9.</legend>
            <h3>What character can be used to pipe a command’s output into a file or another command?</h3>
            <input class="fill-in1" type="text" id="q9" value="">
    </fieldset>
    <p class="submitP"><input type="submit" class="submit" value="submit" onclick="checkQuiz()"></p>
</form>

</div>
<div id="resultsQuiz" class="resultsQuiz">
    <p> <span id="message"></span>
    <br/> Your score is: <span id="score"></span> out of 9.
    <br/> Thanks for playing! </p>
    <button onclick="tryAgain()">Try again?</button>
</div>
</div>


<script>

var score=0;
var form = document.getElementById("quiz");
function handleForm(event) { event.preventDefault(); } 
form.addEventListener('submit', handleForm);

function checkQuiz(){
    var q1 = document.getElementById("q1").value;
    console.log(q1);
    var q2 = document.getElementById("q2").value;
    console.log(q2);
    var q3 = document.getElementById("q3").value;
    console.log(q3);
    var q4 = document.getElementById("q4").value;
    console.log(q4);
    var q5 = document.getElementById("q5").value;
    console.log(q5);
    var q6 = document.getElementById("q6").value;
    console.log(q6);
    var q7 = document.getElementById("q7").value;
    console.log(q7);
    var q8 = document.getElementById("q8").value;
    console.log(q8);
    var q9 = document.getElementById("q9").value;
    console.log(q9);


    if(q1 != null && q1 != ""){
        if(q1.toLowerCase() == "mkdir"){
            score++;
        }
    }
    else{
        alert("Please write your answer to help Pengi!");
        document.getElementById("q1").style.background="pink";
        return false;
    }

    if(q2 != null && q2 !=""){
        if(q2.toLowerCase() == "chmod"){
            score++;
        }
    }
    else{
        alert("Please write your answer to help Pengi!");
        document.getElementById("q2").style.background="pink";
        return false;
    }

    if(q3 != null && q3 !=""){
        if(q3.toLowerCase() == "stream editor"){
            score++;
            console.log("SED:" + score);
        }
    }
    else{
        alert("Please write your answer to help Pengi!");
        document.getElementById("q3").style.background="pink";
        return false;
    }

    if(q4 != null && q4 !=""){
        if(q4.toLowerCase() == "ping"){
            score++;
        }
    }
    else{
        alert("Please write your answer to help Pengi!");
        document.getElementById("q4").style.background="pink";
        return false;
    }

    if(q5 != null && q5 !=""){
        if(q5.toLowerCase() == "pkill"){
            score++;
        }
    }
    else{
        alert("Please write your answer to help Pengi!");
        document.getElementById("q1").style.background="pink";
        return false;
    }


    if(q6 != null && q6 !=""){
        if(q6.toLowerCase() == "man"){
            score++;
        }
    }
    else{
        alert("Please write your answer to help Pengi!");
        document.getElementById("q6").style.background="pink";
        return false;
    }

    if(q7 != null && q7 !=""){
        if(q7.toLowerCase() == "tail"){
            score++;
        }
    }
    else{
        alert("Please write your answer to help Pengi!");
        document.getElementById("q7").style.background="pink";
        return false;
    }

    if(q8 != null && q8 !=""){
        if(q8.toLowerCase() == "cat"){
            score++;
        }
    }
    else{
        alert("Please write your answer to help Pengi!");
        document.getElementById("q8").style.background="pink";
        return false;
    }
    if(q1 != null && q9 !=""){
        if(q9 == ">" || q9 == ">>" || q9.toLowerCase() == "> or >>" || q9.toLowerCase() == ">> or >" || q9.toLowerCase() == "> and >>" || q9.toLowerCase() == "> & >>"  ){
            score++;
        }
    }
    else{
        alert("Please write your answer to help Pengi!");
        document.getElementById("q9").style.background="pink";
        return false;
    }

    document.getElementById("quiz").style.display="none";
    document.getElementById("resultsQuiz").style.display="block";
    document.getElementById("subtitleQuiz").style.display="none";
    document.getElementById("score").innerHTML = "" + score;

    if(score < 5){
        document.getElementById("message").innerHTML = "Oh no! You got sent a wild goose chase!! Try again to help Detective Pengi Solve the case!";
        document.getElementById("pengiQuiz").src = "./assets/images/sad-pengi.png";
    }
    if(score >= 5 && score<8){
        document.getElementById("message").innerHTML = "So close! Some of Detective Pengi's notes got lost to the wind! Try again to help Detective Pengi Solve the case!";
        document.getElementById("pengiQuiz").src = "./assets/images/logo-open.png";
    }
    if(score >= 8){
        document.getElementById("message").innerHTML = "Congrats!! You helped Detective Pengi solve the case! Thanks for playing!";
        document.getElementById("pengiQuiz").src= "./assets/images/logo-close.png";
    }
}

function tryAgain(){
    document.getElementById("resultsQuiz").style.display="none";
    document.getElementById("quiz").style.display="block";
    document.getElementById("subtitleQuiz").style.display="block";
    document.getElementById("pengiQuiz").src = "./assets/images/full-logo.png";
    score=0;
}



</script>

<?php
    include($path . "assets/inc/footer.php");
?>