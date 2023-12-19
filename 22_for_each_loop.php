<?php

//kadang kita bisa mengakses data array menggunakan perulangan 
//mengakses data array menggunakan perulangan sangat bertele-tele
//kita harus membuat counter lalu mengakses array menggunakan counter yang kita buat
//di php terapat perulangan for each yang bisa digunakan untuk mengakses seluruh data di array secara otomatis
//contoh kode tanpa foreach
$names = ["Aulia", "Putri", "Rachmadani"];
for ($i=0; $i<count($names); $i++)
{
    echo "Hello $names[$i]".PHP_EOL;
}
//menggunakan for each
foreach($names as $name)
{
    echo "Hello $name" .PHP_EOL;
}
//jika butuh index 
//foreach ($names as $index => $name)
//contoh 
$person = [
    "first_name" => "Aulia",
    "middle_name" => "Putri",
    "last_name" => "Rachmadani"
];
foreach($person as $key=>$value){
    echo "$key $value".PHP_EOL;
}