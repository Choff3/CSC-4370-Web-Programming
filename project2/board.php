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
        echo '<div class="square"><a href="question.php?id='.($i-6).'-1">$100</a></div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=12;$i<18;$i++){
        echo '<div class="square"><a href="question.php?id='.($i-12).'-2">$200</a></div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=18;$i<24;$i++){
        echo '<div class="square"><a href="question.php?id='.($i-18).'-3">$300</a></div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=24;$i<30;$i++){
        echo '<div class="square"><a href="question.php?id='.($i-24).'-4">$400</a></div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=30;$i<36;$i++){
        echo '<div class="square"><a href="question.php?id='.($i-30).'-5">$500</a></div>';
      }
    ?>
  </div>
</div>
</html>