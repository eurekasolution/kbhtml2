<script>
    function calcAge()
    {
        var age = Number(prompt("Insert Age"));
        age = age + 1;

        var currentYear = 2022;
        var birthYear = 2000;
        var age2 = currentYear - birthYear + 1;
        //alert("당신의 나이는 " + age + "입니다.\n\rage2 = "+ age2);

        console.log("age type = " + typeof age);
        console.log("age2 type = " + typeof age2);

        // 엔터(Enter)
        // \r : carrage return
        // \f : 

        document.querySelector("#kbinfo").innerHTML = "당신의 나이는 <span class='text-danger'>"+ age + "</span>세 입니다.";

        var seasons = ["spring", "summer", "가을", "겨울"];
        console.log(seasons + " [1] = " + seasons[1]);

        // Dictionary , Map ==> Key, Value 쌍 
        // cf. JSON : JavaScript Object Notation
        var kim = { firstName : "KilDong", familyName : "Kim", age : 12 };
        console.log("성씨 = " + kim["familyName"]);

        var familyName = "age";
        console.log("성씨 = " + kim[familyName]);


    }
</script>

<div class="row">
    <div class="col">
        <button type="button" class="btn btn-primary" onClick="calcAge()" >나이 계산하기</button>
    </div>
</div>

<div class="row">
    <div class="col text-primary" id="kbinfo">
    
    </div>
</div>
<!--
    자바 : 변수의 종류 : 기초 자료형, 참조형 자료형
    JS : 기본형 , 복합형
        기본형 : number, string, boolean, undefined, null
        복합형 : array, object

    숫자형 (정수 Integer, 소수 Float)
    문자형 : 큰따옴, 작은 따옴표가 허용
            "123"
    논리 : true, false
    null : 없다.

    연산자 : %, ++, --, 

-->
<script>
    function calculateRate()
    {
        //var orgPrice = Number(document.querySelector("#org").value);
        var orgPrice = Number( document.getElementById("org").value );

        console.log("orgPrice = " + orgPrice);
        var rate = parseInt(document.querySelector("#rate").value);
        console.log("rate = " + rate);

        var result = orgPrice * rate / 100;
        document.querySelector("#result").innerHTML = "합 = "+ result + "입니다.";


    }
</script>

<!--
    if (a === b)
    if( a !== b)
    && : 둘다 true일 때만 true
    || : 둘다 false일 때만 false
    ++, <=
-->

<div class="row">
    <div class="col-2">
        원금
    </div>
    <div class="col">
        <input type="text" name="org" id="org">
    </div>
</div>
<div class="row">
    <div class="col-2">
        이자(%)
    </div>
    <div class="col-8">
        <input type="text" name="rate" id="rate">
    </div>
    <div class="col">
        <button type="button" class="btn btn-primary" onClick="calculateRate()">계산</button>
    </div>
</div>

<div class="row">
    <div class="col text-primary" id="result">

    </div>
</div>



