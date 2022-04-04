<div class="row">
    <div class="col">
        <h5 class="text-primary">모델 관리</h5>
    </div>
</div>

<?php
    if(isset($_POST["mode"]))
    $mode = $_POST["mode"];

    if(isset($_POST["models"]))
        $models = $_POST["models"];
    if(isset($_POST["size"]))
        $size = $_POST["size"];
    if(isset($_POST["color"]))
        $color = $_POST["color"];
    if(isset($_POST["price"]))
    {
        $price = $_POST["price"];
        $price = str_replace(",", "", $price);
    }

    if(isset($mode ) and $mode == "insert")
    {
        //$age = 77;
        $sql = "INSERT INTO models (models, size, color, price) 
                    VALUES ('$models', '$size', '$color', '$price') ";
        $result = mysqli_query($conn, $sql);
        $affectedCount = mysqli_affected_rows($conn);
        if($affectedCount ==1)
            $msg = "등록 성공";
        else
            $msg = "등록 실패";

        echo " $sql
        <script>
            alert('$msg');
            location.href='main.php?cmd=$cmd';
        </script>
        ";  
    }

    if(isset($mode ) and $mode == "update")
    {
        if(isset($_POST["idx"]))
        {
            $idx = $_POST["idx"];
        }
        //$age = 77;
        $sql = " UPDATE models SET 
                    models='$models', size='$size',
                    color='$color', price='$price'
                WHERE idx='$idx' ";
        
        $result = mysqli_query($conn, $sql);
        $affectedCount = mysqli_affected_rows($conn);
        if($affectedCount ==1)
            $msg = "변경 성공";
        else
            $msg = "변경 실패";

        echo " $sql
        <script>
            alert('$msg');
            location.href='main.php?cmd=$cmd';
        </script>
        ";  
    }

?>

<form method="post" action="main.php?cmd=<?php echo $cmd?>">
<input type="hidden" name="mode" value="insert">    
<div class="row">
    <div class="col">
        <input type="text" class="form-control" name="models" placeholder="모델명">
    </div>
    <div class="col">
        <input type="text" class="form-control" name="size" placeholder="size(,로 나열)">
    </div>
    <div class="col">
        <input type="text" class="form-control" name="color" placeholder="color(,로 나열)">
    </div>
    <div class="col">
        <input type="text" class="form-control" name="price" placeholder="제품가격">
    </div>
    <div class="col">
        <button type="submit" class="btn btn-primary">등록</button>
    </div>
</div>
<div class="row">
    <div class="col" id="result">
        
    </div>
</div>

</form>

<!-- 
    순서    제품명, 사이즈, 색상, 가격, 비고
-->

<div class="row">
    <div class="col colLine">순서</div>
    <div class="col colLine">제품명</div>
    <div class="col colLine">사이즈</div>
    <div class="col colLine">색상</div>
    <div class="col colLine">가격</div>
    <div class="col colLine">비고</div>
</div>

<?php
    $sql = "SELECT * FROM models ORDER BY models ASC";
    echo "sql = $sql <br>";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    while($data)
    {
        // 출력
        ?>
        <form method="post" action="main.php?cmd=<?php echo $cmd?>">
        <input type="hidden" name="idx" value="<?php echo $data["idx"] ?>">
        <input type="hidden" name="mode" value="update">
        <div class="row">
            <div class="col colLine"><?php echo $data["idx"] ?></div>
            <div class="col colLine"><input type="text" name="models" class="form-control" value="<?php echo $data["models"] ?>" ></div>
            <div class="col colLine"><input type="text" name="size" class="form-control" value="<?php echo $data["size"] ?>" ></div>
            <div class="col colLine"><input type="text" name="color" class="form-control" value="<?php echo $data["color"] ?>" ></div>
            <div class="col colLine"><input type="text" name="price" class="form-control" value="<?php echo $data["price"] ?>" ></div>
            <div class="col colLine">
                <button type="submit" class="btn btn-primary btn-sm" >수정</button>
            </div>
        </div>
        </form>
        <?php
        $data = mysqli_fetch_array($result);
    }
?>
