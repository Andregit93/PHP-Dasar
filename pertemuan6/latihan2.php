<?php 
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
    <title>Latihan2</title>
</head>
<body>
    <?php foreach ( $lectures as $lecture ) : ?>
        <ul>
            <li><img src="img/<?php echo $lecture["image"]; ?>" ></li>
            <li><?php echo $lecture["name"]; ?></li>
            <li><?php echo $lecture["nbm"]; ?></li>
            <li><?php echo $lecture["email"]; ?></li>
            <li><?php echo $lecture["expert"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>