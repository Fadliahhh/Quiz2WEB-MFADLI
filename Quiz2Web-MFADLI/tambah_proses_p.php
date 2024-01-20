<?php
include "koneksi.php";

// menangkap data yang di kirim dari form
    $ID_penerbit = $_POST["ID_penerbit"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $kota = $_POST["kota"];
    $telephon = $_POST["telephon"];

// menginput data ke database
    $sql = "INSERT INTO penerbit (ID_penerbit, nama, alamat, kota, telephon)
    VALUES('$ID_penerbit','$nama','$alamat','$kota','$telephon')";
    $query = mysqli_query($koneksi, $sql);

// mengalihkan halaman kembali ke Beranda
    header("location:admin.php");
?>