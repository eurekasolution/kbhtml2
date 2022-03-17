
<div class="row">
    <div class="col">
        <textarea class="form-control" rows="10" id="debug"></textarea>
    </div>
</div>

<!--
    input에 값을 입력하자 마자...
    1~input 합을 display에 출력하시오.
-->

<div class="row">
    <div class="col">
        <input type="text" class="form-control" id="input" onKeyUp="sum()">
    </div>
</div>

<div class="row">
    <div class="col">
        <input type="number" class="form-control" id="number"  value="0" onChange="total()">
    </div>
</div>

<div class="row">
    <div class="col text-primary" id="display">
       
    </div>
</div>

<div class="row">
    <div class="col text-primary">
       <button type="button" class="btn btn-outline-primary form-control" onMouseOut="clear99()" onMouseOver="set99()">구구단표</button>
    </div>
</div>

<div class="row">
    <div class="col text-primary" id="table1"></div>
    <div class="col text-primary" id="table2"></div>
    <div class="col text-primary" id="table3"></div>
    <div class="col text-primary" id="table4"></div>
    <div class="col text-primary" id="table5"></div>
    <div class="col text-primary" id="table6"></div>
    <div class="col text-primary" id="table7"></div>
    <div class="col text-primary" id="table8"></div>
    <div class="col text-primary" id="table9"></div>
</div>

<script>
    function clear99()
    {
        for(var i=1; i<=9; i++)
        {
            var mytable = document.querySelector("#table"+i);
            mytable.innerHTML = "";
        }
    }
    function set99()
    {
        for(var i=1; i<=9; i++)
        {
            //1단 ~ 9단
            var mytable = document.querySelector("#table"+i);
            mytable.innerHTML = "";

            var html = "";
            for(var j = 1; j<=9; j++)
            {
                var value = i * j;
                //mytable.innerHTML = mytable.innerHTML + value + "<br>"; 
                html = html + value + "<br>";
            }
            mytable.innerHTML = html;
        }
    }


    function total()
    {
        var number = document.querySelector("#number");
        var display = document.querySelector("#display");

        var sum = 0;
        var no = parseInt(number.value);

        if(no <0)
        {
            alert("0이상만 가능합니다.");
            number.value = "0";
            return;
        }

        for(var i=1; i<=no; i++)
        {
            sum = sum + i;
        }

        display.innerHTML = sum;

    }

    function sum()
    {
        var input = document.querySelector("#input");
        var display = document.querySelector("#display");

        var sum = 0;
        var no = parseInt(input.value);

        for(var i=1; i<=no; i++)
        {
            sum = sum + i;
        }

        display.innerHTML = sum;

    }    
</script>

