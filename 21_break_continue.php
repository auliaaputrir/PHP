<?php

//pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk mengehtikan case dalam switch
//sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruhu perulangan
//namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan berikutnya
//contoh penggunaan break
$counter = 1;
while(true){
    echo "Hello break : " . $counter.PHP_EOL;
    $counter++;
    if($counter > 9)
    {
        break;
    }
} 

//contoh penggunaan continue
for($counter=0; $counter<=100; $counter++)
{
    if($counter % 2 == 0)
    {
        continue;
    }
    echo "Hello continue " . $counter . PHP_EOL;
}