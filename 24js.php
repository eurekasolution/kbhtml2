<script>
    function calcAge()
    {
        var age = Number(prompt("Insert Age"));
        age = age + 1;

        var currentYear = 2022;
        var birthYear = 2000;
        var age2 = currentYear - birthYear + 1;
        alert("당신의 나이는 " + age + "입니다.\n\rage2 = "+ age2);

        console.log("age type = " + typeof age);
        console.log("age2 type = " + typeof age2);
        
        // 엔터(Enter)
        // \r : carrage return
        // \f : 

        document.querySelector("#kbinfo").innerHTML = "당신의 나이는 <span class='text-danger'>"+ age + "</span>세 입니다.";

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

-->
<div class="row">
    <div class="col text-primary">

    </div>
</div>