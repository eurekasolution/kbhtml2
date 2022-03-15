

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
					<span class="material-icons icon">double_arrow</span>input</h4> 
			</div>
		</div>

		<div class="row">
			<div class="col">
				<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#leftSlide">
					Open Offcanvas Left
				</button> 
				<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#rightSlide">
					Open Offcanvas Right
				</button>
			</div>
		</div>

<!-- Offcanvas Sidebar -->
<div class="offcanvas offcanvas-start" id="leftSlide">
	<div class="offcanvas-header">
	  <h1 class="offcanvas-title">Left Slide</h1>
	  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
	</div>
	<div class="offcanvas-body">
	  <p>Some text lorem ipsum.</p>
	  <p>Some text lorem ipsum.</p>
	  <button class="btn btn-secondary" type="button">A Button</button>
	</div>
</div> <!-- Offcanvas Sidebar -->
<!-- Offcanvas Sidebar -->
<div class="offcanvas offcanvas-end" id="rightSlide">
	<div class="offcanvas-header">
	  <h1 class="offcanvas-title">Right Slide</h1>
	  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
	</div>
	<div class="offcanvas-body">
	  <p>Some text lorem ipsum.</p>
	  <p>Some text lorem ipsum.</p>
	  <button class="btn btn-secondary" type="button">A Button</button>
	</div>
</div> <!-- Offcanvas Sidebar -->

	</div> <!--Container-->
