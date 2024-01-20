<?php
include "koneksi.php";


// // menangkap data yang di kirim dari form
    $ID_buku = $_POST["ID_buku"];
    $kategori = $_POST["kategori"];
    $nama_buku = $_POST["nama_buku"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $penerbit = $_POST["penerbit"];

// // menginput data ke database
    $sql = "INSERT INTO buku (ID_buku, kategori, nama_buku, harga, stok, penerbit)
    VALUES('$ID_buku','$kategori','$nama_buku','$harga','$stok','$penerbit')";
    $query = mysqli_query($koneksi, $sql);

// // mengalihkan halaman kembali ke Beranda
    header("location:admin.php");
?>