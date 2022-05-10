<script>
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

    function checkCookie()
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

    }

</script>


<div class="row">
    <div class="col">Cookie</div>
</div>

<form>
<div class="row">
    <div class="col-2">
        <input type="text" name="kbstarid" id="kbstarid" class="form-control">
    </div>
    <div class="col-2">
        <input type="password" value="1111" name="kbstarpass" id="kbstarpass" class="form-control">
    </div>
    <div class="col-2">
        <input type="checkbox" name="saveid" id="saveid"> ID저장
    </div>
    <div class="col-2">
        <input type="checkbox" name="savepass" id="savepass"> PW저장
    </div>
    <div class="col-2">
        <button type="button" class="btn btn-primary" onClick=checkCookie()> 로그인</button>
    </div>
</div>
</form>

