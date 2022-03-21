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


</script>