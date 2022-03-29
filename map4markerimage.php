<?php 
	include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>지도 생성하기</title>
    
</head>
<body>
<!-- 지도를 표시할 div 입니다 -->
<input type="button" value="+" onClick=zoomIn()> 
<input type="button" value="-" onClick=zoomOut()> 

<div id="map" style="width:100%;height:500px;"></div>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=<?php echo $kakaoKey ?>"></script>
<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new kakao.maps.LatLng(37.5041662879426, 127.052043567109), // 지도의 중심좌표
        level: 2 // 지도의 확대 레벨
    };

	// 지도를 표시할 div와  지도 옵션으로  지도를 생성합니다
	var map = new kakao.maps.Map(mapContainer, mapOption); 

	var imageSrc = 'data/img/kb.png', // 마커이미지의 주소입니다    
    imageSize = new kakao.maps.Size(60, 60), // 마커이미지의 크기입니다
    imageOption = {offset: new kakao.maps.Point(30, 30)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.
      
	var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption),
    markerPosition = new kakao.maps.LatLng(37.54699, 127.09598); // 마커가 표시될 위치입니다

	//map.addOverlayMapTypeId(kakao.maps.MapTypeId.ROADVIEW);  
	var markerPosition  = new kakao.maps.LatLng(37.5041662879426, 127.052043567109); 

	// 마커를 생성합니다
	var marker = new kakao.maps.Marker({
		position: markerPosition,
		image: markerImage
	});

	// 마커가 지도 위에 표시되도록 설정합니다
	marker.setMap(map);


	function zoomIn()
	{
		let level = map.getLevel();
		//alert(level);
		if(level > 1)
			map.setLevel(level -1);
	}

	function zoomOut()
	{
		let level = map.getLevel();
		//alert(level);
		if(level < 19)
			map.setLevel(level +1);
	}


</script>
</body>
</html>