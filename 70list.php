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
            
            $data["price"] = number_format($data["price"]);

            echo "
            <div class='col text-center'>
                <a href='main.php?cmd=71shopping&idx=$data[idx]'><img src='data/img/bag1.jpg' class='img-fluid'></a><br>
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
        // 1번만 그린경우, 2번의 빈칸을 그린다.
        if($cnt % 3 != 0)
        {
            for($i=$cnt+1; $i<=$cnt + 10; $i++)
            {
                echo "<div class='col'>$i</div>";

                if($i % 3 == 0)
                    break;
            }
            echo "</div>";
        }

    }else
    {

    }
?>