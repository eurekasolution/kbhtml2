<?php

    include "db.php";
    $conn = connectDB();

    $searchKey = $_POST["searchKey"];

    // '김%', '%동', '%김%'
    $sql = "select * from kbstar WHERE name like '%$searchKey%'  ";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
  
    //echo "$searchKey ... <br>sql= $sql";

    ?>

    <ul class="list-unstyled preview_ul bg-warning border border-3 border-danger rounded">
    <?php
        while($data)
        {
            // li 출력 
            echo "<li class='preview_li p-1'>$data[name]</li>";
            $data = mysqli_fetch_array($result);
        }
    ?>
    </ul>

    <?php

    closeDB($conn);
?>