<script>
    function getCookie(cookieName)
    {
        let cookie = cookieName + '=';
        if(document.cookie.length > 0) // 저장된 쿠키가 있으면.
        {
            var offset = document.cookie.indexOf(cookie);

            if(offset != -1)
            {
                offset += cookie.length;
                end = document.cookie.indexOf(';', offset);

                if(end == -1)
                {
                    end = document.cookie.length;
                }    

                var returnValue = unescape(document.cookie.substring(offset, end));
                return returnValue;
            }
        }
    }
    function setCookieIfSaved()
    {
        // kbstarid, kbstarpass 저장된 것이 있으면, 가져와서 값넣기

        if(getCookie('kbstarid'))
        {
            var thisId = getCookie('kbstarid');
            //alert(thisId); // 암호화된 id

            var decrypto = CryptoJS.enc.Base64.parse(thisId);
            $("#kbstarid").val( decrypto.toString(CryptoJS.enc.Utf8) );
            $("#saveid").prop("checked", true);
        }

        if(getCookie('kbstarpass'))
        {
            var thisPass = getCookie('kbstarpass');
            //alert(thisId); // 암호화된 id

            var decrypto = CryptoJS.enc.Base64.parse(thisPass);
            $("#kbstarpass").val( decrypto.toString(CryptoJS.enc.Utf8) );
            $("#savepass").prop("checked", true);
        }
    }


    function setCookie(cookieName, value, expireDay)
    {
        let todayDate = new Date();
        todayDate.setDate(todayDate.getDate() + expireDay);

        let key = CryptoJS.enc.Utf8.parse(value);
        var base64 = CryptoJS.enc.Base64.stringify(key);

        document.cookie = cookieName + '=' + base64 + ';path=/; expires=' + todayDate.toGMTString() + ";";
        //alert(document.cookie);
        //alert(todayDate.toGMTString());
    }

    function checkCookieMd5()
    {
        let kbstarid = $("#kbstarid").val();
        //let kbstarid2 = document.querySelector("#kbstarid").value();
        //let kbstarid3 = document.getElementById('kbstarid').value();

        let kbstarpass = $("#kbstarpass").val();
        let saveid = $("#saveid").is(':checked');
        let savepass = $("#savepass").is(':checked');
        //alert('save id = ' + saveid);

        if(saveid == true)
        {
            setCookie('kbstarid', kbstarid, 31);
        }else
        {
            setCookie('kbstarid', kbstarid, 0);
        }

        if(savepass == true)
        {
            alert('비밀번호를 저장하고 있습니다.\n개인 PC가 아닌 경우 반드시 확인하세요!!');
            setCookie('kbstarpass', kbstarpass, 31);
        }else
        {
            setCookie('kbstarpass', kbstarpass, 0);
        }

        let md5pass = kbmd5( kbstarpass);
        $("#kbstarpass").val("");
        $("#kbstarpassmd5").val(md5pass);

        //return false;
    }

</script>

<?php

    if(isset($_GET["mode"]) and $_GET["mode"]=="login")
    {
        $myid = $_POST["kbstarid"];
        $mypass = $_POST["kbstarpass"];
        $mypass2 = $_POST["kbstarpassmd5"];
        echo "id = $myid, pass = $mypass, pass2 = $mypass2<br>";
    }
    /*
        create table member2 (
            idx int(10) auto_increment,
            id  char(20) unique,
            pass char(255),
            name char(20),
            level int(3) default '1',

            primary key(idx)
        );

        insert into member2 (id, pass, name, level) 
                    values('admin', 'b59c67bf196a4758191e42f76670ceba', '관리자', '9');
        insert into member2 (id, pass, name, level) 
                    values('test', 'b59c67bf196a4758191e42f76670ceba', '테스터', '1');

    */

?>

<div class="row">
    <div class="col">Cookie</div>
</div>

<form method="post" action="main.php?cmd=<?php echo $cmd?>&mode=login" onSubmit="return checkCookieMd5()">
<div class="row">
    <div class="col-2">
        <input type="text" name="kbstarid" id="kbstarid" class="form-control">
    </div>
    <div class="col-2">
        <input type="password"  name="kbstarpass" id="kbstarpass" class="form-control">
        <input type="text"  name="kbstarpassmd5" id="kbstarpassmd5" class="form-control">
    </div>
    <div class="col-2">
        <input type="checkbox" name="saveid" id="saveid"> ID저장
    </div>
    <div class="col-2">
        <input type="checkbox" name="savepass" id="savepass"> PW저장
    </div>
    <div class="col-2">
        <button type="submit" class="btn btn-primary" > 로그인</button>
    </div>
</div>
</form>

<script>
    setCookieIfSaved();
</script>

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
            <td><?php echo $data["content"]?></td>
        </tr>
        <?php
        $data = mysqli_fetch_array($result);
    }

?>
    </table>
</div>