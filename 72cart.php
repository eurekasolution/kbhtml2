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
    $sql = "SELECT * from cart WHERE time ='$_SESSION[$sessTime]' order by idx asc";
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
            $mSql = "select * from models where idx='$data[midx]' ";
            $mResult = mysqli_query($conn, $mSql);
            $mData = mysqli_fetch_array($mResult);

            $sum = $data["price"] * $data["count"];

            ?>
            <div class="row">
                <div class="col-1 colLine"><img src='data/img/bag1.jpg' class='img-fluid'> </div>
                <div class="col colLine"><?php echo $mData["models"]?></div>
                <div class="col colLine"><?php echo $data["color"]?></div>
                <div class="col colLine"><?php echo $data["size"]?></div>
                <div class="col colLine"><?php echo $data["price"]?></div>
                <div class="col colLine"><?php echo $data["count"]?></div>
                <div class="col colLine"><?php echo $sum ?></div>
                <div class="col colLine">
                    <button type="button" class="btn btn-danger btn-sm" onClick=deleteCart(<?php echo $data["idx"]?>)>삭제</button>                
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
