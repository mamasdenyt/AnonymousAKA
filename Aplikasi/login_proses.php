<?php
session_start();
$pengguna = $_POST['pengguna'];
$kata_kunci = md5($_POST['kata_kunci']);

$dataValid="YA";
if (strlen(trim($pengguna))==0) {
echo "user hasrus di isi <br>";
$dataValid="TIDAK";
}
if (strlen(trim($kata_kunci))==0) {
echo "password hasrus di isi <br>";
$dataValid="TIDAK";
}
if ($dataValid=="TIDAK") {
	echo "Masih ada kesalahaan, silahkan diperbaiki !</br>";
	echo "<input type='button' value='kembali' onClick='self.history.back()'";
	exit;}
include "Koneksi.php";
$sql = "select * from pengguna where user='".$pengguna."' and password='".$kata_kunci."' limit 1";
$hasil = mysqli_query ($kon, $sql) or die ("Gagal Akses");

$jumlah = mysqli_num_rows($hasil);
if ($jumlah>0) {
$row = mysqli_fetch_assoc($hasil);
$_SESSION["user"] = $row["user"];
$_SESSION["nama_lengkap"] = $row["nama_lengkap"];
$_SESSION["akses"] = $row["akses"];
header("Location:halaman_awal.php");
} else {
echo "user atau password salah ! <br>";
	echo "<input type='button' value='kembali' onClick='self.history.back()'";
}
?>
