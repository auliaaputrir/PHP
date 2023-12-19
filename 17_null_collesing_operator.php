<?php

//sebelumnya kita tahu bahwa data kosong direpresentasikan dengan data null di php
//dan hal yang repot adalah mengecek apakah sebuah data atau tidak dan null atau bukan
//biasanya untuk melakukan itu, kita perlu menggunakan pengecekkan if statement dengan function isset($variabel)
//namun untungnya di php ada null collesing operator menggunakan ??
//contoh kode tanpa collessing operator
$data = [];
if(isset($data['action'])){
    $action = $data['action'];
}else{
    $action = "nothing";
}
echo $action;

//contoh kode menggunakan null collesing operator
$data = [];
$action = $data['action']??'nothing';
echo $action;