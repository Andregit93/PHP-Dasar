<?php 
// pertemuan 2 - PHP dasar
// Sintaks PHP

// Standar output
// echo, print
// print_r
// var_dump

// penilisan sintaks PHP
// PHP di dalam HTML
// HTML di dalam PHP 

// variabel dan tipe data
// variabel
// tidak boleh diawali angka, tapi boleh mengandung angka

// $nama = "Andre sevtian";
// echo "nama saya $nama";


// operator
// aritmatika
// + - * / %

// $x = 200;
// $y = 10;

// echo $x * $y;


// penggabung string / concatenation / concat
//  .
// $namadepan = "Andre";
// $namabelakang = "Sevtian";
// echo $namadepan. " " .$namabelakang;


// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 6;
// echo $x;
// $nama = "Andre";
// $nama .= " ";
// $nama .= "Sevtian";
// echo $nama;


// perbandingan 
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");


// identitas
// var_dump(1 ==="1");


// Logika 
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x %2 == 0);
var_dump($x < 5 || $x %2 == 0);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo saya <?php echo "Andre Sevtian"; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>
    
</body>
</html>



