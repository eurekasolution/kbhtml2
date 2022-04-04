<div class="row">
    <div class="col">
        <h5 class="text-primary">제품 목록</h5>
    </div>
</div>

<?php
    $sql = "SELECT * FROM models order by models ASC";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    if($data)
    {
        $cnt = 0;
        while($data)
        {
            $cnt ++; // 1,2,3   4,5,6
            // 출력 
            if($cnt % 3 == 1)
            {
                echo "<div class='row'>";
            }
            
            echo "
            <div class='col text-center'>
                <img src='data/img/bag1.jpg' class='img-fluid'><br>
                <span class='fw-bold'>$data[models]</span> <br>
                <span class='text-danger'>$data[price]</span> 원
            </div>
            ";


            if($cnt % 3 == 0)
            {
                echo "</div>";
            }
            $data = mysqli_fetch_array($result);
        }
    }else
    {

    }
?>