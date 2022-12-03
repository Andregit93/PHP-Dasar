<?php 
$students = [
    ["andre sevtian", "9072130", "Ilmu Komputer", "andresevtian@gmail.com"],
    ["arga", "31281239", "Ilmu Komputer", "arga@gmail.com"],
    ["yudi", "21031238", "Ilmu Komputer", "yudi@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <?php foreach ( $students as $student ) : ?>
    <ul>
        <li>Nama : <?php echo $student[0]; ?></li>
        <li>NIM : <?php echo $student[1]; ?></li>
        <li>Prodi : <?php echo $student[2]; ?></li>
        <li>Email : <?php echo $student[3]; ?></li>
    </ul>
    <?php endforeach; ?>
        
</body>
</html>