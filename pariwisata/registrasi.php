<?php 
require 'function.php';

if ( isset($_POST["register"]) ){

	if ( registrasi($_POST) > 0 ) {
		echo "
		<script>
			alert('user baru berhasil ditambahkan');
			document.location.href = 'login.php';
		</script>";
	} else {
		echo mysqli_error($db);
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>

	<style>

	body{
		background-color: lightpink;
		font-family: sans-serif;
	}
		
	h1 {
		margin-left: 500px;
	}

	label{
		display: block;
	}

	.konfirmasi {
		margin-top: 100px;
		margin-left: 500px;
	}

	button {
		margin-left: 50px;
		background-color: lightblue;
	}

	</style>

</head>
<body>

	<h1>Halaman Registrasi</h1>

	<div class="konfirmasi">
	<form action="" method="post">
		<ul>
			<label for="username">Username :</label>
			<input type="text" name="username" id="username" required>
		</ul>
		<ul>
			<label for="password">Password :</label>
			<input type="password" name="password" id="password" required>
		</ul>
		<ul>
			<label for="password2">Konfirmasi Password :</label>
			<input type="password" name="password2" id="password2" required>
		</ul>
		<ul>
			<button type="submit" name="register">Daftar</button>
		</ul>		
	</form>
	</div>

</body>
</html>