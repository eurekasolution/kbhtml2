<?php
    if(isset($_POST["url"]))
    {
        $url = $_POST["url"];
    }else
    {
        $url = "";
    }

    echo "url = $url <br>";


        // CURL : cURL : Client URL
        // wget https://kbstar.com

    if(isset($_GET["page"]))
    {
        $page = $_GET["page"];
    }else
    {
        $page = 1;
    }
        echo "page = $page <br>";
        // 1 - 1
        // 2 - 11
        // 3 - 21
        // 4 - 31
        // n - (n-1)* 10 + 1 
        $start = ($page -1) * 10 +1;

        $OPENURL = "https://search.naver.com/search.naver?where=news&sm=tab_jum&query=%EA%B5%AD%EB%AF%BC%EC%9D%80%ED%96%89&start=$start";
        // init
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $OPENURL);  // URL 지정
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // 요청결과를 문자열로 반환
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // 원격서버의 인증서 유효성 검사
        $response = curl_exec($curl);

        // Save to DB

        curl_close($curl);



?>
<form method="post" action="main.php?cmd=49crawling">
<div class="row">
    <div class="col">
        <input type="text" name="url" class="form-control">
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-primary">크롤링</button>
    </div>
</div>

<div class="row">
    <div class="col">
        <textarea class="form-control" rows="15">
            <?php
                if(isset($response))
                {
                    echo $response;
                }
            ?>
        </textarea>
    </div>
</div>
</form>

<?php
    $nextPage = $page + 1;


    if($page >=10)
        exit();
?>


<script>
    function repeatCrawling()
    {
        setTimeout( location.href='main.php?cmd=49crawling&page=<?php echo "$nextPage"; ?>', 3000);
        
    }


    repeatCrawling();
</script>
 
