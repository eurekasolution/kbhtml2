<?php
    if(isset($_GET["mode"]))
    {
        $mode = $_GET["mode"];
        $idx = $_GET["idx"];

        if($mode == "delete")
        {
            $sql = "DELETE FROM cart WHERE idx='$idx' and time='$_SESSION[$sessTime]' ";
            $result = mysqli_query($conn, $sql);
            echo "
            <script>
                location.href='main.php?cmd=$cmd';
            </script>
            ";
        }
    }
?>

<div class="row">
    <div class="col">
        <h5 class="text-primary">장바구니</h5>
    </div>
</div>

<?php
    // cart : idx, color, size, count   (midx)
    // models : models, photo,          (idx)

    $sql = "SELECT 
                cart.idx as cidx, cart.color as ccolor, 
                cart.size as csize, cart.count as ccount,
                models.models as mmodels, models.price as mprice ,
                models.color as mcolor
            FROM cart, models 
            WHERE cart.midx = models.idx ";

    echo "sql = $sql <br>";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    if($data)
    {
        
        ?>

        <script>
            function deleteCart(pidx)
            {
                location.href='main.php?cmd=<?php echo $cmd?>&mode=delete&idx='+pidx;
            }
        </script>


        <div class="row">
            <div class="col-1 colLine">사진</div>
            <div class="col colLine">제품명</div>
            <div class="col colLine">색상</div>
            <div class="col colLine">사이즈</div>
            <div class="col colLine">가격</div>
            <div class="col colLine">수량</div>
            <div class="col colLine">합계</div>
            <div class="col colLine">비고</div>
        </div>
        <?php
        while($data)
        {
            $sum = $data["mprice"] * $data["ccount"];

            ?>
            <div class="row">
                <div class="col-1 colLine"><img src='data/img/bag1.jpg' class='img-fluid'> </div>
                <div class="col colLine"><?php echo $data["mmodels"]?></div>
                <div class="col colLine"><?php echo $data["ccolor"]?></div>
                <div class="col colLine"><?php echo $data["csize"]?></div>
                <div class="col colLine"><?php echo $data["mprice"]?></div>
                <div class="col colLine"><?php echo $data["ccount"]?></div>
                <div class="col colLine"><?php echo $sum ?></div>
                <div class="col colLine">
                    <button type="button" class="btn btn-danger btn-sm" onClick=deleteCart(<?php echo $data["cidx"]?>)>삭제</button>                
                </div>
            </div>
            <?php

            $data = mysqli_fetch_array($result);
        }

    }else
    {
        echo "No Item in Cart..";
    }
?>
