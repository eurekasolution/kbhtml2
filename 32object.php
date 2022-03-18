
<div class="row">
    <div class="col-2">팝업</div>
    <div class="col">
        <button type="button" class="btn btn-primary form-control" onClick=popWindow()>팝업 생성</button>
    </div>
</div>
<div class="row">
    <div class="col-2"></div>
    <div class="col"></div>
</div>

<div class="row">
    <div class="col-2"></div>
    <div class="col"></div>
</div>

<div id="display">

</div>

<script>
    function popWindow()
    {
        // window.alert('pop');
        for(let i=1; i<=1; i++)
        {
            let j = i * 50;
            window.open('pop.html', 'kbPopWindow'+i, 'top='+j+', left='+j+', width=500, height=300, resizable=yes');
        }
    }

    var now = new Date();
    console.log("now = " + now);
    console.log("now 2 = " + now.toLocaleString());

    console.log("Random = " + Math.random());
    console.log("Random floor = " + Math.floor(Math.random() * 100 ));
    console.log("Random ceil = " + Math.ceil(Math.random() * 100 ));
    
    // 사용자 객체 정의
    var book = { 
        title: "javascript",
        author: "Hong kil dong",
        price: 12300,
        page: 700,
        info: function() { 
            console.log("book info()... js");

        }
    };

    let xxx = "page";
    console.log("title = " + book.title);
    console.log("page = " + book[xxx]);

    now = new Date();
    let birth = new Date("2000-01-01");

    console.log("now = " + new Date());
    console.log("birth = " + birth);

    // YYYY-MM-DD hh:mm:ss
    // getFullYear()
    console.log("getFullYear = " + now.getFullYear());
    console.log("getMonth = " + now.getMonth());
    console.log("getDate = " + now.getDate());
    console.log("getDay = " + now.getDay());
    console.log("getTime = " + now.getTime());
    console.log("getHours = " + now.getHours()); // 0 ~ 23
    console.log("getMinutes = " + now.getMinutes());
    console.log("getSeconds = " + now.getSeconds());
    console.log("getMilliseconds = " + now.getMilliseconds());

    let diff = now.getTime() - birth.getTime();
    console.log("diff = " + diff);
    console.log("diff sec = " + parseInt(diff/1000));
    console.log("diff min = " + parseInt(diff/1000/60 ));
    console.log("diff hour = " + parseInt(diff/1000/60/60 ));
    console.log("diff day = " + parseInt(diff/1000/60/60/24 ));
    console.log("diff mon = " + parseInt(diff/1000/60/60/24/30 ));
    console.log("diff year = " + parseInt(diff/1000/60/60/24/365 ));

    // 11일 몇요일인지를 결정해야 한다.
    let year = birth.getFullYear();
    console.log("year = " + year);
    let month = birth.getMonth() + 1;
    if(month <10)
        month = "0"+month;
    let firstDayMonth = year + "-" + month + "-01";
    console.log("firstDayMonth = " + firstDayMonth);
    let tmp = new Date(firstDayMonth);
    console.log("요일 = " + tmp.getDay()); 

    let display = document.querySelector("#display");
    console.log(display);
    display.innerHTML = "<div class='row'><div class='col'>일</div><div class='col'>월</div><div class='col'>화</div></div>";

</script>
