<?php
//wersja PHP
echo PHP_VERSION,'<br>';
//echo phpinfo();
//interpolacja - znak przecinka
echo 'a','b','c'; //wyświetla a,d,c
echo 'a'.'b'.'c','<br>'; //wpierw dodaje później wyświetla (abc)

$pow = 2 ** 10;
echo "$pow<br>";

//operatory bitowe

$bin = 0b1010;
echo "$bin <br>";
$bin = $bin << 2; //101000
echo "$bin <br>";

$bin = $bin >> 3; //101000
echo "$bin <br>";
 ?>
