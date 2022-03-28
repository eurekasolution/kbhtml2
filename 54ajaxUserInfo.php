<?php

    include "db.php";
    $conn = connectDB();

    $idx = $_POST["idx"];
    $test = $_POST["test"];

    $sql = "select * from kbstar WHERE idx='$idx'  ";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    
    if($data)
    {
        // 1 : start : 1
        // 2 :  11
        // 3 : 21
        // n : (n-1) * 10 + 1
        $start = ($idx-1) * 10 + 1;
        // https://search.naver.com/search.naver?where=news&sm=tab_jum&query=%EA%B5%AD%EB%AF%BC%EC%9D%80%ED%96%89&start=
        ?>
        <div class="row">
            <div class="col colLine"> 
                <h5 class="text-primary"> 사용자 정보</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2 colLine">이름 </div>
            <div class="col colLine"><a href="https://search.naver.com/search.naver?where=news&sm=tab_jum&query=%EA%B5%AD%EB%AF%BC%EC%9D%80%ED%96%89&start=<?php echo $start ?>"><?php echo $data["name"] ?></a> </div>
        </div>
        <div class="row">
            <div class="col-2 colLine">아이디 </div>
            <div class="col colLine"><?php echo $data["id"] ?> </div>
        </div>
        <div class="row">
            <div class="col-2 colLine">나이 </div>
            <div class="col colLine"><?php echo $data["age"] ?> </div>
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