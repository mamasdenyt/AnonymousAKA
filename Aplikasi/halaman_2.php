<div style="background:orange">
<?php
	session_start();
		echo "SELAMAT DATANG <br>";

		echo "USER : ".$_SESSION["user"]."<br>";
		echo "NAMA : ".$_SESSION["nama_lengkap"]."<br>";
		echo "AKSES : ".$_SESSION["akses"]."<br>";
		
?>
<hr> <br>
<h1> INI HALAMAN 2 </h1>
</div>
