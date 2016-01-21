<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="wrap">
	<div id="header">
	<div id="simbol"><img src="pict/simbol.jpg" height="170px" width="220px"/></div>
    <div id="slogan"><h1>Selamat datang di Toko Aulia</h1> </br> 
	<h2> Belanja sesuai kebutuhan anda <h2></div>
	</div>
	<div id="menu_horisontal">
		<ul>
			<li><a href="awal.php">HOME</a></li>
			<?php
			session_start();
				if (!isset($_SESSION['user'])) {
					echo "<li><a href='login.php'>LOGIN</a></li>";
				}
				if (isset($_SESSION['user'])) {
					echo "<li> <a href ='keranjang_belanja.php'>Keranjang </a></li> ";
				}
			?>
		</ul>
	</div>
	<div id="kiri">
		<div id="menu_vertikal">
		<h1>Halaman Toko Aulia</h1>
		<ul>
			<li><a href="awal.php">Halaman Awal</a></li>
			<li><a href="barang_tersedia.php">Halaman Kedua</a></li>
			<li><a href='keranjang_belanja.php'">Halaman Ketiga</a></li>
			<li><a href='cabang.php'>Halaman Keempat</a></li>
			<?php
			if (isset($_SESSION['namauser'])) {
			echo "<li><a href='login/logout.php'>Logout</a></li>";
			}
			?>
		</ul>
		</div>
		<div id="banner">
		<img src="pict1/simbol.png" width="220px" height="200px"/>
		</div>
	</div>
	<div id="content">
	
<?php
if (!isset($_SESSION["user"])) {
echo "Sesi sudah habis ! <br> <a href='login.php'>LOGIN LAGI </a>";
exit;
}
echo "SELAMAT DATANG <br>";
echo "USER : ".$_SESSION["user"]."<br>";
echo "NAMA : ".$_SESSION["nama_lengkap"]."<br>";
?>
	
	</div>
	<div id="footer">
	<p style="font:11px Verdana">
	
	</p>
	<p style="font:12px Courier New">
	Email: <b>denytriawan49@gmail.com</b>
	</p>
	</div>
</div>
</body>
</html>



