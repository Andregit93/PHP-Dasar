$(document).ready(function() {

    // hilangkan tombol cari
    $('#tombol-cari').hide()

    // event ketika keyword ditulis
    $('#keyword').on('keyup', function() {
        $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());
    });


});



// // ambil elemen2 yg dibutuhkan
// var keyword = document.getElementById('keyword');
// var tombolCari = document.getElementById('tombol-cari');
// var container = document.getElementById('container');

// // tambahkan event pada saat keyword di ketik
// keyword.addEventListener('keyup', function() {
    

//     // buat objek ajax
//     var xhr = new XMLHttpRequest();

//     // cek kesiapan ajax
//     xhr.onreadystatechange = function() {
//         if( xhr.readyState == 4 && xhr.status == 200 ) {
//             container.innerHTML = xhr.responseText;
//         }
//     }

//     // eksekusi ajax 
//     xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
//     xhr.send();
// });