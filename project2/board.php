<html>
<head>
  <meta charset = "UTF-8">
  <title>Jeopardy!</title>
  <link rel = "stylesheet"
    type = "text/css"
    href = "style.css" />
</head>

<?php

  session_start(); 
  $questions=$_SESSION["questions"]; 
  $answered=$_SESSION["answered"]; 
  
?>

<div class="container">
  <div class="row">
    <?php
      for($i=0;$i<6;$i++){
        echo '<div class="square"><p class="category">'.$questions[$i][0].'</p></div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=6;$i<12;$i++){
        if($answered[1][$i-6]==0)
          echo '<div class="square"><a href="question.php?id='.($i-6).'-1">$100</a></div>';
        else
          echo '<div class="square">&nbsp;&nbsp;&nbsp;&nbsp;</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=12;$i<18;$i++){
        if($answered[2][$i-12]==0)
          echo '<div class="square"><a href="question.php?id='.($i-12).'-2">$200</a></div>';
        else
          echo '<div class="square">&nbsp;&nbsp;&nbsp;&nbsp;</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=18;$i<24;$i++){
        if($answered[3][$i-18]==0)
          echo '<div class="square"><a href="question.php?id='.($i-18).'-3">$300</a></div>';
        else
          echo '<div class="square">&nbsp;&nbsp;&nbsp;&nbsp;</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=24;$i<30;$i++){
        if($answered[4][$i-24]==0)
          echo '<div class="square"><a href="question.php?id='.($i-24).'-4">$400</a></div>';
        else
          echo '<div class="square">&nbsp;&nbsp;&nbsp;&nbsp;</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=30;$i<36;$i++){
        if($answered[5][$i-30]==0)
          echo '<div class="square"><a href="question.php?id='.($i-30).'-5">$500</a></div>';
        else
          echo '<div class="square">&nbsp;&nbsp;&nbsp;&nbsp;</div>';
      }
    ?>
  </div>
</div>
</html>