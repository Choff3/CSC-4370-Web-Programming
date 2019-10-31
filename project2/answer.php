<?php

    $_REQUEST['id'];

    $cat=(int) substr($_REQUEST['id'],0,1);
    $question=(int) substr($_REQUEST['id'],2,1);

    session_start(); 
    $questions=$_SESSION["questions"];

    $dash=strpos($questions[$cat][$question]," - ");

    $a=substr($questions[$cat][$question],$dash+2);

    // $answered=$_SESSION["answered"];
    // $answered[$cat][$question]=1;
    // $_SESSION["answered"]=$answered;

    $_SESSION["answered"][$cat][$question]=1;

    echo '<a href="board.php">'.$a.'</a>';

?>