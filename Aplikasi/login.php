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
					echo "<li> <a href ='keranjangbel.php'>Keranjang </a></li> ";
				}
			?>
		</ul>
	</div>
	<div id="kiri">
		<div id="menu_vertikal">
		<h1>Toko Aulia</h1>
		
		<ul>
		<li><a href='login.php'>login</a></li> 
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
	<h1> Silahkan Login terlebih dahulu!
   <?php
	include "login_form.php";
	?></h2>
	
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

