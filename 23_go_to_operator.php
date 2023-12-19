<?php
//merupakan salah satu fitur yang sebenarnya jarang sekali digunakan di php
//dikarenakan apabila terlalu banyaak akan membingungkan yang membaca kode kita
//go to adalah fitur dimana kita bisa loncat kekode yang kita inginkan
//agar goto bisa loncat ke kode program yang diinginkan, kita harus membuat nama label lalu diakhiri : (colon)
//contoh penggunaan
goto a;

echo "Hello World".PHP_EOL; //ini akan diabaikan karena diatasnya sudah ada goto a
a:
echo "Hello A".PHP_EOL; //yang ini yang dieksekusi

//contoh penggunaan kode go to operator di loop
$counter = 1;
while(true){
    echo "While loop counter".PHP_EOL;
    $counter++;
    if($counter > 10){
        goto end;
    }
}
end:
echo "End loop";