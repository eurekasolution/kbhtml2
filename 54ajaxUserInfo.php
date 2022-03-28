<?php

    include "db.php";
    $conn = connectDB();

    $idx = $_POST["idx"];
    $sql = "select * from kbstar WHERE idx='$idx'  ";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    
    if($data)
    {
        ?>
        <div class="row">
            <div class="col colLine"> 
                <h5 class="text-primary"> 사용자 정보</h5>
            </div>
        </div>
        <div class="row">
            <div class="col colLine"> </div>
        </div>


        <?php
    }else
    {
        ?>
        <div class="alert alert-danger">
            <strong>Error : </strong><br>
            데이터가 삭제되었습니다.
        </div>
        
        <?php
    }

    closeDB($conn);
?>