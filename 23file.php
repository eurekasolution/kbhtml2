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

							echo "
							<img src='$file' class='img-fluid'>

							<button type='button' class='btn btn-primary' onClick=\"location.href='22session.php'\">등록화면</button>
							";

						}
					}else
					{
						echo "XXX2<br>";
					}

					
				?>

			</div>
		</row>
	</div>
