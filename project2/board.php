<html>
<head>
  <meta charset = "UTF-8">
  <title>Jeopardy!</title>
  <link rel = "stylesheet"
    type = "text/css"
    href = "/project2/style.css" />
</head>

<!-- <img src="/project2/jeopardy-logo.jpg" alt="Jeopardy!"> -->

<div class="container">
  <div class="row">
    <?php
      for($i=1;$i<7;$i++){
        echo '<div class="square">'.$i.'</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=7;$i<13;$i++){
        echo '<div class="square">$100</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=13;$i<19;$i++){
        echo '<div class="square">$200</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=19;$i<25;$i++){
        echo '<div class="square">$300</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=25;$i<31;$i++){
        echo '<div class="square">$400</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for($i=31;$i<37;$i++){
        echo '<div class="square">$500</div>';
      }
    ?>
  </div>
</div>
</html>