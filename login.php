<?php

    // main.php를 거치도록 바뀌어서 필요없음
    /*
	session_save_path("./sess");
	session_start();

	include "config.php";
    */
    if(isset($_POST["id"])  and $_POST["id"] =="test" )
    {
        $_SESSION[$sessName] = "홍길동";
        $_SESSION[$sessId] = "test";
        $msg = "반갑습니다.";
    } else
    {
        $msg = "아이디와 비번을 확인하세요";
    }

    echo "
    <script>
        alert('$msg');
        location.href='main.php?cmd=22session';
    </script>
    ";
?>