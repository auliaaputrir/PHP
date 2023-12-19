<?php

//kadang dalam if, kita membutuhkan bebeapa kondisi
//kasus seperti ini, diphp kita bisa menggunakan else/if statement
//elseif di php bisa lebih dari satu
//kose else if di php bisa dipisah ataupun diganung penulisannya (else if / elseif)
//syntaxnya
if (condition) {
    # code... //jika kondisi bernilai false maka eksekusi kode else if
}
elseif (condition) {
    # code... //jika masih false, eksekusi else
}
else {
    # code...
}

//syntax alternatif
//selain menggunakan kurung kurawal {}, php juga menyediakan syntax alternatif
//namun untuk menggunakan ini, kita harus menggunakan kata kunci end if diakhir statement

if (expression):
    statement;
elseif(expression):
    statement;
endif;