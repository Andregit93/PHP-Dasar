<?php 
function hallo($time = "datang", $name = "Admin") {
    return "Selamat $time, $name";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba function</title>
</head>
<body>
    
    <h1><?php echo hallo("pagi", "Andre"); ?></h1>

</body>
</html>