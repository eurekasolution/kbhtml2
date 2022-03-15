
    <!--
        02form.html
        form : 사용자의 입력을 다음 화면으로 전달해주는 방법
        입력 방법 
            1. 무엇인지 모르면 브라우저는 text 입력으로 인식
            2. textarea는 꼭 확인..
    -->

    <form method="post" action="01.html">
        <input type="text" name="id" id="myid" placeholder="회색글씨" required> <br>
        <input type="password" name="pass"> <br>
        <div class="holiday">TEL</div> <input type="tel" value="010-1234-1234"> <br>
        AGE <input type="number"> <br>
        <div class="holiday">HOME</div> <input type="url"> <br>
        email <input type="email"> <br>
        birth <input type="date"> <br>
        color <input type="color"> <br>
        SELECT 
        <select name="area">
            <option value="0">== 선택 ==</option>
            <option value="1">서울</option>
            <option value="2" selected>경기</option>
            <option value="3">기타</option>
        </select> <br>
        RADIO  
        <input type="radio" name="gender" value="1">M 
        <input type="radio" name="gender" value="2" checked>F 
        <input type="radio" name="gender" value="3">ETC <br>

        <input type="radio" name="lang" value="1">Python 
        <input type="radio" name="lang" value="2" checked>Java 
        <input type="radio" name="lang" value="3">HTML <br>

        CHECKBOX <br>
        <input type="checkbox" name="baseball">BaseBall 
        <input type="checkbox" name="running" checked disabled>Running 
        <input type="checkbox" name="swimming">Swimming  <br>

        FILE <br>
        <input type="file"> <br>

        TEXTAREA<br>
        <textarea name="memo" rows="10" style="width:500px">
            하나
둘
셋</textarea>

        <input type="submit" value="go" style="width:300px; height:100px; background-color:#BBBBBB;">
    </form> 
