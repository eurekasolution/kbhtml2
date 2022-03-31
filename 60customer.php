<div class="row">
    <div class="col">
        <h5 class="text-primary">고객 관리</h5>
    </div>
</div>

<?php
    if(isset($_POST["keyword"]))
        $keyword = $_POST["keyword"];
    else if(isset($_GET["keyword"]))
        $keyword = $_GET["keyword"];
    else
        $keyword = "";

    if(isset($_POST["gender"]))
        $gender = $_POST["gender"];
    if(isset($_POST["name"]))
        $name = $_POST["name"];
    if(isset($_POST["birth"]))
        $birth = $_POST["birth"];
    if(isset($_POST["job"]))
        $job = $_POST["job"];
    if(isset($_POST["disabled"]))
        $disabled = $_POST["disabled"];
    if(isset($_POST["local"]))
        $local = $_POST["local"];
         


    if(isset($_POST["idx"]))
        $idx = $_POST["idx"];
    if(isset($_POST["mode"]))
        $mode = $_POST["mode"];

    if(isset($_GET["mode"]))
        $mode = $_GET["mode"];
    if(isset($_GET["idx"]))
        $idx = $_GET["idx"];

    if(isset($mode ) and $mode == "delete")
    {
        // delete from table where .
        $sql = "DELETE FROM kb_customer
                    WHERE idx='$idx' ";
        $result = mysqli_query($conn, $sql);
        $affectedCount = mysqli_affected_rows($conn);
        if($affectedCount ==1)
            $msg = "삭제 성공";
        else
            $msg = "삭제 실패";

        echo " $sql
        <script>
            alert('$msg');
            location.href='main.php?cmd=$cmd';
        </script>
        ";  
    }

    if(isset($mode ) and $mode == "update")
    {
        // update dept set a=b, c=d, ... where idx=..
        $sql = "UPDATE kb_customer SET 
                    name='$name', gender='$gender',
                    birth='$birth', job='$job', 
                    disabled='$disabled', local='$local'
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

    if(isset($mode ) and $mode == "insert")
    {
        //$age = 77;
        $sql = "INSERT INTO kb_customer 
                    (name, gender, birth, job, disabled, local) 
                    VALUES 
                    ('$name', '$gender', '$birth', '$job', '$disabled', '$local') ";
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

?>

<form method="post" action="main.php?cmd=<?php echo $cmd?>">
<input type="hidden" name="mode" value="insert">    
<div class="row">
    <div class="col">
        <input type="text" class="form-control" name="name" placeholder="이름">
    </div>
    <div class="col">
        <select  class="form-control" name="gender" >
            <option value='1'>남성</option>
            <option value='2'>여성</option>
        </select>
    </div>
    <div class="col">
        <input type="date" class="form-control" name="birth" placeholder="생년월일">
    </div>
    <div class="col">
        <input type="text" class="form-control" name="job" placeholder="직업">
    </div>
    <div class="col">
        <select  class="form-control" name="disabled" >
            <option value='0'>장애X</option>
            <option value='1'>장애O</option>
        </select>
    </div>
    <div class="col">
        <select  class="form-control" name="local" >
            <option value='서울'>서울</option>
            <option value='경기'>경기</option>
            <option value='충남'>충남</option>
            <option value='충북'>충북</option>
            <option value='강원'>강원</option>
            <option value='제주'>제주</option>
            <option value='전남'>전남</option>
            <option value='전북'>전북</option>
            <option value='경남'>경남</option>
            <option value='경북'>경북</option>
            <option value='기타'>기타</option>

        </select>
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

<form method="post" action="main.php?cmd=<?php echo $cmd?>">
<div class="row">
    <div class="col-2">
        검색어
    </div>
    <div class="col">
        <input type="text" name="keyword" value="<?php echo $keyword?>" class="form-control" placeholder="검색어">
    </div>
    <div class="col-2">
        <button type="submit" class="btn btn-primary">검색</button>
    </div>
</div>
</form>


<!-- 
    순서    아이디  이름    비번    비고
-->

<script>
    function confirmDelete(pidx)
    {
        if(confirm('삭제된 데이터는 복구할 수 없습니다.\n정말 삭제하시겠습니까?'))
        {
            location.href='main.php?cmd=<?php echo $cmd?>&mode=delete&idx='+pidx;
        }
        
    }
</script>

<div class="row">
    <div class="col-1 colLine">순서</div>
    <div class="col colLine">이름</div>
    <div class="col-1 colLine">성별</div>
    <div class="col colLine">생일</div>
    <div class="col colLine">직업</div>
    <div class="col-1 colLine">장애</div>
    <div class="col-1 colLine">지역</div>
    <div class="col-3 colLine">비고</div>
</div>

<?php
    if($keyword)
    {
        $sql = "SELECT count(*) as total  FROM kb_customer WHERE name like '%$keyword%' ";
    }else
    {
        $sql = "SELECT count(*) as total  FROM kb_customer ";
    }
        
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    $total = $data["total"];
    //echo "total = $total <br>";
    $LPP = 10; // total/ 3   , Line per Page
    $PPG = 5; // page per group


    $totalPage = ceil($total / $LPP);
    //echo "totalPage = $totalPage <br>";


    if(isset($_GET["page"]))  // main.php?cmd=58input&page=3
    {
        $page = $_GET["page"];
    }

    if(!isset($page))
        $page = 1;

    // page 1-5 : 1
    // page 6-10 : 2
    //      11-15 : 3
    //            :   n
    $group = ceil($page / $PPG);
    $totalGroup = ceil($totalPage / $PPG);
    //echo "group = $group , totalGroup = $totalGroup<br>";
    

    

    /*
        1p  : 0 ~3
        2p  : 3 ~3
        3p  : 6 ~3
        n   :(n-1)*3
    */

    $start = ($page -1) * $LPP;

    if($keyword)
    {
        $sql = "SELECT * FROM kb_customer WHERE name like '%$keyword%' ORDER BY name ASC LIMIT $start, $LPP";
    }else
    {
        $sql = "SELECT * FROM kb_customer ORDER BY name ASC LIMIT $start, $LPP";
    }
    
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    while($data)
    {
        // 출력
        ?>
        <form method="post" action="main.php?cmd=<?php echo $cmd?>">
        <input type="hidden" name="mode" value="update">
        <input type="hidden" name="idx" value="<?php echo $data["idx"] ?>">
        <div class="row">
            <div class="col-1 colLine"><?php echo $data["idx"] ?></div>
            <div class="col colLine"><input type="text" name="name" class="form-control" value='<?php echo $data["name"] ?>'></div>
            <div class="col-1 colLine"><input type="text" name="gender" class="form-control" value='<?php echo $data["gender"] ?>'></div>
            <div class="col colLine"><input type="text" name="birth" class="form-control" value='<?php echo $data["birth"] ?>'></div>
            <div class="col colLine"><input type="text" name="job" class="form-control" value='<?php echo $data["job"] ?>'></div>
            <div class="col-1 colLine"><input type="text" name="disabled" class="form-control" value='<?php echo $data["disabled"] ?>'></div>
            <div class="col-1 colLine"><input type="text" name="local" class="form-control" value='<?php echo $data["local"] ?>'></div>
            <div class="col-3 colLine">
                <button type="submit" class="btn btn-danger btn-sm">수정</button>
            
                <button type="button" class="btn btn-danger btn-sm" onClick=confirmDelete(<?php echo $data["idx"] ?>)>삭제</button>

                <button type="button" class="btn btn-primary btn-sm" onClick=getUserInfo(<?php echo $data["idx"] ?>)>보기</button>
            </div>
        </div>
        </form>
        <?php
        $data = mysqli_fetch_array($result);
    }

    ?>
    <div class="row">
        <div class="col colLine text-center">
            <ul class="pagination justify-content-center">
                
                <?php

                    // 맨 앞으로기능..
                    if($group >=3)
                    {
                        echo "<li class='page-item'><a class='page-link' href='main.php?cmd=$cmd&page=1&keyword=$keyword'><span class='material-icons icon'>first_page</span></a></li>";
                    }

                    // 이전그룹가기
                    // 
                    if($group >=2)
                    {
                        $prevPage = ($group -2 )* $PPG +1;
                        echo "<li class='page-item'><a class='page-link' href='main.php?cmd=$cmd&page=$prevPage&keyword=$keyword'><span class='material-icons icon'>chevron_left</span></a></li>";
                    }
                    // 11, 12, 13, 14, 15 (group -2) * 5 + 1


                    for($i = ($group-1) *$PPG  +1; $i <= $group * $PPG ; $i++  )
                    {
                        if($i<=$totalPage)
                        {
                            if($i == $page)
                                $activeMark = "active";
                            else
                                $activeMark = "";
                            echo "<li class='page-item $activeMark'><a class='page-link' href='main.php?cmd=$cmd&page=$i&keyword=$keyword'>$i</a></li> ";
                        }else{
                            break;
                        }
                    }

                    // 다음 그룹으로 가기
                    if($group < $totalGroup)
                    {
                        $nextPage = ($group )* $PPG +1;
                        echo "<li class='page-item'><a class='page-link' href='main.php?cmd=$cmd&page=$nextPage&keyword=$keyword'><span class='material-icons icon'>chevron_right</span></a></li>";   
                    }

                    // 맨 마지막으로 가기

                    if($group < $totalGroup -1)
                    {
                        $lastGroupPage = ($totalGroup -1) * $PPG +1;
                        echo "<li class='page-item'><a class='page-link' href='main.php?cmd=$cmd&page=$lastGroupPage&keyword=$keyword'><span class='material-icons icon'>last_page</span></a></li>";
                    }

                ?>
            </ul>
        </div>
    </div>


<!--
    <div class="row">
        <div class="col colLine text-center">
        <?php
            // 1Group
            // 1 2 3 4 5 >  >>
            // 2Group
            // <  6 7 8 9 10 > >>
            //3Group
            // << < 11 12 13 14 15 >  >>

            // LastGroup
            // << < 4996 4997 4998 4999 5000



            for($i=1; $i<=$totalPage; $i++)
            {
                if($i == $page)
                    echo "<a href='main.php?cmd=$cmd&page=$i'><span class='badge bg-danger'>$i</span></a> ";
                else
                    echo "<a href='main.php?cmd=$cmd&page=$i'><span class='badge bg-secondary'>$i</span></a> ";
            }
        ?>
        </div>
    </div>
        -->

    <?php

?>
