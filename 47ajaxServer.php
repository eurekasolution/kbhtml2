<?php

    // 은행
    $keywords = "국민은행,하나은행,kbstar,대한민국,우리나라,컴퓨터,교육,시스템,운영체제,네트워크,학생,선생,교육장,금융,은행,";
 
    $key = $_POST["key"];
    $flag = false;

    $splitKey = explode(",", $keywords);
    // splitKey[0] = "국민은행";
    //          [1] = "하나은행"

    $cnt = 0;
    while(isset($splitKey[$cnt]))
    {
                    // 국민은행,     은행
        $pos = strpos($splitKey[$cnt] , $key );
        // 은행이라고 입력했을 때, 은행이 들어있는 단어를 선택
        if($pos === false)
        {   // not found

        }else
        {   // found !!!
            echo "$splitKey[$cnt] <br>";
        }

        
        $cnt ++;
    }
   
?>