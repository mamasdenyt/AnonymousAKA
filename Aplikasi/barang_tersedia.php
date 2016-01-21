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
		<h1>Halaman Toko Aulia</h1>
		<ul>
			<li><a href="awal.php">Halaman Awal</a></li>
			<li><a href="barang_tersedia.php">Halaman Kedua</a></li>
			<li><a href='keranjang_belanja.php'">Halaman Ketiga</a></li>
			<li><a href="cabang.php">Halaman Keempat</a></li>
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
$barang_pilih = 0;
if(isset($_COOKIE["keranjang"])){
   $barang_pilih= $_COOKIE["keranjang"];
}
if(isset($_GET['idbarang'])){
   $idbarang = $_GET['idbarang'];
   $barang_pilih = $barang_pilih. "," .$idbarang ;
   setcookie('keranjang', $barang_pilih, time()+3600);
}
   
   include "Koneksi.php";
$sql = "select * from barang where idbarang not in (".$barang_pilih.")
		and stok > 0 order by idbarang desc ";
		
$hasil = mysqli_query($kon,$sql);
if (!$hasil)
die ("Gagal query.. ".mysqli_error($kon));
?>
<h2> Daftar Barang tersedia </h2>
<table border="1">
<tr>
<th>Foto</th>
<th>Nama Barang</th>
<th>Harga Jual</th>
<th>STOK</th>
<th> Operasi </th>
</tr>
<?php
$no = 0;
while ($row = mysqli_fetch_assoc($hasil)) {
echo "<tr>";
echo " <td><a href='pict/{$row['foto']}' />
		<img src ='thumb/t_{$row['foto']}' width='100' />
		</a></td>";
echo "<td>" .$row['nama']."</td>";
echo "<td>" .$row['harga']."</td>";
echo "<td>" .$row['stok']."</td>";
echo "<td>";
echo " <a href =' ".$_SERVER['PHP_SELF']."?idbarang=".
       $row ['idbarang']."'> BELI </a>";
echo "</td>";
echo "</tr>";
}
?>
</table>

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




















