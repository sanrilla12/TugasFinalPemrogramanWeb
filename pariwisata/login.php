<?php 
session_start();

if( isset($_SESSION["login"]) ){
	header("location: index.php");
	exit;
}

require 'function.php';
if( isset($_POST["login"]) ){
	$username = $_POST["username"];
	$password = $_POST["password"];

	$tb = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($tb) === 1) {
		// cek password
		$row = mysqli_fetch_assoc($tb);
		if (password_verify($password, $row["password"]) ){
			// set session
			$_SESSION["login"] = true;

			header("location: index.php");
			exit;
		}
	}

	$error = true;

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<style>
		
		body{
			background-color: lightpink;
			font-family: sans-serif;
		}

		h1 {
			margin-left: 500px;
		}

		.login {
			margin-left: 500px;
			margin-top: 100px;
		}

		button{
			margin-left: 60px;
			background-color: lightblue;
		}

		label{
			display: block;
		}

		a {
			margin-left: 30px;
		}

		p{
			color: red;
			margin-left: 530px;
		}

	</style>
</head>
<body>
	<h1>HALAMAN LOGIN</h1>

	<?php if( isset($error) ) : ?>
		<p>Username/Password Salah</p>
	<?php endif; ?>

<div class="login">
	<form action="" method="post">
		<ul>
			<label for="username">Username :</label>
			<input  type="text" name="username" id="username">
		</ul>

		<ul>
			<label for="password">Password :</label>
			<input  type="password" name="password" id="password">
		</ul>

		<ul>
			<button type="submit" name="login">Login</button>
		</ul>
		
		 <ul>
		 	<a href="registrasi.php"><b>Buat Akun Baru</b></a>
		 </ul>

	</form>
</div>	

</body>
</html>