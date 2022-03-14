<?php

	session_save_path("./sess");
	session_start();

	include "config.php";

    $outName = $_SESSION[$sessName];
    $msg = "$outName"."님 안녕히 가세요";

    session_destroy();

    echo "
    <script>
        alert('$msg');
        location.href='22session.php';
    </script>
    ";
?>