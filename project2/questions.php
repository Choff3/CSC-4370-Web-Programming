<?php

    $lines = file("questions.txt", FILE_IGNORE_NEW_LINES);
    $questions=array();
    $category=0;
    $index=0;

    foreach($lines as $line){
        if($line!=""){
            $questions[$category][$index]=$line;
            $index++;
        }
        else{
            $category++;
            $index=0;
            continue;
        }
    }
    
    $usedCats=array();
    while(sizeof($usedCats)!=6){
        $rand=rand(0,(sizeof($questions)-1));
        if(in_array($rand, $usedCats))
            continue;
        else
            array_push($usedCats, $rand);
    }
?>