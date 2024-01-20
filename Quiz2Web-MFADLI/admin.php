<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Room</title>
    <style>
        fieldset {
        width: 400px;
        margin:auto;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <Style>
        body {
            background-image: url(media/Untitled-1.jpg);
            background-size: cover;
        }
    </Style>
    <div >
<!--Judul pada fieldset-->
        <center><h1 style="font-family: 'Cinzel Decorative', serif; font-size: 49px ;">Selamat datang dihalaman Admin</h1></center>
        <center><h1 style="font-family:'Acme', sans-serif;">Data Buku</h1></center>
        <center>||<a href="tambah_form.html">Tambah Data</a>||</center>
        <br>
        <form method="GET" action="index.php" style="text-align: center; padding: 2rem; ">
            <label>Kata Pencarian : </label>
            <input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>" />
            <button type="submit">Cari</button>
        </form>
        <table border="1" align="center">
            <thead>
            <tr>
                <th>Kode Produk</th>
                <th>Kategori</th>
                <th>Nama Buku</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Penerbit</th>
                <!--Tambahan untuk opsi Update & Delete-->
                <th>OPSI</th>
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

                    <!--Tambahan untuk opsi edit dan hapus-->
                    <td>
                        <a href="edit_form.php?ID_buku=<?php echo $row['ID_buku']; ?>">EDIT</a>
                        <a href="delete.php?ID_buku=<?php echo $row['ID_buku']; ?>">HAPUS</a>
                    </td>
                </tr>

<?php
}
?>
            </tbody>
        </table>
    </div>
    <div style="margin-bottom: 5rem;" >
<!--Judul pada fieldset-->
        <center><h1 style="font-family: 'Acme', sans-serif;">Data Penerbit</h1></center>
        <center style="padding-top: 1rem;">||<a href="tambah_form_p.html">Tambah Data</a>||</center>
        <br>
        <form method="GET" action="index.php" style="text-align: center; padding: 2rem; ">
            <label>Kata Pencarian : </label>
            <input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>" />
            <button type="submit">Cari</button>
        </form>
        <table border="1" align="center">
            <thead>
            <tr>
                <th>Kode Penerbit</th>
                <th>Nama Penerbit</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>No Telephon</th>
                <!--Tambahan untuk opsi Update & Delete-->
                <th>OPSI</th>
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
                    $query = "SELECT * FROM penerbit WHERE ID_penerbit like '%".$kata_cari."%' OR
                    nama like '%".$kata_cari."%' ORDER BY ID_penerbit ASC";
                    } else {
                    //jika tidak ada pencarian, default yang dijalankan query ini
                    $query = "SELECT * FROM penerbit ORDER BY ID_penerbit ASC";
                    }
                    $result = mysqli_query($koneksi, $query);
                    if(!$result) {
                    die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                    }
                    //kalau ini melakukan foreach atau perulangan
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_penerbit']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['kota']; ?></td>
                    <td><?php echo $row['telephon']; ?></td>

                    <!--Tambahan untuk opsi edit dan hapus-->
                    <td>
                        <a href="edit_form_p.php?ID_penerbit=<?php echo $row['ID_penerbit']; ?>">EDIT</a>
                        <a href="delete_p.php?ID_penerbit=<?php echo $row['ID_penerbit']; ?>">HAPUS</a>
                    </td>
                </tr>

<?php
}
?>
            </tbody>
        </table>
    </div>
    <div>
        <center><a href="index.php" style="font-size: 2rem;">Home</a></center>
    </div>
</body>
</html>