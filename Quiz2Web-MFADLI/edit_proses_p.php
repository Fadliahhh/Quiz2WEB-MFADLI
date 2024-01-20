<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$ID_penerbit = $_POST['ID_penerbit'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telephon = $_POST['telephon'];
// update data ke database
mysqli_query($koneksi,"update penerbit set nama='$nama', alamat='$alamat',
kota='$kota', telephon='$telephon' where ID_penerbit='$ID_penerbit'");
// mengalihkan halaman kembali ke index.php
header("location:admin.php");

?>