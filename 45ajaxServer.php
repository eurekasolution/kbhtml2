<?php

    $userList[1] = "test";
    $userList[2] = "admin";
    $userList[3] = "kdhong";
    $userList[4] = "sslee";
    $userList[5] = "tester";

    $keywords = "국민은행,하나은행,kbstar,대한민국,우리나라,컴퓨터,교육,시스템,운영체제,네트워크,학생,선생,교육장,금융,은행,";
 
    $key = $_POST["key"];
    $flag = false;

    // 1 : 1
    // 2 : 11
    // 3 : 21
    // for($i=1; $i<=100; $i++) // start ($i -1) * 10 + 1

    for($i=1; $i<=5; $i++)
    {
        if($userList[$i] == $key)
        {
            $flag = true;
            echo "이미 사용중인 아이디입니다.";
            break;
        }
    }

    if($flag == false)
    {
        echo "사용 가능한 아이디입니다.";
    }

   
?>