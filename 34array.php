<script>
    // 1. 
    var lotto = [1, 2, 3, 4, 10];
    console.log("lotto = " + lotto);
    for(let i = 0; i<lotto.length; i++)
    {
        // lotto[0] = 1;
        // lotto[1] = 2;
        console.log("lotto[" + i + "] = " + lotto[i]);
        console.log( (i+1) + ":" + lotto[i]);
    }
    let books = ["JS", "HTML", 123,  "Python"];
    console.log("books = " + books);

    var numbers = new Array("one", "two", "three");
    var seasons = new Array("봄", "여름", "가을", "겨울");
    

    /*
    for(let x:  numbers)
    {
        console.log(x);
    } */

    let myArray = new Array(); // 초기값이 없음.

    // concatenate , strcat, a = a + b

    lotto = lotto.concat(seasons);
    console.log("lotto = " + lotto);

    // stack : 동전통 FILO, LIFO
    //          push(), pop()
    // queue : q , FIFO, LILO
    //          enqueue(), dequeue()
    //      add(), remove()

    console.log("lotto = " + lotto);
    lotto.pop();
    console.log("lotto = " + lotto);
    lotto.shift();
    console.log("lotto = " + lotto); // 맨 앞이 빠져나감.

    let x = 5;      // 1010
    x = x << 1;
    console.log("x = " + x);

    lotto = lotto.slice(2);
    console.log("lotto = " + lotto);
    //lotto = 2,3,4,10,봄,여름,가을
    // lotto = 4,10,봄,여름,가을
    
    function checkError()
    {
        // 기존 방법
        let f = document.loginForm;
        //alert(f.id.value); // document.loginForm.id.value;
        let id = document.querySelector("#id");
       
        let regex = /^[a-zA-Z0-9]{4,10}$/;
        if(!regex.test(id.value))
        {
            alert("아이디는 영어 대소문자및 숫자로 4~10자입니다.");
            id.focus();
            return false;
        }

        let mobile = document.querySelector("#mobile");
        regex = /^01[016789]-[0-9]{3,4}-[0-9]{4}$/;
        if(!regex.test(mobile.value))
        {
            alert("휴대전화는 010-1234-5678 형식입니다.");
            mobile.focus();
            return false;
        }


    }

</script>


<form name="loginForm" method="post" onSubmit="return checkError()" action="a.html">    <!-- GET, POST, PUT, DELETE -->
<div class="row">
    <div class="col-2 colLine">아이디</div>
    <div class="col colLine">
        <input type="text" name="id" id="id" required class="form-control">
    </div>
</div>
<div class="row">
    <div class="col-2 colLine">휴대전화</div>
    <div class="col colLine">
        <input type="text" name="mobile" id="mobile" required class="form-control">
    </div>
</div>

<button type="submit" class="btn btn-primary">로그인</button>

</form>