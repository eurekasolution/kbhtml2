<script>
    function testDebug()
    {
        var debug = document.querySelector("#debug");
        debug.value = debug.value + "ABCD\n";

        checkIf();
    }

    function checkIf()
    {
        var num = prompt("숫자를 입력하세요");
        if(num <0) 
        {
            var debug = document.querySelector("#debug");
            debug.value = debug.value + "0 이상의 수를 입력하세요.\n";
        }else
        {
            var debug = document.querySelector("#debug");
            debug.value = debug.value + "입력한 수는 "+ num + "입니다.\n";
        }
    }

    function ifTest()
    {
        if(false)
        {
            alert('true');
        }
    }

    ifTest();
</script>

<!--
    if(){}

    if(){} else {}

    if(){} else if(){} ... else{}
-->


<div class="row">
    <div class="col">
        <button type="button" class="btn btn-primary" onClick="testDebug()" >디버그 테스트</button>
    </div>
</div>

<div class="row">
    <div class="col">
        <textarea class="form-control" rows="10" id="debug"></textarea>
    </div>
</div>

