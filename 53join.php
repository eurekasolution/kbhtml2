<div class="row">
    <div class="col">
        <h5 class="text-primary">회원 가입</h5>
    </div>
</div>

<?php
    if(isset($_POST["id"]))
        $id = $_POST["id"];
    if(isset($_POST["name"]))
        $name = $_POST["name"];
    if(isset($_POST["pass"]))
        $pass = $_POST["pass"];
    if(isset($_POST["mode"]))
        $mode = $_POST["mode"];

    if(isset($mode ) and $mode == "join")
    {
        $sql = "INSERT INTO members (id, name, pass, level) 
                    VALUES ('$id', '$name', password('$pass'), '1') ";
        $result = mysqli_query($conn, $sql);
        $affectedCount = mysqli_affected_rows($conn);
        if($affectedCount ==1)
            $msg = "가입 성공";
        else
            $msg = "가입 실패";

        echo "
        <script>
            alert('$msg');
            location.href='main.php?cmd=53join';
        </script>
        ";  
    }

    
?>

<form method="post" action="main.php?cmd=53join">
<input type="hidden" name="mode" value="join">    
<div class="row">
    <div class="col">
        <input type="text" class="form-control" name="id" placeholder="ID">
    </div>
    <div class="col">
        <input type="text" class="form-control" name="pass" placeholder="PASSWD">
    </div>
    <div class="col">
        <input type="text" class="form-control" name="name" placeholder="실명입력">
    </div>
    <div class="col">
        <button type="submit" class="btn btn-primary">가입</button>
    </div>
</div>
<div class="row">
    <div class="col" id="result">
        
    </div>
</div>

</form>

