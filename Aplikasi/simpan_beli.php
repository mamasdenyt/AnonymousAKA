<?php
$namacust =$_POST ['namacust'];
$email =$_POST ['email'];
$notelp=$_POST ['notelp'];
$tanggal=date("Y-m-d");
$barang_pilih ='';
$qty      =1;


$dataValid ="YA";

 
if (strlen(trim($namacust))==0) {
echo "Nama Barang Harus Diisi! <br/>";
$dataValid = "TIDAK";
}

if (strlen(trim($notelp))==0) {
echo "notelp Harus Diisi! <br/>";
$dataValid = "TIDAK";
}
if(isset($_COOKIE["keranjang"])){
   $barang_pilih= $_COOKIE["keranjang"]; 
   }
   else{
   echo "keranjang belanja kosong! <br/>";
$dataValid == "TIDAK";
}
if($dataValid == "TIDAK"){
echo "Masih Ada Kesalahan , silahkanperbaiki! <br/>";
echo "<input type ='button' value ='kembali' 
onClick='self.history.back()'>";
exit;
}
echo "Data Siap disimpan.";

setcookie('keranjang', $barang_pilih, time()+3600);
?>