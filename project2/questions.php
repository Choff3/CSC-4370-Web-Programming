<?php

    $lines = file("questions.txt", FILE_IGNORE_NEW_LINES);
    $questionPool=array();
    $category=0;
    $index=0;

    foreach($lines as $line){
        if($line!=""){
            $questionPool[$category][$index]=$line;
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
        $rand=rand(0,(sizeof($questionPool)-1));
        if(in_array($rand, $usedCats))
            continue;
        else
            array_push($usedCats, $rand);
    }

    var_dump($usedCats);

    $q0=array();
    while(sizeof($q0)!=5){
        $rand=rand(0,(sizeof($questionPool[$usedCats[0]])-1));
        if(in_array($rand, $q0))
            continue;
        else
            array_push($q0, $rand);
    }

    $q1=array();
    while(sizeof($q1)!=5){
        $rand=rand(0,(sizeof($questionPool[$usedCats[1]])-1));
        if(in_array($rand, $q1))
            continue;
        else
            array_push($q1, $rand);
    }

    $q2=array();
    while(sizeof($usedCats)!=5){
        $rand=rand(0,(sizeof($questionPool[$usedCats[2]])-1));
        if(in_array($rand, $q2))
            continue;
        else
            array_push($q2, $rand);
    }

    $q3=array();
    while(sizeof($usedCats)!=5){
        $rand=rand(0,(sizeof($questionPool[$usedCats[3]])-1));
        if(in_array($rand, $q3))
            continue;
        else
            array_push($q3, $rand);
    }

    $q4=array();
    while(sizeof($usedCats)!=5){
        $rand=rand(0,(sizeof($questionPool[$usedCats[4]])-1));
        if(in_array($rand, $q4))
            continue;
        else
            array_push($q4, $rand);
    }

    var_dump($q0);
    var_dump($q1);
    var_dump($q2);
    var_dump($q3);
    var_dump($q4);

    // foreach($usedCats as $cat){
    //     $index=0;
    //     while(sizeof($usedQuestions[$index])!=5){
    //             $rand=rand(0,(sizeof($questionPool[$cat])-1));
    //             if(in_array($questionPool[$cat][$rand], $usedQuestions[$index]))
    //                 continue;
    //             else
    //                 array_push($usedQuestions[$index], $questionPool[$cat][$rand]);
    //         }
    //     $index++;
    // }

    // var_dump($usedQuestions);
    
?>