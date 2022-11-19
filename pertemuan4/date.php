<?php 
// date untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");


// time
// UNIX Timestamp / EPOCH time
// detik yg sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l, d M Y", time()-60*60*24*20)


// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan , tanggal, tahun
// echo date("l", mktime(0, 0, 0, 6, 12, 2003));

// strtotime
// echo date("l", strtotime("12 june 2003"));


?>