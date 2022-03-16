<div class="row">
    <div class="col">
        <button type="button" class="btn btn-primary" onClick="calcAge()" >나이 계산하기</button>
    </div>
</div>

<script>
    function cloneData()
    {
        var input = document.querySelector("#input").value;
        var len = input.length;

        if(input)
        {
            console.log("TRUE : " + input);
        }else
        {
            console.log("FALSE : " + input);
        }

        if(len >10)
        {
            console.log("10보다 큽니다.");
        }else
        {
            console.log("10이하 입니다.")
        }

        // a> b? true : false

        //len > 5 ? alert('Large') : console.log("Small"); 

        var objClone =  document.querySelector("#clone");
        objClone.value = input;
        document.querySelector("#cloneLength").value = len;
    }

    function checkNull()
    {
        var name = prompt("이름을 입력하세요");
        if(name != null)
        { // 확인
            if(name)
            {
                console.log("값이 있음.");
            }else
            {
                console.log("확인은 했는데, 값이 없음.");
            }
        }else
        { // 취소
            console.log("취소");
        }
    }



</script>

<div class="row">
    <div class="col text-primary">
        <button type="button" class="btn btn-primary" onClick="checkNull()">Null 검사</button>
    </div>
</div>

<div class="row">
    <div class="col text-primary">
        <input type="text" id="input" class="form-control" onKeyUp="cloneData()">
    </div>
</div>

<div class="row">
    <div class="col text-primary">
        <input type="text" id="clone" class="form-control">
    </div>
</div>
<div class="row">
    <div class="col text-primary">
        <input type="text" id="cloneLength" class="form-control">
    </div>
</div>
