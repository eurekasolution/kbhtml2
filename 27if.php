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

    function switchTest()
    {
        
        var debug = document.querySelector("#debug");
        console.log(debug);

        input = "3";

        switch(input)
        {
            case "1":
                debug.value = debug.value + "switch 1을 선택했습니다.\n";
                break;
            case "2":
                debug.value = debug.value + "switch 2을 선택했습니다.\n";
                break;
            case "3": 
                console.log("dv = " + debug);
                debug.value = "switch 3을 선택했습니다.";
                break;
            case "4":
                debug.value = debug.value + "switch 4을 선택했습니다.\n";
                break;
            default:
                debug.value = debug.value + "switch 알 수 없습니다..\n";
                break;
        }


    }




    function ifTest()
    {
        if(false)
        {
            alert('true');
        }
    }

    //switchTest();
</script>

<!--
    if(){}

    if(){} else {}

    if(){} else if(){} ... else{}

    for(var i=1; i<=10; i++)
    {

    }
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

<div class="row">
    <div class="col">
        <input type="text" class="form-control" id="table" onKeyUp="forTest()">
    </div>
</div>

<div class="row">
    <div class="col" id="display">
       
    </div>
</div>

<script>

    function forTest()
    {
        var table = document.querySelector("#table");
        var display = document.querySelector("#display");
        var no = parseInt(table.value); 
        for(var i=1; i<=10; i++)
        {
            console.log(no + " * " + i + " = " + (no * i));
            if(i == 1)
            {
                display.innerHTML = "";
            }            

            display.innerHTML = display.innerHTML + no + " * " +  i + " = " + (no * i) + "<br>";

        }
    }


    //forTest();
</script>
