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
	<link rel='icon' href='img/favicon.ico' type='image/x-icon'/ >
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="bg"></div>
	<div class=".bg-gradient-primary"></div>
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
	<div class="container mt-5" style="margin-top: 60px">
			<div class="row">
				<div class="col-sm-3">
					<h2 class="my-4" style="color:white">Under Armour SC Shop</h2>
					<ul class="list-group">
						<li class="list-group-item list-group-item-secondary">SC 1 </li>
						<li class="list-group-item list-group-item-secondary">SC 2 </li>
						<li class="list-group-item list-group-item-secondary">SC 3</li>
					</ul>
				</div>
				<div class="col-sm-9">
					<div id="carouselExampleControls" class="carousel slide my-4" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/curry9.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="img/curry91.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="img/currychin.jpg" class="d-block w-100" alt="...">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 mb-4">
							<form action="manage_cart.php" method="POST">
								<div class="card">
									<img src="img/curry-1.jpg" class="card-img-top">
									<div class="card-body text-center">
										<h5 class="card-title">Curry 1</h5>
										<p class="card-text">The most simplifed colorway of the Stephen Curry's first signature sneaker is the Under Armour Curry One. <strong>Price: $650</strong></p>
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<input type="hidden" name="Item_Name" value="Curry 1">
										<input type="hidden" name="Price" value="650">
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-4 col-md-6 mb-4">
							<form action="manage_cart.php" method="POST">
								<div class="card">
									<img src="img/curry-2.jpg" class="card-img-top">
									<div class="card-body text-center">
										<h5 class="card-title">Curry 2</h5>
										<p class="card-text">The Under Armour Curry Two 'Suit & Tie' gives off that old Playoff vibe with the black and also white with upper. <strong>Price: $850</strong></p>
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<input type="hidden" name="Item_Name" value="Curry 2">
										<input type="hidden" name="Price" value="850">
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-4 col-md-6 mb-4">
							<form action="manage_cart.php" method="POST">
								<div class="card">
									<img src="img/curry-3.png" class="card-img-top">
									<div class="card-body text-center">
										<h5 class="card-title">Curry 3</h5>
										<p class="card-text">The Under Armour Curry 3 sticks like the HOVR Havoc. Most Players are reporting that these UA shoes court. <strong>Price: $950</strong></p>
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<input type="hidden" name="Item_Name" value="Curry 3">
										<input type="hidden" name="Price" value="950">
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-4 col-md-6 mb-4">
							<form action="manage_cart.php" method="POST">
								<div class="card">
									<img src="img/curry4.jpg" class="card-img-top">
									<div class="card-body text-center">
										<h5 class="card-title">Curry 4</h5>
										<p class="card-text">Some are claiming that the Curry 4 is among the best fitting high-top basketball shoes they have ever worn. <strong>Price: $1050</strong></p>
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<input type="hidden" name="Item_Name" value="Curry 4">
										<input type="hidden" name="Price" value="1050">
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-4 col-md-6 mb-4">
							<form action="manage_cart.php" method="POST">
								<div class="card">
									<img src="img/curry-5.jpg" class="card-img-top">
									<div class="card-body text-center">
										<h5 class="card-title">Curry 5</h5>
										<p class="card-text">Overall, the Under Armour Curry 5 is a big excited and of the Curry signature shoes line. So they decied to buy it. <strong>Price: $1350</strong></p>
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<input type="hidden" name="Item_Name" value="Curry 5">
										<input type="hidden" name="Price" value="1350">
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-4 col-md-6 mb-4">
							<form action="manage_cart.php" method="POST">
								<div class="card">
									<img src="img/curry-6.jpg" class="card-img-top">
									<div class="card-body text-center">
										<h5 class="card-title">Curry 6</h5>
										<p class="card-text">Overall, reviewers are having a lot of fun with this shoe and rank it as one of the best Curry signature shoes so far! <strong>Price: $1550</strong></p>
										<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
										<input type="hidden" name="Item_Name" value="Curry 6">
										<input type="hidden" name="Price" value="1550">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-secondary text-white p-5">
			<div class="container">
				<div class="text-center text-white">Copyright  2020</div>
				<div class="text-center text-white">Designed By: Thien Nguyen &copy; 2020</div>
			</div>
		<div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


  </body>
</html>
</body>
</html>