<?php

    // main.php를 거치도록 바뀌어서 필요없음
    /*
	session_save_path("./sess");
	session_start();

	include "config.php";
    */
    $outName = $_SESSION[$sessName];
    $msg = "$outName"."님 안녕히 가세요";

    session_destroy();

    echo "
    <script>
        alert('$msg');
        location.href='main.php';
    </script>
    ";
?>