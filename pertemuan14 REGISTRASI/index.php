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

    <style>
        h1 {
            text-align: center;
            margin: 30px;
        }
        table {
            margin: 20px auto;
        }
        .search {
            position: absolute;
            right: 0;
            margin-right: 220px;
        }
        .add {
            margin-left: 220px;
            width: 180px;
            height: 30px;
        }
    </style>

</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <form class="search" action="" method="POST">
        <input type="text" name="key" size="40" autofocus placeholder="Masukan Key Pencarian" autocomplete="off">
        <button type="submit" name="search">Cari Data!</button>
    </form>
    <button class="add"><a href="tambah.php">Tambah Data Mahasiswa</a></button>

    <table border="0" cellpadding="10" cellspacing="0">
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
            <td><button><a href="ubah.php?id=<?= $row["id"]; ?>">UBAH</a></button> | <button><a href="hapus.php?id=<?= $row["id"]; ?>"onclick="
            return confirm('Apa Anda Yakin?');">HAPUS</a></button></td>
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