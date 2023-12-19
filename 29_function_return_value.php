<?php
//secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat sebuah function mengembalikan nilai
//dan didalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return
//lalu diikuti dengan data yang ingin dihasilkan
//kita hanya bisa menghasilkan 1 data di sebuah function
//tidak lebih dari satu
//contoh kode:
function sum(int $first, int $second)
{
    return $first+$second;
}
$total = sum(10,10);
var_dump($total);
$total = sum(20,20);
var_dump($total);

//contoh lagi
function getFinalValue(int $value)
{
    if ($value >= 80){
        return "A";
    }
    elseif($value >= 70){
        return "B";
    }
    elseif ($value >= 60)
    {
        return "C";
    }
    elseif ($value >= 50)
    {
        return "D";
    }
    else{
        return "E";
    }
}