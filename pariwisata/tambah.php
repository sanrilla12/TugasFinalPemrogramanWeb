<?php 
session_start();

if( !isset($_SESSION["login"]) ){
    header("location: login.php");
    exit;
}

require 'function.php';
// cek apakah tombol submit  sudah ditekan atau tidak
if (isset($_POST["submit"]) ) {

	// cek apakah data berhasil ditambah
	if ( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan');
				document.location.href = 'index.php';
			</script>
		";
	}

}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Wisata</title>

	<style>
		
		body{
			background-color: lightpink;
			font-family: sans-serif;
		}

		h1{
			margin-left: 500px;
		}

		label{
			display: block;
		}

		.tambah{
			margin-top: 100px;
			margin-left: 510px;
		}

		button{
			background-color: lightblue;
			margin-left: 40px;
		}

	</style>

</head>
<body>

	<h1>Tambah Data Wisata</h1>

	<div class="tambah">	
	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<label for="Nama"> Nama : </label>
			<input type="text" name="Nama" id="Nama" required>
		</ul>
		<ul>
			<label for="Gambar"> Gambar : </label>
			<input type="file" name="Gambar" id="Gambar" >
		</ul>
		<ul>
			<label for="Keterangan"> Keterangan : </label>
			<input type="text" name="Keterangan" id="Keterangan" required>
		</ul>	
		<ul>
			<label for="Alamat"> Alamat :</label>
			<input type="text" name="Alamat" id="Alamat" required>
		</ul>
		<ul>
			<button type="submit" name="submit"> Tambah Data</button>
		</ul>
	</form>
	</div>

</body>
</html>