<?php 
// Superglobal
// variabel global milik PHP
// merupakan arrya associative
// $_GET

$lectures = [
    ["name" => "M. adha al-kodri",
    "nbm" => "872183289",
    "email" => "adha@gmail.com",
    "expert" => "Sosiologi",
    "image" => "1.jpg"],
    ["name" => "Suprayuandi",
    "nbm" => "0913812",
    "email" => "supra@gmail.com",
    "expert" => "Proggramming",
    "image" => "2.jpg"],
    ["name" => "Eka Altiarika",
    "nbm" => "213893218",
    "email" => "Eka@gmail.com",
    "expert" => "Artificial Intelegence",
    "image" => "3.jpg"],        
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Data Mahasiswa</h1>
<ul>
<?php foreach ( $lectures as $lecture ) : ?>
            <li><a href="latihan2.php?name=<?= $lecture["name"]; ?>&nbm=<?= $lecture["nbm"]; ?>&email=<?= $lecture["email"]; ?>&expert=<?= $lecture["expert"]; ?>&image=<?= $lecture["image"]; ?> "><?php echo $lecture["name"]; ?></li></a>
<?php endforeach; ?>
</ul>
</body>
</html>