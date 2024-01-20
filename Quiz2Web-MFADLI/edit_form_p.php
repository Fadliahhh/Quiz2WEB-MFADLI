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
<h3 align="center" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Edit Data Penerbit</h3>

<?php
include "koneksi.php";
$ID_penerbit = $_GET['ID_penerbit'];
$edit = mysqli_query($koneksi,"SELECT * FROM penerbit WHERE ID_penerbit='$ID_penerbit'");
while ($row = mysqli_fetch_array($edit)) {
?>


<form method="post" action="edit_proses_p.php">
<table>
<tr>
<td>Nama Penerbit</td>
<td>
<input type="hidden" name="ID_penerbit" value="<?php echo $row['ID_penerbit']; ?>">
<input type="text" name="nama" value="<?php echo $row['nama']; ?>">
</td>
</tr>

<tr>
<td>alamat</td>
<td>
<input type="text" name="alamat" value="<?php echo $row['alamat']; ?>">
</td>
</tr>

<tr>
<td>kota</td>
<td>
<input type="text" name="kota" value="<?php echo $row['kota']; ?>">
</td>
</tr>

<tr>
<td>Telephon</td>
<td>
<input type="text" name="telephon" value="<?php echo $row['telephon']; ?>">
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