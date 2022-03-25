<div class="row">
    <div class="col">
        <input type="text" name="key" id="key" class="form-control" onKeyUp=instanceSearch()>
    </div>
</div>

<div class="row">
    <div class="col">
        <div id="result">

        

        </div>
    </div>
</div>


<script>
    function instanceSearch()
    {
        let key = document.querySelector("#key").value;
        let result = document.querySelector("#result");

        let param = "key="+key;
        $.ajax({
            url: "47ajaxServer.php",
            data:  param,
            type: "POST",
            cache: false,
            success: function(data) {
                //alert(data);
                $("#result").html(data);
            } 

        });

        // 45ajaxServer.php?key=키보드입력&age=13

        /*
        let regex = /^[a-zA-Z0-9]{4,10}$/;
        if(!regex.test(key))
        {
            result.className = "text-danger";
            result.innerHTML = "4~10 자 사이의 영문, 숫자만 가능합니다.";
        }else
        {
            result.className = "text-success";
            result.innerHTML = "가능한 아이디입니다.";
        }
        */
        
        /*
        if(key.length>=4 && key.length<=10)
        {
            result.className = "text-success";
            result.innerHTML = "가능한 아이디입니다.";
        }else
        {
            result.className = "text-danger";
            result.innerHTML = "4~10글자를 입력하세요.";
        }
        */

        // 키로 입력된 값이 4~10글자이면
        // result에 가능한 아이디입력입니다.
        // 아닌경우 4~10를 입력하세요.

    }
</script>