<?php
// cek apakah tidak ada data di $_GET 
if ( !isset($_GET["name"]) || 
     !isset($_GET["nbm"]) ||
     !isset($_GET["email"]) ||
     !isset($_GET["expert"]) ||
     !isset($_GET["image"])) {
        // redirect
        header("Location: latihan1.php");
        exit;
     }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
</head>
<body>
    <h1>Detail Mahasiswa</h1>
    <ul>
        <li><img src="img/<?php echo $_GET["image"]; ?>"></li>
        <li><?php echo $_GET["name"]; ?></li>
        <li><?php echo $_GET["nbm"]; ?></li>
        <li><?php echo $_GET["email"]; ?></li>
        <li><?php echo $_GET["expert"]; ?></li>
    </ul>

    <a href="latihan1.php"><h3>Kembali ke daftar mahasiswa</h3></a>
    
</body>
</html>