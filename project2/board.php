<html>
<head>
  <meta charset = "UTF-8">
  <title>Jeopardy!</title>
  <link rel = "stylesheet"
    type = "text/css"
    href = "/project2/style.css" />
</head>

<?php
  include "questions.php";
?>

<div class="container">
  <div class="row">
    <?php
      for($i=0;$i<6;$i++){
        echo '<div class="square"><p class="category">'.$questions[$usedCats[$i]][0].'</p></div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=6;$i<12;$i++){
        echo '<div class="square"><a href="/project2/question.php?id='.$i.'">$100</a></div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=12;$i<18;$i++){
        echo '<div class="square"><a href="/project2/question.php?id='.$i.'">$200</a></div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=18;$i<24;$i++){
        echo '<div class="square"><a href="/project2/question.php?id='.$i.'">$300</a></div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=24;$i<30;$i++){
        echo '<div class="square"><a href="/project2/question.php?id='.$i.'">$400</a></div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=30;$i<36;$i++){
        echo '<div class="square"><a href="/project2/question.php?id='.$i.'">$500</a></div>';
      }
    ?>
  </div>
</div>
</html>