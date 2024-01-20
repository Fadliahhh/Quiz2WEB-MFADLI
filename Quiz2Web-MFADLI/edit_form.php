<!DOCTYPE html>
<html>
<head>
<title>Form Edit Data</title>
<style>
    fieldset {
    width: 400px;
    margin:auto;
    }
</style>
</head>
<body>
<fieldset >
<!--Judul pada fieldset-->
<legend align="center"></legend>
<h3 align="center" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Edit Data buku</h3>

<?php
include "koneksi.php";
$ID_buku = $_GET['ID_buku'];
$edit = mysqli_query($koneksi,"SELECT * FROM buku WHERE ID_buku='$ID_buku'");
while ($row = mysqli_fetch_array($edit)) {
?>


<form method="post" action="edit_proses.php">
<table>
<tr>
<td>Nama Produk</td>
<td>
<input type="hidden" name="ID_buku" value="<?php echo $row['ID_buku']; ?>">
<input type="text" name="nama_buku" value="<?php echo $row['nama_buku']; ?>">
</td>
</tr>

<tr>
<td>Kategori</td>
<td>
<input type="text" name="kategori" value="<?php echo $row['kategori']; ?>">
</td>
</tr>

<tr>
<td>Harga</td>
<td>
<input type="text" name="harga" value="<?php echo $row['harga']; ?>">
</td>
</tr>

<tr>
<td>Stok</td>
<td>
<input type="text" name="stok" value="<?php echo $row['stok']; ?>">
</td>
</tr>

<tr>
<td>Penerbit</td>
<td>
<input type="text" name="penerbit" value="<?php echo $row['penerbit']; ?>">
</td>
</tr>

<tr>
<td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>
<?php
}
?>
</fieldset>
</body>
</html>