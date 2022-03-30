<div class="row">
    <div class="col">
        <h5 class="text-primary">학생등록</h5>
    </div>
</div>

<?php
    if(isset($_POST["major"]))
        $major = $_POST["major"];
    if(isset($_POST["name"]))
        $name = $_POST["name"];
    if(isset($_POST["age"]))
        $age = $_POST["age"];
    if(isset($_POST["idx"]))
        $idx = $_POST["idx"];
    if(isset($_POST["mode"]))
        $mode = $_POST["mode"];

    if(isset($mode ) and $mode == "update")
    {
        // update dept set a=b, c=d, ... where idx=..
        $sql = "UPDATE dept SET 
                    name='$name', major='$major', age='$age'
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
            location.href='main.php?cmd=58insert';
        </script>
        ";  
    }

    if(isset($mode ) and $mode == "insert")
    {
        //$age = 77;
        $sql = "INSERT INTO dept (name, major, age) 
                    VALUES ('$name', '$major', '$age') ";
        $result = mysqli_query($conn, $sql);
        $affectedCount = mysqli_affected_rows($conn);
        if($affectedCount ==1)
            $msg = "등록 성공";
        else
            $msg = "등록 실패";

        echo " $sql
        <script>
            alert('$msg');
            location.href='main.php?cmd=58insert';
        </script>
        ";  
    }

?>

<form method="post" action="main.php?cmd=58insert">
<input type="hidden" name="mode" value="insert">    
<div class="row">
    <div class="col">
        <input type="text" class="form-control" name="name" placeholder="이름">
    </div>
    <div class="col">
        <input type="text" class="form-control" name="major" placeholder="학과">
    </div>
    <div class="col">
        <input type="text" class="form-control" name="age" placeholder="나이">
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
    순서    아이디  이름    비번    비고
-->

<div class="row">
    <div class="col colLine">순서</div>
    <div class="col colLine">이름</div>
    <div class="col colLine">학과</div>
    <div class="col colLine">나이</div>
    <div class="col colLine">비고</div>
</div>

<?php
    $sql = "SELECT * FROM dept ORDER BY name ASC";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    while($data)
    {
        // 출력
        ?>
        <form method="post" action="main.php?cmd=58insert">
        <input type="hidden" name="mode" value="update">
        <input type="hidden" name="idx" value="<?php echo $data["idx"] ?>">
        <div class="row">
            <div class="col colLine"><?php echo $data["idx"] ?></div>
            <div class="col colLine"><input type="text" name="name" class="form-control" value='<?php echo $data["name"] ?>'></div>
            <div class="col colLine"><input type="text" name="major" class="form-control" value='<?php echo $data["major"] ?>'></div>
            <div class="col colLine"><input type="text" name="age" class="form-control" value='<?php echo $data["age"] ?>'></div>
            <div class="col colLine">
                <button type="submit" class="btn btn-danger btn-sm">수정</button>
            
                <button type="button" class="btn btn-primary btn-sm" onClick=getUserInfo(<?php echo $data["idx"] ?>)>보기</button>
            </div>
        </div>
        </form>
        <?php
        $data = mysqli_fetch_array($result);
    }
?>
