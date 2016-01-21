<?php
$idbarang = $_GET['idbarang'];
include "koneksi.php";
$sql = "select * from barang where idbarang = '$idbarang'";
$hasil = mysqli_query($kon,$sql);
if(!$hasil) die ('Gagal query. . .');

$data = mysqli_fetch_array($hasil);
$nama = $data['nama'];
$harga = $data['harga'];
$stok = $data['stok'];
$foto = $data['foto'];

echo " <h2>Konfirmasi Hapus</h2>";
echo "NamaBarang : ".$nama."<br/>";
echo "HargaBarang : ".$harga."<br/>";
echo "Foto : <imgsrc ='thumb/t_".$foto."' /><br/><br/>";
echo "APAKAH DATA INI AKAN DI HAPUS? <br/>";
echo " <a href ='barang_hapus.php?id=$id&hapus=1'> YA </a>";
echo " <a href ='barang_tampil.php'> TIDAK </a>";

if(isset($_GET['hapus'])) {
	$data = mysql_fetch_assoc($hasil);
	$foto = $data['foto'];
	$sql = "delete from barang where idbarang ='$id'";
	$hasil = mysql_query($sql);
		if(!$hasil){
		echo " GagalHapus ID : $kode ..<br/>";
		echo " <a href = 'barang_tampil.php'>KembaliKeDaftarBarang</a>";
		} else{
			$gbr = "pict/$foto";
			if (file_exists($gbr)) unlink($gbr);
			$gbr = "thumb/t_$foto";
			if (file_exists($gbr)) unlink($gbr);
			header('location:barang_tampil.php');
			}
			}
			?>
 
