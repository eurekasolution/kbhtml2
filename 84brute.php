<?php

    if(!isset($_GET["cnt"]))
        $cnt = 1;

    $second = 123456; // 몇일 몇시간 몇분 몇초
    $day = (int)($second / ( 60 * 60 * 24));
    $hour = $second % ( 60 * 60 * 24 );
    $hour = $hour / ( 60 * 60);

    echo "$day 일 $hour 시";




    $letters = "abcdefghijklmnopqrstuvwxyz";
    $lastLetter = $letters[strlen($letters)-1];
    $lastIndex = strlen($letters) -1;

    //$cnt = 5
    

    // $40 / (26 * 26 * 26) 
    // aabm

 
    $nextCnt = $cnt + 1;


?>