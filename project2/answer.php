<?php

    $_REQUEST['id'];

    $cat=(int) substr($_REQUEST['id'],0,1);
    $question=(int) substr($_REQUEST['id'],2,1);

    session_start(); 
    $questions=$_SESSION["questions"];

    $dash=strpos($questions[$cat][$question]," - ");

    $a=substr($questions[$cat][$question],$dash+2);

    $_SESSION["answered"][$cat][$question]=1;

?>

<html>
<head>
  <meta charset = "UTF-8">
  <title>Jeopardy!</title>
  <link rel = "stylesheet"
    type = "text/css"
    href = "card.css" />
</head>
<?php
    echo '<a href="board.php">'.$a.'</a>';
?>
</html>