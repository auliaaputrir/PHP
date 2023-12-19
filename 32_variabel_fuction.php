<?php

// php mendukung konsep yang bernama variabel function
// varabel function adalah kemampuan memanggil sebuat function function dari value yang terdapat di sebuah variabel
// u/ menggunakan variabel function kita bisa seara langsung memanggil $namaVariabel()
// jika ingin menambahkan argumen kita bisa menggunakan $namavariabel(argumen)
// contoh
function foo(){
    echo "FOO" . PHP_EOL;
}
function bar(){
    echo "BAR" . PHP_EOL;
}
$functionname = "foo";
$functionname();

//contoh lagi
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);

    echo "Hello $finalName" . PHP_EOL;
}
function sampleFunction (string $name) : string{
    return "sample $name";
}
sayHello("Eko", 'sampleFunction');