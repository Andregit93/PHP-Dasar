<?php 
require 'functions.php';
// cek tombol sudah ditekan apa belum
if ( isset($_POST["submit"]) ) {

    if ( tambah($_POST) > 0 ) {
        echo "
        <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Ditambahkan!');
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
            margin: 10px 0 10px 80px;
        }
        button {
            margin: 10px 0 0 10px;
            width: 120px;
            height: 30px;
        }
    </style>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <ul type="none">
            <li>
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim" required>
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" id="email" name="email">
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" id="jurusan" name="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="file" id="gambar" name="gambar" class="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
    
</body>
</html>