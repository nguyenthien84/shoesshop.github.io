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
</head>
<body>
	  <nav class="navbar navbar-expand-lg navbar-light bg-secondary text-white">
			<div class="container">
				<a class="navbar-brand" href="login.php">Welcome </a>
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

<?php
	require_once("lib/connection.php");
	// Check if user click Log In 
	if (isset($_POST["btn_submit"])) {
		// Check the inform 
		$username = $_POST["username"];
		$password = $_POST["password"];
		//Clear inform, clear tag html, special icon 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "Username and Password need to fill!";
		}else{
			$sql = "select * from users where username = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "Username or Password are incorrect !";
			}else{
				//Save username
				$_SESSION['username'] = $username;
                header('Location: index.php');
			}
		}
	}
?>


	<form method="POST" action="login.php">
	<fieldset>
	    <legend>Log In</legend>
	    	<table class="login">
	    		<tr>
	    			<td>Username</td>
	    			<td><input type="text" name="username" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td>Password</td>
	    			<td><input type="password" name="password" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td colspan="2" align="right"> <input name="btn_submit" type="submit" value="Log In"></td>
	    		</tr>
	    		<hr>
	    		<tr>
	    			<td colspan="2" align="right"><a href="register.php"><input name ="btn_register" type="button" value="Register"></td>
	    		</tr>
	    	</table>
  </fieldset>
  </form>
</body>
</html>