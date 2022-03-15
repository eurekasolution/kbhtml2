

<div class="container-fluid kbstarbg">
    <div class="row p-0 m-0">
        <div class="col text-center p-0 m-0">
            menu1, menu2, menu3, menu4
        </div>
    </div>
</div>    


<div class="container-fluid kbstarbg">
	<div class="row">
        <div class="col">
            <img src="./data/img/kbstar.png" class="img-fluid">
        </div>
    </div>
</div>

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
						<li><a class="dropdown-item" href="./01.html">01.html</a></li>
						<li><a class="dropdown-item" href="./02Form.html">02Form.html</a></li>
						<li><a class="dropdown-item" href="#">A third link</a></li>
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

	<div class="container"> <!--Container : 양쪽에 여백을 적당하게 남겨둔다-->
		<div class="row">
			<div class="col">
				<h4 class="text-primary">
					<span class="material-icons icon">double_arrow</span>Navi</h4> 
			</div>
		</div>

		<div id="name1">111111</div>
		1<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		<div class="row">
			<div class="col">
				<div class="dropdown">
					<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown">
						<span class="material-icons icon">settings</span> Settings 
						<!--data-bs-toggle : bs5버전에서는 가운데 bs를 꼭 넣어줘야함!-->
					</button>
					<ul class="dropdown-menu"> <!--dropdown-menu 스타일에는 list여도 bullet이 없다-->
					<li><a class="dropdown-item" href="#name1">Link 1</a></li> <!--id : name1로 보내라-->
					<li><a class="dropdown-item" href="#name2">Link 2</a></li>
					<li><a class="dropdown-item" href="#">Link 3</a></li> <!-- # : 현재 파일 -->
					</ul>
				</div>
			</div>
		</div>
		2<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
		<div id="name2">222222</div>  
		
	</div> <!--Container-->
