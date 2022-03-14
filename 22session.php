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

				<?php
					if(isset($_SESSION[$sessId]))
					{
						?>

						<script>
							function goLogout()
							{
								location.href='logout.php';
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
						<form method="post" action="login.php">
						<input type="text" name="id" placehoder="ID">
						<input type="password" name="pass" placehoder="비밀번호">
						<button type="submit" class="btn btn-primary">로그인</button>

						</form>

						<?php
					}
				?>
			
		</div>



HTML 영역입니다.<br>

<?php
	echo "PHP 영역입니다.<br>";
	
	for($i=1; $i<=10; $i++)
	{
		echo "$i 번째 <br>";
	}

	echo "confTest = $confTest <br>";
?>

	</div>
</body> 
</html> 