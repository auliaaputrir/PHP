<?php

//merupakan kemampuan dima kita bisa membuat sebuah parameter yang menerima banyak value
//variable lenght argumen list secara otomatis akan membuat argument tersebut menjadi array
//namun kita tidak perlu mengirim array secara manual ke functionnya
//variabel lenght argumen list hanya bisa dilakukan di argumen posisi terakhir
//contoh penggunaan
function sumAll(...$values){
    $total = 0;
    foreach ($values as $value)
    {
        $total += $value;

    }
    echo "Total ". implode ("+", $values) . "=$total" .PHP_EOL;
}
sumAll(10,20,30,40);