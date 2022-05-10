<?php
    if(isset($_GET["mode"]) and $_GET["mode"] == "insert")
    {
        $title = $_POST["title"];
        $content = $_POST["content"];
        /*
                create table bbs (
                    idx int(10) auto_increment,
                    title   char(100),
                    content text,
                    primary key(idx)
                );
        */

        // < : &lt;

        $title = str_replace("<", "&lt;", $title);
        $title = str_replace(">", "&gt;", $title);

        $content = str_replace("<", "&lt;", $content);
        $content = str_replace(">", "&gt;", $content);

        $title = addslashes($title);
        $content = addslashes($content);
        
        $sql = "insert into bbs (title, content) values('$title', '$content') ";
        $result = mysqli_query($conn, $sql);

        echo "<xmp>$sql</xmp>
        <script>
            alert('글 등록 완료');
            location.href='main.php?cmd=$cmd';
        </script>
        ";
    }
?>


<div class="row">
    <div class="col">
        XSS 테스트 게시판
    </div>
</div>

<form method="post" action="main.php?cmd=<?php echo $cmd?>&mode=insert">
<div class="row">
    <div class="col-2">
        제목
    </div>
    <div class="col">
        <input type="text" name="title" class="form-control">
    </div>
</div>
<div class="row">
    <div class="col-2">
        내용
    </div>
    <div class="col">
        <textarea  name="content" class="form-control" rows="5"></textarea>
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-primary">등록</button>
    </div>
</div>
</form>

<div class="row">
    <table class='table'>
        <tr>
            <td>순서</td>
            <td>제목</td>
            <td>내용</td>
        </tr>
<?php
    $sql = "select * from bbs order by idx desc";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    while($data)
    {
        ?>
        <tr>
            <td><?php echo $data["idx"]?></td>
            <td><?php echo $data["title"]?></td>
            <td><textarea rows=5><?php echo $data["content"]?></textarea></td>
        </tr>
        <?php
        $data = mysqli_fetch_array($result);
    }

?>
    </table>
</div>