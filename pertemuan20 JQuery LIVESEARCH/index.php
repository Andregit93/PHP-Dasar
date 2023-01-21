<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// pagination
// konfigurasi
$jumlahDataPerHalaman = 4;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

// tombol cari ditekan
if ( isset($_POST["search"]) ) {
    $mahasiswa = cari($_POST["key"]);
}

?>

<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Halaman Admin</title>

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="https://unmuhbabel.ac.id/" target="blank">
                <img src="img/logo_unmuh.png" alt="Unmuh Babel" width="55">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex" role="search" class="search" action="" method="POST">
                    <input class="form-control mx-3 me-2" id="keyword" name="key" size="30" type="text"
                        placeholder="Search Data" autocomplete="off" aria-label="Search">
                    <button class="btn" id="tombol-cari" type="submit" name="search"><i
                            class="bi bi-search"></i></button>
                </form>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link active" href="tambah.php">Add Data</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a href="logout.php"><button class="btn btn-outline-danger logout"><i
                                    class="bi bi-box-arrow-right mx-2"></i>Log out</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->
    <div class="kosong"></div>
    <div class="container studentsData mb-5">
        <h1 class="text-center">Students<br>
            <hr class="mx-auto">
        </h1>
        <div class="table-responsive" id="container">
            <table class="text-center table" border="0" cellpadding="10" cellspacing="0">
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
                    <td>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle aksi" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="ubah.php?id=<?= $row["id"]; ?>">Change</a></li>
                                <li><a class="dropdown-item" href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                                    return confirm('Apa Anda Yakin?');">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                    <td><img class="rounded" src=" img/<?= $row["gambar"]; ?>" alt="" width="50px" height="50px"></td>
                    <td><?= $row["nim"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["jurusan"]; ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
        <!-- pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end p-3 pagination-sm">
                <li class="page-item <?php if ( $halamanAktif == 1 ) { echo "disabled"; } ?>">
                    <a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>">Previous</a>
                </li>
                <?php for ( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
                <li class="page-item <?php if ( $i == $halamanAktif ) { echo "active"; } ?>">
                    <a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                </li>
                <?php endfor; ?>
                <li class="page-item <?php if ( $halamanAktif == $jumlahHalaman ) { echo "disabled"; } ?>">
                    <a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>">Next</a>
                </li>
            </ul>
        </nav>
    </div>

    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>