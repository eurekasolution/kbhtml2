<?php

    if(isset($_SESSION[$sessId]) and $_SESSION[$sessLevel] >=$adminLevel)
    {

    }else
    {
        echo "
        <script>
            alert('잘못된 접근입니다.');
            location.href='main.php';
        </script>
        ";

        exit();
    }

?>

사용자 관리