<?php 
require 'functions.php';

// ambil data dari tabel
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombo; cari ditekan
if ( isset($_POST["search"]) ) {
    $mahasiswa = cari($_POST["key"]);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">         
    <title>Halaman Admin</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="POST">
        <input type="text" name="key" size="40" autofocus placeholder="Masukan Key Pencarian" autocomplete="off">
        <button type="submit" name="search">Cari Data!</button>
    </form>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NO</th>
            <th>AKSI</th>
            <th>GAMBAR</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>JURUSAN</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ( $mahasiswa as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><a href="ubah.php?id=<?= $row["id"]; ?>">UBAH</a> | <a href="hapus.php?id=<?= $row["id"]; ?>"onclick="
            return confirm('Apa Anda Yakin?');">HAPUS</a></td>
            <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="50px" height="50px"></td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    
</body>
</html>