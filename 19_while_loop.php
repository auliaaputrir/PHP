<?php

//while loop adalah versi perulangan yang lebih sederhana dibanding for loop
//while loop hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement
//cara penggunaan
$counter = 1;
while($counter <= 10){
    echo "Hello while loop : ".$counter .PHP_EOL;
    $counter++;
}
//bisa juga menggunakan syntax alternatif