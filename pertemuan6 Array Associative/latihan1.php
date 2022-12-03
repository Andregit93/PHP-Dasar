<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            background-color: skyblue;
            float: left;
            margin: 3px;
            transition: 0.5s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }


    </style>

</head>
<body>

<?php 
$numbers = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];  
?>

<?php foreach ( $numbers as $number ) : ?>
    <?php foreach ( $number as $num ) : ?>
        <div class="kotak"><?php echo $num; ?></div>
    <?php endforeach; ?>
<?php endforeach; ?>


    
</body>
</html>