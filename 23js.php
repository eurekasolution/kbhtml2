JS  연습<br>

<script>

    
    confirm("Javascript Confirm");
    var name = prompt("Javascript Prompt");
    alert("Javascript Alert... Hi " + name);

    function checkError()
    {
        var f = document.loginForm;

        if(f.id.value == "")
        {
            alert("아이디를 입력하세요1");
            f.id.focus();
            return false;
        }

        if(document.loginForm.id.value == "")
        {
            alert("아이디를 입력하세요2");
            document.loginForm.id.focus();
            return false;
        }
    }
</script>

<form name="loginForm" method="post" onSubmit="return checkError()"  action="test.php">
    <input type="text" name="id" > 
    <button type="submit" class="btn btn-primary">로그인</button>
</form>