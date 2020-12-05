<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
	 header('Location: login.php');
}
?>
<html>
<head>
	<title>SC Website </title>

	<link rel="stylesheet" href="styl.css" />
	<link rel='icon' href='img/favicon.ico' type='image/x-icon'/ >
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-secondary text-white">
			<div class="container">
				<a class="navbar-brand" href="index.php"><i class="fa fa-hand-peace-o" aria-hidden="true"></i>
Welcome </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active ">
							<a class="nav-link" href="index.php"><i class="fa fa-user-circle" aria-hidden="true"></i>
Hello <?php echo $_SESSION['username'];  ?></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>
Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="history.php"><i class="fa fa-clock-o" aria-hidden="true"></i>
History</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php"><i class="fa fa-envelope" aria-hidden="true"></i>
Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
Log Out</a>
						</li>
					</ul>
					<div>
						<?php
							$count=0;
							if(isset($_SESSION['cart']))
							{
								$count=count($_SESSION['cart']);
							} 
						?>
						<a href="mycart.php" class="btn btn-outline-success">My Cart (<?php echo $count; ?></a>
					</div>
				</div>
		        </div>
		</nav>
		<div class="jumbotron">
			<img src="https://i.insider.com/5548e318ecad04ad3c3bf243?width=1100&format=jpeg&auto=webp" class="mx-auto d-block" alt="Cinque Terre" >
			  <h1 class="display-4" style="text-align:center">Our History</h1>
			  <h3 class="lead" style="text-align:center"><strong>Latest Curry 7 Colorway Commemorates Black History Month and the Work of David Adjaye</strong></h3>
			  	<br>
			  	<p class="lead" style="text-align:center">
					Black History Month is an annual celebration of heroes and pioneers across public advocacy, literature, sports, science, architecture and more who have helped build or inspire American culture as we know it. 

					In February 2018, following their most recent championship win, Stephen Curry and several teammates brought local youth to visit the iconic National Museum of African-American History and Culture in Washington, D.C. to expose them to their shared history. Amid the educational displays and tributes to countless Black pioneers and heroes, Curry experienced the mystique of the venue itself—a feat of architecture from lead designer David Adjaye. 

					Curry and the Under Armour design team reflected on that meaningful trip when developing this year’s commemorative BHM colorway, Our History. 
				</p><hr>

				<p class="lead" style="text-align:center"><strong>“The Our History colorway is special; it reflects on our history and those who helped build it. The colorway is inspired by both a memorable trip to the National Museum of African-American History and Culture, and the incredible art by David Adjaye.”</strong><br>
					<p class="lead" style="text-align:right"><i>- Stephen Curry- </i></p>
					<img src="https://clutchpoints.com/wp-content/uploads/2020/07/Stephen-Curry-wears-powerful-_Black-Lives-Matter_-shoes-on-golf-course.jpg" class="d-block w-100" alt="..." ><hr>
			  <a class="btn btn-primary btn-lg" href="index.php" role="button">Back</a>
</div>