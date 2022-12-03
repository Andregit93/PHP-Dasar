<?php 
// pengulangan pada array
// for / foreach

$numbers = [21, 3, 45, 1, 21, 31];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: skyblue;
            text-align: center;
            line-height: 50px;
            margin: 4px;
            float: left;
        }
        .clear {clear: both;}
    </style>
</head>
<body>
<?php for ( $i = 0; $i < count($numbers); $i++) { ?>
    <div class="kotak"><?php echo $numbers[$i]; ?></div>
<?php } ?>

    <div class="clear"></div>

<?php foreach ($numbers as $number) { ?>
    <div class="kotak"><?php echo $number; ?></div>
<?php } ?>

    <div class="clear"></div>
    
<?php foreach ($numbers as $number) : ?>
    <div class="kotak"><?php echo $number; ?></div>
<?php endforeach; ?>
</body>
</html>