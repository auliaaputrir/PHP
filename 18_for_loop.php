<?php

//for adalah salah satu kata kunci yang bisa digunakan untu perulangan
//block kode yang terdapat didalam for akan selalu diulang selama kondisi for terpenuhi
//syntax perulangan untuk for
for ($init_statement; $kondisi ; $post_statement) { 
    # code...
}
//init statement hanya akan dieksekusi satu kali diawal sebelum perulangan
//kondisi akan dilakukan pengecekkan dalam setiap perulangan jika true perulangan akan dilakukan, jika false perulangan selesai
//post statement akan dieksekusi setiap kali di akhir perulangan
//init statement, kondisi, post statment tidak wajib diisi, jika kondisi tidak diisi maka nilainya selalu true
//contoh perulangan tanpa isi 
for(;;){
    echo "hello world for loop";//perulangan tidak berhenti karena bernilai true
}
//contoh perulangan dengan kondisi
$counter = 1;
for (; $counter <= 10;){
    echo "Hello for loop: " . $counter . PHP_EOL; //selama counter masih <=10 maka akan selalu dijalankan
    $counter++; //setiap kali perulangan counter nilainya bertambah 1
}
//contoh perulangan dengan post statement
for($counter=1;$counter<=10;$counter++)
{
    echo "Hello world for loop : " . $counter .PHP_EOL;
}
//bisa juga menggunakan syntax alternatif