<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$ID_buku = $_GET['ID_buku'];
// query SQL untuk insert data
$query="DELETE FROM buku WHERE ID_buku='$ID_buku'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:admin.php");

?>