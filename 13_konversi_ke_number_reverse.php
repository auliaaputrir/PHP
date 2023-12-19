<?php

//kadang kita sering melakukan konversi tipe data dari string ke number (int/float) atau sebaliknya
//di PHP untuk melakukan konversi menggunakan tanda kurung : (tipe data)
//tipe data untuk string adalah string, int untuk integer, float untuk floating point
//contoh penggunaan:  
$value_string = (string) 100;
var_dump($value_string);
$value_int = (int) "100";
var_dump($value_int);
$value_float = (float) "100.11";
var_dump($value_float);