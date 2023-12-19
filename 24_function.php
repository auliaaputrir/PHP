<?php

//function adalah blok kode yang akan berjalan saat di panggil
//untuk membuat function di php, kita bisa menggunakan kata kunci function, lalu diikuti nama function, kurung(), dan diakhiri dengan block
//kita bisa memanggil function dengan menggunakan nama function lalu dikuti dengan ()
//di bahasa pemrogaman lain, function juga disebut dengan method
//contoh kode function
function sayHello(){
    echo "Hello Function" . PHP_EOL;
}
sayHello();
//php sangan fleksibel dalam pembuatan function
//tidak seperti bahasa lain yang ada  aturan penamaan function
//di php kita bebas membuat function dimanapun, bisa didalam if statement, didalam function, dsb
//namun ingat, jika kode function yang belum dieksekusi oleh php, maka function tidak bisa digunakan
