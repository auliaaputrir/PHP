<?php

//selain mengubah menjadi null, di php juga kita bisa menghapus sebuah variabel, caranya dengan menggunakan function unset($variabel)
//namun saat menghapus variabel, kita tidak bisa mengaksesnya lagi
//bahkan function is_null($variabel) akan eror
//agar lebih aman lebih baik menggunakan function isset($variabel) untuk mengecek sebuah variabel memiliki nilai atau tidak

//contoh 1
// $contoh = "lia";
// unset($contoh);
// echo $contoh; //outputnya undefined

//contoh 2
$contoh = "putri";
var_dump(isset($contoh)); //hasilnya true

$contoh = NULL;
var_dump(isset($contoh)); //hasilnya false