<?php 
// array
// variabel yg dapat memilki banyak nilai 
// elemen pada array boleh memiliki tipe data yg berbeda
// pasangan anatara key dan value
// key adalah index yg dimulai dari 0

// membuat array 
// cara lama 
$day = array("senin", "selasa", "rabu");

// cara baru
$month = ["January", "february", "maret"];



// menampilkan array
// var_dump() / print_r()
// var_dump($day);
// echo "<br>";
// print_r($month);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $month[2];
// echo "<br>";
// echo $day[0];


// menambah elemen pada array
var_dump($day);
echo "<br>";
$day[] = "kamis";
$day[] = "minggu";
var_dump($day);



?>