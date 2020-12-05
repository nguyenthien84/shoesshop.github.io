<?php
session_start();
?>
<html>
<head>
	<title>SC Website</title>


	<link rel='icon' href='img/favicon.ico' type='image/x-icon'/ >
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	  <nav class="navbar navbar-expand-lg navbar-light bg-secondary text-white">
			<div class="container">
				<a class="navbar-brand" href="login.php"> </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item ">
							<a class="nav-link" href="#">Home</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="#">UserName</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"></a>
						</li>
					</ul>
				</div>
		        </div>
		</nav>
		<div class="container p-3 my-3 bg-dark text-white text-center my-5 ">
		  <h1>Welcome To SC Website</h1>
		  <p>This website has many interesting information for you about our items</p>
		  <p><i>Are you ready to start? </i></p>
		  <button type="button" class="btn btn-secondary"><a href="login.php">GET STARTED</button>
		</div>

<?php