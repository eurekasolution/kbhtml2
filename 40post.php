<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script src="http://dmpas.daum.net/map_js_init/postcode.v2.js"></script>
<script src="//dapi.kakao.com/v2/maps/sdk.js?appkey=<?php echo $kakaoKey ?>&libraries=services"></script>
<script>
    function kakoZipCode()
    {
        new daum.Postcode({
            oncomplete: function(data) {
                //data는 사용자가 선택한 주소 정보를 담고 있는 객체이며, 상세 설명은 아래 목록에서 확인하실 수 있습니다.
            }
        });
    }
</script>

<div class="row">
    <div class="col">
        <button type="button" class="btn btn-primary" onClick="kakaoZipCode()">주소검색</button>
    </div>
    <div class="col">
        <input type="text" name="zipcode" id="zipcode" class="form-control" readonly>
    </div>
</div>
<div class="row">
    <div class="col-2">주소</div>
    <div class="col">
        <input type="text" name="road" id="road" class="form-control">
    </div>
</div>
<div class="row">
    <div class="col-2">상세</div>
    <div class="col">
        <input type="text" name="address" id="address" class="form-control">
    </div>
</div>
<div class="row">
    <div class="col-2">경도</div>
    <div class="col">
        <input type="text" name="lon" id="lon" class="form-control">
    </div>
</div>
<div class="row">
    <div class="col-2">위도</div>
    <div class="col">
        <input type="text" name="lat" id="lat" class="form-control">
    </div>
</div>

<div class="row">
    <div class="col"></div>
    <div class="col"></div>
</div>