<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$ID_buku = $_POST['ID_buku'];
$kategori = $_POST['kategori'];
$nama_buku = $_POST['nama_buku'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
// update data ke database
mysqli_query($koneksi,"update buku set kategori='$kategori', nama_buku='$nama_buku',
harga='$harga', stok='$stok' where ID_buku='$ID_buku'");
// mengalihkan halaman kembali ke index.php
header("location:admin.php");

?>