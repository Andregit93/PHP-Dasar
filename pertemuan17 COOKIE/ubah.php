<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// cek tombol sudah ditekan apa belum
if ( isset($_POST["submit"]) ) {
    if ( ubah($_POST) > 0 ) {
        echo "
        <script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Diubah');
            document.location.href = 'index.php';
        </script>";
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>

    <style>
        li, label {
            display: block;
            margin: 20px 0 10px 0;
        }
        h1 {
            text-align: center;
        }
        form {
            text-align: center;
            margin-right: 38px;
        }
        .gambar {
            margin: 20px 0 10px 80px;
        }
        button {
            margin: 10px 0 0 10px;
            width: 120px;
            height: 30px;
        }
    </style>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs['gambar']; ?>">
        <ul>
            <li>
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim" required value="<?= $mhs['nim']; ?>">
            </li>
            <li>
                <label for="nama">NAMA</label>
                <input type="text" id="nama" name="nama" value="<?= $mhs['nama']; ?>">
            </li>
            <li>
                <label for="email">EMAIL</label>
                <input type="text" id="email" name="email" value="<?= $mhs['email']; ?>">
            </li>
            <li>
                <label for="jurusan">JURUSAN</label>
                <input type="text" id="jurusan" name="jurusan" value="<?= $mhs['jurusan']; ?>">
            </li>
            <li>
                <label for="gambar">GAMBAR</label><br>
                <img src="img/<?= $mhs['gambar']; ?>" alt="" width="80"><br>
                <input type="file" id="gambar" name="gambar" class="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
    
</body>
</html>