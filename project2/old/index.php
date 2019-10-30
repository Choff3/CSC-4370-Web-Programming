<html>
<head>
  <meta charset = "UTF-8">
  <title>Jeopardy!</title>
  <link rel = "stylesheet"
    type = "text/css"
    href = "/project2/old/style.css" />
</head>

  <div class="grid-container">
    <?php
      for($i=1;$i<37;$i++){
        echo '<div class="grid-item'.$i.'"><grid-text>'.$i.'</grid-text></div>';
      }
    ?>
  </div> 
</html>