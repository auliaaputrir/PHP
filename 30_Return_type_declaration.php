<?php

//sama seperti pada argumen, pada return value pun kita bisa mendeklarasikan tipe datannya 
//hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function
//untuk mendeklarasikan tipe data kembalian function setelah kurung () kita bisa tambahkan : diikuti tipe data kembaliannya
//contoh:
function sum (int $first, int $second)
{
    return $first + $second;
}