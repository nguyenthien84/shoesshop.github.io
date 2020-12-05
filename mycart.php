<?php
session_start();
?>
<html>
<head>
	<title>SC Website</title>
	<link rel='icon' href='img/favicon.ico' type='image/x-icon'/ >
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css" />
	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center border rounded bg-light my-5">
					<h1>My Cart</h1>
				</div>
				<div class="col-lg-9">

		<table class="table">
		  <thead class="text-center">
		    <tr>
		      <th scope="col">Serial No.</th>
		      <th scope="col">Item Name</th>
		      <th scope="col">Item Price</th>
		      <th scope="col">Quantity</th>
		      <th scope="col"></th>
		    </tr>
		  </thead>
		  <tbody class="text-center">
		  	<?php
		  		$total=0;
		  		if(isset($_SESSION['cart']))
		  		{
			  		foreach($_SESSION['cart'] as $key => $value)
			  		{
			  			$sr=$key+1;
			  			$total=$total+$value['Price'];
			  			echo"
			  				<tr>
			  					<td>$sr</td>
			  					<td>$value[Item_Name]</td>
			  					<td>$value[Price]</td>
			  					<td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
			  					<td>
			  						<form action='manage_cart.php' method='POST'>
			  							<button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
			  							<input type='hidden' name='Item_Name' value='$value[Item_Name]'>
			  						</form>
			  					</td>
			  				</tr>
			  			";
			  		}
		  		}

		  	?>
		  </tbody>
		</table>
						</div>

					<div class="col-lg-3">
						<div class="border bg-light rounded p-4">
							<h4>Total:</h4>
							<h5 class="text-right"><?php echo $total ?></h5>
							<br>
							<form>

								<div class="form-check">
								  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
								  <label class="form-check-label" for="flexRadioDefault2">
								    Cash On Delivery
								  </label>
								</div>
								<br>
								<button class="btn btn-primary btn-block">Make Purchase</button>
							</form>
						</div>
					</div>
				</div>
</body>
</html>
