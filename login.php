<?php

    // main.php를 거치도록 바뀌어서 필요없음
    /*
	session_save_path("./sess");
	session_start();

	include "config.php";
    */

    $id = $_POST["id"];
    $pass = $_POST["pass"];

    $sql = "SELECT * FROM members 
                WHERE id='$id' and pass=password('$pass')";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    if($data)
    {
        $_SESSION[$sessName] = $data["name"];
        $_SESSION[$sessId] = $data["id"];
        $_SESSION[$sessLevel] = $data["level"];
        $msg = "$_SESSION[$sessName] 반갑습니다.";
    }else
    {
        $msg = "아이디와 비번을 확인하세요";
    }

    echo "
    <script>
        alert('$msg');
        location.href='main.php';
    </script>
    ";
?>