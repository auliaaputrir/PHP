<?php

//sama seperti variabel, argumen di php bisa kita masukkan data yang dinamis
//kadang terlalu dinamis juga menyulitkan, bila ternyata hanya ingin menggunakan argumen tertentu
//di Php, kita bisa menambahkan type data di argumen, sehingga php akan melakukan pengecekkan ketika kita mengirim value ke function tersebut
//jika tipe data value tidak sesuai, maka akan terjadi error
//secara default php akan melakukan percobaan konversi secara otomatis
//misal jika kita menggunakan tipe data int, tapi kita mengirim string, maka php akan otomatis mengkonversi string menjadi integer
//ada berapa type yang valid
//-----------------------------------------------------------------------------------------------------------------
//      Type           |                                Keterangan
//-----------------------------------------------------------------------------------------------------------------
//  class/interface    |    Parameter harus bertipe class/interface
//  Self               |    Parameter harus bertipe sama dengan class dimana function dibuat
//  array              |    Parameter harus bertipe array
//  callable           |    Parameter harus bertipe callable
//  bool               |    Parameter harus bertipe boolean
//  float              |    Parameter harus bertipe floating point
//  int                |    Paramenter harus bertipe integer
//  string             |    Parameter harus bertipe string
//  iterable           |    Parameter harus bertipe array/tanversable
//  object             |    Paramerter harus bertipe objek

//contoh kode
function sum(int $first, int $last){
    $total = $first + $last;
    echo "Total $first + $last = $total".PHP_EOL;
}
sum(100,100);
sum("100", "100"); //di convert ke int