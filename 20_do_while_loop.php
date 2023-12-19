<?php

//do while loop adalah perulangan yang mirip dengan while
//perbedaannya hanya pada pengecekkan kondisi
//pengecekkan kondisi di while loop dilakukan diawal sebelum perulangan dilakukan, sedang di do while loop dilakukan setelah perulangan dilakukan
//oleh karena itu dalam do while loop , minimal pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai true
//contoh penggunaan
$counter = 100;
do{
    echo "Hello while loop : " .$counter . PHP_EOL;
    $counter++;
}
while ($counter<=101);