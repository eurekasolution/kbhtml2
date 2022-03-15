
<div class="container"> <!-- container -->
    <div class="row">
        <div class="col">
            <h4 class="text-primary">
                <span class="material-icons icon">photo</span>
                Image</h4>
        </div>
    </div>

    <div class="row">
        <div class="col">
            Image 핵심 : img-fluid 반응형으로 된다.<br>
            1. 이미지가 내가 사용할 수 있는 공간보다 클때<br>
                자동으로 줄여준다.<br>
            2. 이미지가 공간보다 작을 때, 원본을 보여준다.<br>
            3. rounded 각지지 않고 둥근 모양으로 끝 처리를 해준다.<br>
        </div>
    </div>
    <div class="row">
        <div class="col-1">
            <img src="data/img/paris.jpg">
        </div>
    </div>
    <div class="row">
        <div class="col-1">
            <img src="data/img/paris.jpg" class="img-fluid">
        </div>
        <div class="col-1">
            <img src="data/img/paris.jpg" class="img-fluid rounded">
        </div>
        <div class="col-1">
            <img src="data/img/paris.jpg" class="img-fluid rounded-circle">
        </div>
        <div class="col-1">
            <img src="data/img/paris.jpg" class="img-thumbnail">
        </div>
        <div class="col-2">
            <img src="data/img/paris.jpg" class="img-fluid rounded">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <img src="data/img/paris.jpg" class="img-fluid rounded float-start">
            <img src="data/img/paris.jpg" class="img-fluid rounded float-end">
        </div>
    </div>



</div> <!-- container -->
