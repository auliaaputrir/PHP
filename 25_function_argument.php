<?php

//kita bisa mengirim informasi ke function yang ingin kita panggil
//untuk melakukannya kita perlu menambhakan argumen/parameter
//cara membuat argument sama seperti membuat variabel hanya saja diletakan diantara () -> ($contoh)
//argument bisa lebih dari 1, jika lebih dari 1 harus dipisahkan dengan tanda ,
//contoh kode function Argument
function sayHello($name)
{
    echo "Hello $name" .PHP_EOL;

}
sayHello("Aulia");