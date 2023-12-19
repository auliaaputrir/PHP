<?php

//kadang kita hanya butuh menggunakan kondisi sederhana if statement, sperti hanya menggunakan perbandingan ==
//switch adalah statement percabangan yang sama dengan if, namun lebih sederhana cara pembuatannya
//kondisi di switch statement hanya untuk perbandingan ==
switch($nilai){
    case "a";
        echo "Anda lulus dengan sangat baik";
        break;
    case "b";
    case "c";
        echo "anda lulus".PHP_EOL;
        break;
    case "d";
        echo "Anda tidak lulus".PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan".PHP_EOL;
}
//bisa juga menggunakan syntax alternatif