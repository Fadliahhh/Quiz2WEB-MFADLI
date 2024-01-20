<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fadli's Book Market</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        body {
            background-image: url(media/Untitled-1.jpg);
            background-size: cover;
        }
    </style>
    <section class="Land" id="home"> 
        <img src="media/s.png" alt="">
        <nav>
            <ul>
                <li><a href="" style="color:rgb(239, 64, 64);">Home</a></li> 
                <li><a href="admin.php" style="color:rgb(239, 64, 64);">Admin</a></li> 
                <li><a href="#Stok" style="color:rgb(239, 64, 64);">Pengadaan</a></li> 
            </ul>
        </nav>
        <div class="judul">
            <h2 style="color: rgb(239, 64, 64);">mFadli's</h2>
            <h1 style="color: rgb(255, 167, 50);">Book Market</h1>
            <p>Selamat datang di Toko buku terpercaya</p>
        </div>  
    </section>

    <div class="cari">
        <div  id="Stok" style="padding-top: 1rem ;">
    <!--Judul pada fieldset-->
            <center><h1>Buku yang tersedia</h1></center>
            <form style="padding-bottom: 2rem; text-align: center;" method="GET" action="index.php">
                <label>Cari buku : </label>
                <input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>" />
                <button type="submit">Cari</button>
            </form>
            <table border="" align="center">
                <thead>
                    <tr>
                        <th>Kode Produk</th>
                        <th>Kategori</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Penerbit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //untuk meinclude kan koneksi
                        include 'koneksi.php';
                        //jika kita klik cari, maka yang tampil query cari ini
                        if(isset($_GET['kata_cari'])) {
                        //menampung variabel kata_cari dari form pencarian
                        $kata_cari = $_GET['kata_cari'];
                        $query = "SELECT * FROM buku WHERE ID_buku like '%".$kata_cari."%' OR
                        nama_buku like '%".$kata_cari."%' ORDER BY ID_buku ASC";
                        } else {
                        //jika tidak ada pencarian, default yang dijalankan query ini
                        $query = "SELECT * FROM buku ORDER BY ID_buku ASC";
                        }
                        $result = mysqli_query($koneksi, $query);
                        if(!$result) {
                        die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                        }
                        //kalau ini melakukan foreach atau perulangan
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['ID_buku']; ?></td>
                        <td><?php echo $row['kategori']; ?></td>
                        <td><?php echo $row['nama_buku']; ?></td>
                        <td><?php echo $row['harga']; ?></td>
                        <td><?php echo $row['stok']; ?></td>
                        <td><?php echo $row['penerbit']; ?></td>
                    </tr>
    <?php
    }
    ?>
                </tbody>
            </table>
        </div>

    </div>
    <center>
        <button><a href="#home" style="font-size: 25px; text-decoration: none;">Kembali ke atas</a></button>

    </center>

</body>
</html> 