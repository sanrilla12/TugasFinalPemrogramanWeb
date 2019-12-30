<?php
session_start();

if( !isset($_SESSION["login"]) ){
    header("location: login.php");
    exit;
}

require 'function.php';
$objek_wisata = query ("SELECT *FROM objekwisata");

// tombol cari ditekan
if(isset($_POST["cari"]) ){
    $objek_wisata = cari($_POST ["pencarian"]);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Wisata Konawe Utara</title>
     <link rel="icon" type="image/png" href="img/logo.jpg" sizes="32x32">
    <style>
        
    body {
        background-color: lightpink;
        font-family: sans-serif;
    }

    h1{
        margin-left: 300px;
    }

    .logout {
        margin-left: 1265px;
    }

    .Cari {
        margin-left: 900px
    }

    .img {
        margin-top: -120px;
    }

    button {
        background-color: lightblue;
    }

    .ket{
        width: 300px;
        height: 300px;
        background-color: lightblue;
        overflow: scroll;
        margin-top: -320px;
        margin-left: 100px;
    }

    .alm{
        width: 300px;
        height: 100px;
        background-color: lightblue;
        overflow: scroll;
        margin-top: -100px;
        margin-left: 980px;
    }

    </style>
</head>
<body>

    <h1><strong><marquee>OBJEK WISATA KABUPATEN KONAWE UTARA</marquee></strong></h1>

    <div class="logout"> 
        <button type="submit"> <a href="logout.php"><b>Logout</b> </a> </button> 
    </div><br>

    <form action="" method="post">
        <div class="Cari">
            <input type="text" name="pencarian" size="50"
            placeholder="Ketikkan Kata Kunci">
            <button type="submit" name="cari">Cari</button>
        </div>
        <div class="img">
            <img src="img/logo.jpg" width="90" alt="Logo">
        </div>
    </form>

        <h3>Objek wisata adalah segala sesuatu yang ada di daerah tujuan wisata yang merupakan daya tarik agar orang-orang mau datang berkunjung ke tempat tersebut.</h3>  

        <a href="tambah.php"><b>Tambah Data Wisata</b></a>
        <br><br>

        <?php foreach ( $objek_wisata as $row ) : ?>

    <ul>
        <center>
    	<h2><strong><?= $row["Nama"]; ?> </strong></h2>
        </center> <br>
    </ul>

    <ul>
    	<center>
    	<img src="img/<?= $row["Gambar"]; ?>" width=500">
    	</center>
   </ul>

   <div class="ket">
   <ul>
        <?= $row["Keterangan"]; ?> 
   </ul>
   </div>

   <div class="alm">
   <ul>
    	<b><?= $row["Alamat"]; ?> </b>
    </ul>
    </div>
        <br><br><br>
        <hr>
        <br>

<?php endforeach; ?>

</body>
</html>