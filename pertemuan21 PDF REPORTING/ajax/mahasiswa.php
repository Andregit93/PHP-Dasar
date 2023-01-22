<?php 
require '../functions.php';

$key = $_GET["keyword"]; 
$query = "SELECT * FROM mahasiswa WHERE
            nama LIKE '%$key%' OR
            nim LIKE '%$key%' OR
            email LIKE '%$key%' OR
            jurusan LIKE '%$key%'";
$mahasiswa = query($query);

?>

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