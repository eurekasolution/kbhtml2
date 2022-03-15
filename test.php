<?php
			if(isset($_SESSION[$sessId]))
			{

				$color = "danger";
                $btnValue = "수정";
			}else
			{
				$color = "primary";
                $btnValue = "등록";
			}
		?>


				<div class="row">
					<div class="col">이름</div>
					<div class="col">
						<input type="text" name="name" class="form-control" placeholder="이름입력" value="<?php if(isset($_SESSION[$sessName])) echo $_SESSION[$sessName] ?>">
					</div>
				</div>
				<div class="row">
					<div class="col">아이디</div>
					<div class="col">
						<input type="text" name="id" class="form-control" placeholder="아이디" value="">
						<button type="button" class="btn btn-<?php echo $color ?>" >등록</button>
					</div>
				</div>
				<div class="row">

					<div class="col">
						<button type="button" class="btn btn-<?php echo $color ?>" ><?php echo $btnValue ?></button>
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
</body> 
</html> 