<?php

//kadang ada kasus dimana kita butuh melakukan pengecekkan kondisi menggunakan if statement
//lalu jika benar kita ingin memberi nilai terhadap variabel dengan nilai x dan jika salah dengan nilai y
//penggunaan if statement pada kasus seperti ini bisa dipersingkat menggunakan ternary operator
//ternary operator menggunakan kata kunci ? dan :
//contoh penggunaan if else biasa
$gender = "pria";
$hi = NULL;
if ($gender == "pria"){
    $hi = "Hi Bro";
}
else{
    $hi = "Hi Nona";
}
echo $hi.PHP_EOL;
//contoh penggunaan ternary operator
$gender = "pria";
$hi = $gender == "pria"? "Hi Bro":"Hi Nona";
echo $hi.PHP_EOL;