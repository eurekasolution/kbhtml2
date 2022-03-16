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

		 <script src="js/kbstar.js"></script>


	</head> 
<body >

<script>
	// helloKbstar();
	var i=3;
	console.log("Hello World : " + i);
</script>


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
		<a class="navbar-brand" href="main.php">
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
						<li><a class="dropdown-item" href="main.php?cmd=01">HTML 기초</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=02form">Form</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=03style">Stylesheet</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=04layout">Layout</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=05practice">Practice</a></li>
					</ul>
				</li>

				<li class="nav-item dropdown ms-4">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Bootstrap</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="main.php?cmd=06bs">Bootstrap</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=07grid">Grid System</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=08monitor">Monitor</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=09head">Head</a></li>						
						<li><a class="dropdown-item" href="main.php?cmd=10color">Color</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=11img">Image</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=12button">Button</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=13badge">Badge</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=14jumbo">Jumbo</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=15alert">Alert</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=16progress">Progress</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=17nav">Nav</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=18input">Input</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=19kb">KB</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=20modal">Modal</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=21slide">Slide</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=22session">Session</a></li>

					</ul>
				</li>

				<li class="nav-item dropdown ms-4">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">JavaScript</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="main.php?cmd=23js">Javascript</a></li>
						<li><a class="dropdown-item" href="main.php?cmd=24js">Variable</a></li>
						<li><a class="dropdown-item" href="#">A third link</a></li>
					</ul>
				</li>

				<?php
					if(isset($_SESSION[$sessId])  and $_SESSION[$sessLevel] >= $adminLevel )
					{
						?>
						<li class="nav-item dropdown ms-4">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">관리자메뉴</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="main.php?cmd=manUser">사용자 관리</a></li>
								<li><a class="dropdown-item" href="#">Another link</a></li>
								<li><a class="dropdown-item" href="#">A third link</a></li>
							</ul>
						</li>
						<?php
					}
				?>


			</ul>
		</div>
	</div>
</nav>

		</div>
	</div>

	<div class="row">
		

	<?php
					if(isset($_SESSION[$sessId]))
					{
						?>

						<script>
							function goLogout()
							{
								location.href='main.php?cmd=logout';
							}
						</script>

						<?php

						echo "
						<div class=\"col text-end\">
							<span class='text-primary fw-bold'>$_SESSION[$sessName]</span> 님 
							<button type='button' class='btn btn-primary' onClick=goLogout() >Exit</button>
						</div>	
						";
					}else
					{
						?>
						<form method="post" action="main.php?cmd=login"> 
						<div class="col text-end">
							<input type="text" name="id" placehoder="ID">
							<input type="password" name="pass" placehoder="비밀번호">
							<button type="submit" class="btn btn-primary">로그인</button>
						</div>
						</form>

						<?php
					}
				?>

	</div>
</div> <!-- container -->

<div class="container" style="height:100%; min-height:500px;">
	<?php
		

		if(isset($_GET["cmd"]))
		{
			$cmd = $_GET["cmd"];

			if(file_exists("$cmd.php"))
				include "$cmd.php";
			else if(file_exists("admin/$cmd.php"))
				include "admin/$cmd.php";
			else if(file_exists("$cmd.html"))
				include "$cmd.html";
			else
				include "error404.php";

		}else
		{
			include "init.php";
		}
	?>
</div> <!-- container body -->

<div class="container">
	<div class="row">
		<div class="col">
			사이트 정보
		</div>
	</div>
</div>



</body> 
</html> 