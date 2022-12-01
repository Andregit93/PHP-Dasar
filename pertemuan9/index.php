<?php 
require 'functions.php';

// ambil data dari tabel
$mahasiswa = query("SELECT * FROM mahasiswa");

// ambil data (fetch) dari objek result 
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya  

// while ( $mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs);
// }

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
            <td><a href="">UBAH</a> | <a href="">HAPUS</a></td>
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