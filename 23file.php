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
				파일 업로드 확인<br>

				<?php

					$targetDir = "data/upload/";
					$file = $targetDir . basename($_FILES["upfile"]["name"]);
					echo "file = $file <br>";

					if(isset($_POST["submit"]))
					{
						echo "XXX1<br>";
						$myImg = getImageSize($_FILES["upfile"]["tmp_name"]);

						if(move_uploaded_file($_FILES["upfile"]["tmp_name"], $file)) 
						{
							$tmp_name = $_FILES["upfile"]["tmp_name"];
							echo "tmp_name = $tmp_name";
						}
					}else
					{
						echo "XXX2<br>";
					}

					
				?>

			</div>
		</row>
	</div>
</body> 
</html> 