<?php 

$path = "./";
$curPage = "Unix for Beginners";

include($path . "assets/inc/header.php");
?>

<div class="letter">
    <body>

        <div class="title1"><h2>A Noobs Guide To UNIX</h2></div>

        <div class="illustration1"><img src="assets/images/survival.jpg" alt="Survival Guide"></div>

        <div class="intro">
            <p>Welcome to the world of UNIX,
                a powerful and versatile operating system
                used by millions of users and professionals
                worldwide. If you're new to UNIX, don't
                worry, this guide is designed to help
                you get started on your journey to becoming
                a proficient UNIX user, even if you are not
                new, this website can also help improve your
                skill, gain more knowledge and challenge yourself.
            </p>
            
            <p>
                UNIX is an operating system that was developed in
                the late 1960s at AT&T Bell Labs. It's known for its
                stability, security, and flexibility, making it a favorite 
                among developers, system administrators, and power users. 
                UNIX has evolved over the years, and there are many different 
                flavors, including Linux and macOS, which are UNIX-like operating systems.
            </p>
        </div>

        <div class="title2"><h2>A Deeper Look into UNIX</h2></div>

        <div class="work">
            <p>
                UNIX is an operating system that was developed in
                the late 1960s at AT&T Bell Labs. It's known for its
                stability, security, and flexibility, making it a favorite 
                among developers, system administrators, and power users. 
                UNIX has evolved over the years, and there are many different 
                flavors, including Linux and macOS, which are UNIX-like operating systems.  
            </p> 

            <p style="text-align: left;">
                Unix users spend a lot of time at the command line. The command line
                (often called the console, the shell or the terminal) looks something 
                like this:<br> $ _
            </p>

            <p style="text-align: left;">
                When you type in a command like ls, it will give you feedback:<br>$ ls<br>
                Documents README.txt
            </p>

            <p style="text-align: left;">
                Although it may be difficult to navigate yhrough UNIX at first, you will soon
                be able to with these File System Navigation commands:
            </p>

            <ul style="text-align: left;">
                <li>Use ‘cd’ to navigate directories</li>
                <li>Use ‘..’ to move up one level in the directory tree</li>
                <li>Use ‘.’ to refer to the current directory</li>
                <li>Use absolute paths (e.g., ‘/home/user/documents’) or relative paths (e.g., ‘../parentdir’) to specify locations</li>
            </ul>
        </div>

        <div class="illustration2"><img src="assets/images/navigation.jpg" alt="Navigating UNIX"></div>

        <div class="end"><p>
        Permissions and Ownership:<br><br>

                Learn about file permissions with commands like chmod, chown, and chgrp.
                Use ls -l to view detailed file information, including permissions and ownership.<br><br>
               
                Text Editors: Familiarize yourself with text editors like ‘nano’, ‘vim’, or ‘emacs’.<br><br>
                
                5. Package Management (Linux): Use package managers like ‘apt’, ‘yum’, or ‘pacman’ to install, update, and remove software.<br><br>
                
                Pipes and Redirection: Use | (pipe) to send the output of one command as input to another.
                Use ‘ >’ or ‘’ >>’ to redirect output to a file.<br><br>
                
                Searching and Grep: Use ‘grep’ to search for specific text in files.<br><br>
                
                Processes: Manage processes with commands like ps, top, kill, and jobs.<br><br>
                
                Users and Groups: User management commands: adduser, passwd, usermod, and groupadd.
            </p></div>


    </body>
</div>

<?php
    include($path . "assets/inc/footer.php");
?>