<h2>Data PEMBELI BARANG.</h2>
<form action='simpan_beli.php' method='post' enctype="multipart/form-data">
<table border='1'>
<tr>
<td>Nama</td>
<td><input type='text' name='namacust' maxlength='40' size='31' /></td>
</tr>
<tr>
<td>Email</td>
<td><input type='email' name='email' maxlength='9' size='10' /></td>
</tr>

<tr>
<td>Notelp</td>
<td><input type='text' name='notelp' maxlength='9' size='10' /></td>
</tr>
<tr>
<td colspan='2' align='right'>
<input type='submit' value='Simpan' name='proses'/>
</td>
</tr>
</table>
</form>
<?php include_once("keranjang_belanja.php"); ?>
 
 
