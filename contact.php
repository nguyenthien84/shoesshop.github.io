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

	<link rel="stylesheet" href="style.css" />
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
		  <h1 class="display-4">Contact Information:</h1>
		  <p class="lead">Nguyen Van Vu Anh Thien .</p>
		  <p class="lead">Ton Duc Thang University .</p>
		  <p class="lead">19 Nguyen Huu Tho,Tan Phong Ward, Distric 7, Ho Chi Minh City .</p>
		  <p class="lead">Email: anhthiennguyenvu@gmail.com .</p>
		  <hr class="my-4">
		  <p><strong>Thank you for visiting my Website</strong></p>
		  <a class="btn btn-primary btn-lg" href="index.php" role="button">Back</a>
		</div>
</body>
</html>