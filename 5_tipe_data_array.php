<?php

//array adalah tipe data yang berisikan kosong atau banyak data
//array di php bisa berisikan data dengan jenis berbeda-beda
//array di php memiliki panjang dinamis, kita bisa menambahkan data ke array tanpa ada batasan kondisi
//first index dimulai dari index ke 0
//cara membuat array
$values = array(1,2,3,4);
var_dump($values);
$names = ["Aulia", "Putri", "Rachmadani"];
var_dump($names);

//operasi pada array
//$array[index] =>mengakses data pada array sesuai no index
//$aaray[index]=value =>mengubah data di array pada nomer index dengan value baru
//$array[]=value => menambah data di array pd posisi paling belakang
//unset($array[index]) => menghapus data di arra, index otomatis hilang dari array
//count($array) => mengambil total data di array
