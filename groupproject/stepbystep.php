<?php 

$path = "./";
$curPage = "Step-by-Step";

include($path . "assets/inc/header.php");

//NOTE TO SCALE IMAGES SO PAGE IS RESPONSIVE
?>

<div class="letter">
    <div class="stepList">
        <h2>CD Command</h2>
        <div class="paragraphImage">
            <p>
                The 'cd' command is used to move into a directory within your files, for example, 'cd [document/webAndMobile]' would take you to a web and mobile folder in your documents if
                it existed on your computer. To assist in finding the files you want to access, you can use the 'ls' command to display directories in your current
                file location, and the 'pwd' command to view your current directory if needed.
            </p>
            <img src="<?php $path ?>assets/images/cd.png" alt="an image of using the 'ls' and 'pwd' commands">
        </div>
        <div class="paragraphImage">
            <p>
                An important note is that cd will move you according to your current location in the files, if you wish to navigate to 'home/user/documents/webAndMobile',
                but are currently in 'home/user/documents/dataBases' you will have to move back before you can navigate to the webAndMobile folder. <br><br>
                These following commands will help you move backwards through directories to navigate your files:<br>
                Using 'cd /' will return you to the root directory.<br>
            </p>
                <img src="<?php $path ?>assets/images/root.png" alt="an image of using 'cd /' to return to the root directory">
            <p>
                Using 'cd ~' will return you to the home directory.
            </p>
            <img src="<?php $path ?>assets/images/cdhome.png" alt="an image of using 'cd ~' to return to the home directory">
            <p>
                Using 'cd ..' will move you backwards by a single level from the current directory.
            </p>
            <img src="<?php $path ?>assets/images/cdback.png" alt="an image of using 'cd ..' to move one level up in the directory">
        </div>
    </div>
    <div class="stepList">
        <h2>Cat Command</h2>
        <div class="paragraphImage">
            <p>
               The 'cat' command is very frequently used on linux. It can be used to view, create, and edit files.<br><br>
               To view files, you use the cat command followed with the name of the file you wish to view. Ex 'cat fileName.txt'
            </p>
            <img src="<?php $path ?>assets/images/cat.png" alt="an image of using 'cat fileName.txt' to view the contents of a file">
        </div>
        <div class="paragraphImage">
            <p>
               To display the contents of mutliple files, you can use the cat command with both filenames, separated by a comma. Ex: 'cat fileName1.txt, fileName2.txt'
            </p>
            <img src="<?php $path ?>assets/images/cat2.png" alt="an image of using 'cat fileName.txt' to view the contents of a file">
        </div>
        <div class="paragraphImage">
            <p>
               The cat command can also be used to create new files, which is done by using the '>' flag before the name of the new file, then hitting enter 
               will allow you to type text that the file will contain. To save the file, press CRTL + D. Ex:'cat > jayesh1.txt'
            </p>
            <img src="<?php $path ?>assets/images/catNew.png" alt="an image of using 'cat >' to create a new file">
        </div>
        <div class="paragraphImage">
            <p>
               Cat also allows you to append contents of one file onto another file by using first the name of the file you want to add onto another, 
               then the '>>' flag, followed by the second file that will have the information appended to. Ex: 'cat appendFrom.txt >> appendTo.txt'
            </p>
            <img src="<?php $path ?>assets/images/catAppend.png" alt="an image of using 'cat >>' to append information from one file to another">
        </div>
    </div>

    <div class="stepList">
        <h2>MV Command</h2>
        <div class="paragraphImage">
            <p>
               The 'mv', or move command has two main functions, renaming a file or directory, and moving a file or directory.<br><br>
               To rename a file, you would use mv followed by the current file name, then the new file name. Ex: 'mv oldName.txt newName.txt'
            </p>
            <img src="<?php $path ?>assets/images/mvrename.png" alt="an image of using the 'mv' command to rename a file">
        </div>
        <div class="paragraphImage">
            <p>
               To move a file, you would use mv, then the file name, followed by the new destination path of the file. Ex: 'mv file.txt /home/documents/webAndMobile/'
            </p>
            <img src="<?php $path ?>assets/images/mvmove.png" alt="an image of using the 'mv' command to move a file">
        </div>

    </div>


</div>

<?php
    include($path . "assets/inc/footer.php");
?>