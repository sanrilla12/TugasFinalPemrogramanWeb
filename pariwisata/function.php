<?php 

//koneksi ke database
$db = mysqli_connect("localhost","root","","wisata_konut");


function query($query) {
	global $db;
	$tb = mysqli_query($db, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($tb) ){
		$rows[] =$row;
	}
	return $rows;
}


function tambah($data) {
	global $db;
	$Nama = $data["Nama"];

	// upload gambar
	$Gambar = upload();
	if( !$Gambar ) {
		return false;
	}

	$Keterangan = $data["Keterangan"];
	$Alamat = $data["Alamat"];

	$query = "INSERT INTO objekwisata VALUES
	('$Nama', '$Gambar', '$Keterangan', '$Alamat')";

	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}


function upload() {

	$namaFile = $_FILES['Gambar']['name'];
	$ukuranFile = $_FILES['Gambar']['size'];
	$error = $_FILES['Gambar']['error'];
	$tmpName = $_FILES['Gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diapload
	if( $error === 4) {
		echo "<script>
			alert('pilih gambar');
			</script>";
		return false; 
	}

// cek ukuran terlalu besar
	if( $ukuranFile > 1000000 ) {
		echo "<script>
			alert('ukuran gambar terlalu besar');
			</script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	move_uploaded_file($tmpName, 'img/' . $namaFile);

	return $namaFile;
	
}


function cari($pencarian){
	$query = "SELECT * FROM objekwisata WHERE Nama = '$pencarian' 
	";

	return query($query);
}


function registrasi($data) {
	global $db;

	$username = strtolower(stripslashes($data["username"]) );
	$password = mysqli_real_escape_string($db, $data["password"]);
	$password2 = mysqli_real_escape_string($db, $data["password2"]);

	// cek username sudah ada atau belum
	$tb = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");
	
	if( mysqli_fetch_assoc($tb) ){
		echo "<script>
			alert('Username Yang Dipilih Sudah Ada')
			</script>";

		return false;	
	}


	// cek konfirmasi password
	if( $password !== $password2 ) {
		echo "<script>
			alert('Konfirmasi Password Tidak Sesuai');
			</script>";
	return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan user baru kedatabase
	mysqli_query($db, "INSERT INTO user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($db); 

}

 ?>