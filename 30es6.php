
<script>
    function add(a, b)
    {
        return a + b;
    }

    let result = add(10, 20);
    console.log("result = " + result);

    /* 익명 함수 : 이름이 없는 함수
        함수 자체가 식(Expresion) 값을 즉시 할당할 때 사용한다.단발성
        Function Pointer
    */
    let add2 = function(a, b) { return a+b}
    let result2 = add2(1, 2);
    console.log("result2 = " + result2);

    /*
        즉시 실행함수 : 함수를 정의함과 동시에 실행
        표기법1 :
            ( function(){ 

            } )();
        
        표기법 2:

            ( function(){

            }()  );

        약식 표기법1 :
            (function(){ })();
        약식 표기법2:
            (function(){}());
    */

    let result3 = (function(){
            return 100 + 200}() 
        );
    console.log("result3 = " + result3);

    // 파라미터가 있는 경우
    let result4 = ( function(a, b) {
        return a + b;
     }(11, 22));
    
     console.log("result4 = " + result4);

    /*
        화살표 함수 :  => 
        1. 매개 변수가 없는 경우,
        2. 파라미터가 1개인 경우
        3. 파라미터가 2개 이상인 경우
    */

    const hiFunc = function(){return "Hello JS World"; }
    console.log("hiFunc = " + hiFunc);
    let hi = hiFunc();  // add2
    console.log("hi = " + hi);

    // 파라미터가 없을 때
    let hiFunc2 = () => { return "Hello JS ES6 World" }
    let hi2 = hiFunc2();
    console.log("hi2 = " + hi2);

    // 파라미터가 1개인 경우
    let hiFunc3 = function(user) { 
        console.log("Hi~~ " + user);
        return "ok";
     }

    let hi3 = hiFunc3("kim");
    console.log("hi3 = " + hi3);

    let hiFunc4 = user => {    // hiFunc4 (user) => {}
        console.log("Hi..." + user);
        return "okArrow";
    }
    
    let hi4 = hiFunc4("Park");
    console.log("hi4 = " + hi4);

    // let getSumFunc = function(a, b){ return a + b;}

    let getSumFunc = (a, b) => { return a + b; }
    let resultSum = getSumFunc(111, 222);
    console.log("resultSum = " + resultSum);

    // 함수속의 코드가 1줄은 다음과 같이 표현할 수 있다.
    let getSumFunc2 = (a, b) => a + b;
    let resultSum2 = getSumFunc2(111, 222);
    console.log("resultSum2 = " + resultSum2);
</script>