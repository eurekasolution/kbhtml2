	<div class="container">
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
						<form method="post" action="login.php">
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

		<div class="row">
			<div class="col-2">지역선택</div>
			<div class="col">
				<select name="area" class="form-control">
				<?php
					$areaList ="서울,경기,충남,충북,전남,전북,울릉,해외,미국,일본,경남,경북,부산,제주,울산,강원";
					$splitArea = explode(",", $areaList);
					/*
						$splitArea[0] = 서울
								 [1] = 경기
					*/

					$cnt = 0;

					while(isset($splitArea[$cnt]))
					{
						if($cnt == 5)
							$mark = "selected";
						else
							$mark = "";
						echo "<option value='$cnt' $mark>$splitArea[$cnt]</option>";
						$cnt++;
					}

				?>
				</select>
			</div>
		</div>

		<form method="post" enctype="multipart/form-data" action="main.php?cmd=23file">
		<div class="row">
			<div class="col-2">파일</div>
			<div class="col">
				<input type="file" name="upfile" id="upfile" class="form-control">
			</div>
			<div class="col-2">
				<button type="submit" name="submit" class="btn btn-primary">업로드</button>
			</div>
		</div>

		</form>

		<!--
		회원가입폼(로그인 되어있으면... 값을 써주고, 맨 마지막 버튼을 빨간 수정
		로그인이 안되어있으면, 빈값으로만 보여주고, 파란색 등록)
		아이디, 이름
		<br>
		-->

		<?php
			if(isset($_SESSION[$sessId]))
			{

				$color = "danger";
			}else
			{
				$color = "primary";
			}
		?>
		

				<div class="row">
					<div class="col">이름</div>
					<div class="col">
						<input type="text" name="name" class="form-control" placeholder="이름입력" value="<?php if(isset($_SESSION[$sessName])) echo "$_SESSION[$sessName]"; ?>">
					</div>
				</div>
				<div class="row">
					<div class="col">아이디</div>
					<div class="col">
						<input type="text" name="id" class="form-control" placeholder="아이디" value="test">
					</div>
				</div>
				<div class="row">
					
					<div class="col">
						<button type="button" class="btn btn-<?php echo $color ?>" >수정</button>
					</div>
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
