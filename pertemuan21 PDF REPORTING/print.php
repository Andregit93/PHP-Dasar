<?php
require_once __DIR__ . '/vendor/autoload.php';
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Print</title>
    <style>
        body {
            font-family: Arial;
        }
    </style>
</head>
<body>
    <div class="container studentsData mb-5">
    <h1 class="text-center">Students<br>
        <hr class="mx-auto">
    </h1>
    <div class="table-responsive" id="container">
        <table class="text-center table" border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>NO</th>
                <th>GAMBAR</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th>JURUSAN</th>
            </tr>';
        $i = 1;
        foreach( $mahasiswa as $row ) {
            $html .= '<tr>
            <td>'. $i++ .'</td>
            <td><img src="img/'.$row["gambar"].'" width="50px"></td>
            <td>'. $row["nim"] .'</td>
            <td>'. $row["nama"] .'</td>
            <td>'. $row["email"] .'</td>
            <td>'. $row["jurusan"] .'</td>
            </tr>';
        }


$html .= '</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('Students Data', 'I');

?>

