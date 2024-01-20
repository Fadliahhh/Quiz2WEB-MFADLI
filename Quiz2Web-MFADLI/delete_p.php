<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$ID_penerbit = $_GET['ID_penerbit'];
// query SQL untuk insert data
$query="DELETE FROM penerbit WHERE ID_penerbit='$ID_penerbit'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:admin.php");

?>