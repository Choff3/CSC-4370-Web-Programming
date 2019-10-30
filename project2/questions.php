<?php

    $lines = file("questions.txt", FILE_IGNORE_NEW_LINES);
    $questions=array();
    $category=0;
    $index=0;

    foreach($lines as $line){
        if($line!=""){
            //put it in the categories
            $questions[$category][$index]=$line;
            //iterate through all lines until another semi colon is found.
            $index++;
        }
        else{
            $category++;
            $index=0;
            continue;
        }
    }
    
    var_dump($questions);

    //var_dump($lines);

?>