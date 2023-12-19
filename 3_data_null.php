<?php

//merepresentasikan sebuah variabel tanpa nilai
//saat ingin membuat variabel lalu ingin menghapus datanya bisa menggunakan nilai NULL
//untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case sensitive)

//contoh
//membuat varibael name dan mengisi valuenya
$name = "Aulia";
echo $name;
//menghapus data dalam variabel namee
$name = NULL;
var_dump  ($name);

//boleh juga digunakan untuk membuat variabel yang belum ada isinya
//contoh
$age = NULL;
//artinya variabel age belum ada isinya


//mengecek apakah data NULL
//kadang kita perlu mengecek apakah variabel bernilai null atau tidak
//u/ mengecek kita bisa menggunakan function is_null($variabel)
//contoh
echo "Is name NULL ?";
echo is_null($name); //outputnya 1 artinya benar
echo "\n";
var_dump(is_null($name));
echo "\n";