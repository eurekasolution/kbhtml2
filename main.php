<?php

	session_save_path("./sess");
	session_start();

	include "config.php";
?>
<!doctype html> 
<html lang="ko"> 
	<head> 
		<meta charset="UTF-8"> 
 		<title>국민은행</title> 
 		<meta name="viewport" 
 			content="width=device-width, maximum-scale=3.0, user-scalable=yes"> 
		<link rel="icon" type="image/png" href="./data/img/kb32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="./data/img/kb16.png" sizes="16x16">
	    <link rel="icon" type="image/png" href="./data/img/kb96.png" sizes="96x96">
 		<link href="./css/Style.css" rel="stylesheet" type="text/css">  
 		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
 		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
 		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
 	</head> 
<body >

<div class="container">
	<div class="row">
		<div class="col">
			맨꼭대기 이미지...
		</div>
	</div>
	<div class="row">
		<div class="col">

		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<div class="container">
		<a class="navbar-brand" href="#">
			<span class="material-icons icon">home</span>
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuBar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="menuBar">
			<ul class="navbar-nav">
				<li class="nav-item dropdown ms-4">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">HTML</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="main.php?cmd=01">01.html</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=02Form">02Form.html</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=03style">A third link</a></li>
					</ul>
				</li>

				<li class="nav-item dropdown ms-4">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">JavaScript</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">Link4</a></li>
						<li><a class="dropdown-item" href="#">Another link</a></li>
						<li><a class="dropdown-item" href="#">A third link</a></li>
					</ul>
				</li>


			</ul>
		</div>
	</div>
</nav>

		</div>
	</div>

	<div class="row">
		<div class="col">
			로그인/아웃
		</div>
	</div>

	<?php
		$cmd = $_GET("cmd");

		if(isset($cmd))
		{
			

			if($cmd == "01")
				include "01.html";
			else if($cmd == "02Form")
				include "02Form.html";
		}else
		{
			include "init.php";
		}
	?>


	<div class="row">
		<div class="col">
			사이트 정보
		</div>
	</div>


</div>

</body> 
</html> 