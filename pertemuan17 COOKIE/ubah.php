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
  <link rel="stylesheet" href="style/regis.css">
  <title>Tambah data</title>
</head>

<body>

  <div class="vh-150 d-flex justify-content-center align-items-center mt-5 mb-5">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
          <div class="card bg-white text-center">
            <div class="card-body p-5">
              <form class="mb-3 mt-2 md-4" action="" method="POST" enctype="multipart/form-data">
                <h2 class="fw-bold mb-5">Change Data</h2>
                <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
                <input type="hidden" name="gambarLama" value="<?= $mhs['gambar']; ?>">
                <div class="mb-3">
                  <label for="nim" class="form-label h6 d-flex align-items-start">NIM</label>
                  <input type="text" class="form-control input-sm" id="nim" name="nim" required value="<?= $mhs['nim']; ?>">
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label h6 d-flex align-items-start">Name</label>
                  <input type="text" class="form-control input-sm" id="nama" name="nama" value="<?= $mhs['nama']; ?>">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label h6 d-flex align-items-start">email</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?= $mhs['email']; ?>">
                </div>
                <div class="mb-3">
                  <label for="jurusan" class="form-label h6 d-flex align-items-start">Study Program</label>
                  <input type="text" class="form-control input-sm" id="jurusan" name="jurusan" value="<?= $mhs['jurusan']; ?>">
                </div>
                <div class="mb-3">
                  <label for="gambar" class="form-label h6 d-flex align-items-start">Photo</label>
                  <img src="img/<?= $mhs['gambar']; ?>" class="pb-3 rounded" alt="Profile Picture" width="80">
                  <input type="file" class="form-control input-sm" id="gambar" name="gambar">
                </div>
                <div class="d-grid pt-5 d-md-flex justify-content-md-center">
                  <button class="btn btn-outline-primary" style="width: 200px;" type="submit" name="submit">Save Change</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>