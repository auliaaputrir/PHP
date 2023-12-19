<?php

//php mendukung default argumen value
//fitur ini memungkinkan jika kita memanggil function tidak memasukan parameter
//kita bisa menetukan data defaultnya apa
//contoh kode
function sayHello($name = "Anonymous"){
    echo "Hello $name".PHP_EOL;

}
sayHello(); //output -> hello anonymous
SayHello("Eko"); //output -> hello eko

//kesalahan default argumen value
//default argumen value bisa disimpan argumen manapun
//namun jika argumen lebih dari satu, dan kitamenyimpan default argumen value di parameter awal, maka itu kurang berguna
//contoh kode slah:
function Hello($firstname = "", $lastname)
{
    echo "Hello $firstname $lastname".PHP_EOL;
}
// Hello("Kurniaawan"); //eror, karena bigung mana yang diisi, mending pake string kosong aja
Hello("", "Kurniawan");