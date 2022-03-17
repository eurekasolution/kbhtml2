
<div class="row">
    <div class="col">
        <textarea class="form-control" rows="10" id="debug"></textarea>
    </div>
</div>

<div class="row">
    <div class="col">
        <input type="text" id="op1" class="form-control" value="0" onKeyUp="calculate()">
    </div>
</div>
<div class="row">
    <div class="col">
        <input type="text" id="op2" class="form-control" value="0" onKeyUp="calculate()">
    </div>
</div>

<div class="row">
    <div class="col">
        <input type="text" id="op3" class="form-control" value="0">
    </div>
</div>


<div class="row">
    <div class="col">
        <input type="text" id="result" class="form-control" value="0" disabled>
    </div>
</div>

<script>

    function fact(n)
    {
        if(n==1)
            return 1;

        return n * fact(n-1)
    }

    var f = fact(5);
    console.log("5! = " + f);

/*
    let : ES6 JS    () => { }

    a = 3; // 전역변수 global variable
    var x; // 지역변수 local variable
    Variable Life Scope


    hi = function() {return 3; }

    hi = ()=>{return 3; }
    hi = ()=> 3;

    let a = function(idx) {  }
    lt a = idx => 

*/

    
    

    function calculate()
    {
        var vValue = 20;
        gValue = 300;
        var op1 = document.querySelector("#op1"); // 입력창
        var op2 = document.querySelector("#op2"); // 입력창
        var result = document.querySelector("#result"); // 입력창


        var value = parseInt(op1.value) + parseInt(op2.value) +gValue +vValue;
        if(isNaN(value))
        {
            result.value = 0;
            resturn;
        }
        result.value = value;
        myFunction();
    }

    function myFunction()
    {
        var debug = document.querySelector("#debug");
       
        // const : read only variable
        const pi = 3.14;

        

        let sum = 0;
        for(let i = 1; i<=10; i++)
        {
            sum = sum + i;
        }


        // ....
        let y = 77;    
        debug.value = "gValue = " + gValue + ", y = " + y + ", sum = " + sum;

        let sum1 = add(3, 4);
        console.log("sum = " + sum1);
    
        var foo = ( function() {
            console.log("foo.....");
            return 77;
        }() );
        console.log("after foo = " + foo);
    }

    function add(a, b) // parameter는 이름만
    {
        var sum = a + b;
        return sum;
    }

</script>
