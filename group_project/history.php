<?php 

$path = "./";
$curPage = "History of Unix";

include($path . "assets/inc/header.php");
?>

<div class="letter">
    
<h2> History of Unix </h2>

<div class="timeline">
  <div class="containerT left">
    <div class="date">1969</div>
    <i class="icon fa fa-home"></i>
    <div class="content">
      <h2>The Beginning</h2>
      <p>
      Ken Thompson, Dennis Ritchie, and others started working on the "little-used PDP-7 in a corner" at Bell Labs and what was to become UNIX.
      </p>
    </div>
  </div>
  <div class="containerT right">
    <div class="date">1971</div>
    <i class="icon fa fa-gift"></i>
    <div class="content">
      <h2>First Edition of Unix is Created</h2>
      <p>
        The first edition of Unix is created, but it was not available to the public yet. It was mostly used for text processing of patent documents.
      </p>
    </div>
  </div>
  <div class="containerT left">
    <div class="date">1973</div>
    <i class="icon fa fa-user"></i>
    <div class="content">
      <h2>Fourth Edition of Unix is Created</h2>
      <p>
        Unix gets rewritten in C. This doesn't seem like a crazy change to us nowadays, but it changed history for the state of Operating Systems (OS) at the time. Unix made OS suddenly portable, which is huge!It made it easy to write a C compiler for a new hardware architecture. In simple terms, it meant people could code on a lot of different platform.
      </p>
    </div>
  </div>
  <div class="containerT right">
    <div class="date">1975</div>
    <i class="icon fa fa-running"></i>
    <div class="content">
      <h2>Sixth Edition of Unix is Released</h2>
      <p>
        Unix finally leaves Bell Labs. It's the first edition that becomes widely available to the public, and it becomes the first BSD (Berkley Software Distribution). What is the BSD? It's a group of Unix-like operating systems who's orgins in early versions of it are from Research Unix (this edition of Unix).
      </p>
    </div>
  </div>
  <div class="containerT left">
    <div class="date">1980s</div>
    <i class="icon fa fa-cog"></i>
    <div class="content">
      <h2>Minix is Created</h2>
      <p>
      Computer science professor Andrew S. Tanenbaum created a small Unix-like operating system called Minix. Minix was developed as an educational tool and the source code was made available to students.
      </p>
    </div>
  </div>
  <div class="containerT right">
    <div class="long-date">1980s-1990</div>
    <i class="icon fa fa-certificate"></i>
    <div class="content">
      <h2>The Unix Wars</h2>
      <p>
      "AT&T entered into an alliance with Sun Microsystems to bring the best features from the many versions of UNIX into a single unified system. While many applauded this decision, one group of UNIX licensees expressed the fear that Sun would have a commercial advantage over the rest of the licensees.

<br/><br/>The concerned group in 1988 formed a special interest group, the Open Systems Foundation (OSF), to lobby for an "open" UNIX within the UNIX community. Soon several large companies -- who at the time were promoting their own proprietary operating systems in competition to UNIX -- also joined the OSF.

<br/><br/>In response, AT&T and a second group of licensees formed their own group, UNIX International. The technical issues soon took a back seat to what can be charitably described as competitive maneuverings, and the trade press dubbed the ensuing controversy the "UNIX wars."

<br/><br/>When efforts failed to bring the two groups together, each group brought out its own version of an "open" UNIX.""

<br/><br/>-(2002, Nokia Bell Labs)
    </div>
  </div>
</div>
</div>

<?php
    include($path . "assets/inc/footer.php");
?>