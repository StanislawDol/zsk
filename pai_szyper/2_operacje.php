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

$x = 1;
$y = 1.0;
if ($x == $y) {
  echo '$x równa się $y<br>';
}
else {
  echo '$x NIE równa się $y<br>';
}


echo gettype($x); //integer
echo "<br>";
echo gettype($y); //double
echo "<br>";

if ($x === $y) {
  echo '$x identyczne się $y<br>';
}
else {
  echo '$x NIE jest identyczna się $y<br>';
}

$x = -51;
$y = 12;
echo $x<=>$y;
echo "<br>";
$x = 1;
$x = $x++;
echo $x . "<br>"; //1
$x = ++$x;
echo $x . "<br>"; //2
$y = $x++;
echo $x . "<br>"; //3
echo $y . "<br>"; //2
$y = ++$x*2-1;
echo $x . "<br>"; //4
echo $y . "<br>"; //7

//operatory rzutowania
//bool, int , float, string, array, object, unset
$test1 = '123abc3';
$test2 = 0;
$test3 = 20;

echo '<br>Typ danych $test1: ',gettype($test1);
$test1=(int)$test1;
echo "<br>$test1<br>"; //123
echo 'Typ danych $test1: ',gettype($test1);

echo '<br>Typ danych $test1: ',gettype($test2);
$test2=(bool)$test2;
echo "<br>$test2<br>"; //false
echo 'Typ danych $test1: ',gettype($test2);

echo '<br>Typ danych $test1: ',gettype($test3);
$test3=(float)$test3;
echo "<br>$test3<br>"; //20
echo 'Typ danych $test1: ',gettype($test3), "<br>";

//rozmiar typu integer
echo PHP_INT_SIZE,'<hr>'; //8

//kontrola typu zmiennych
//is_int(), is_float(), is_numeric(), is_string , is_bool, is_null
$x = 1;
echo is_int($x), "<br>";  // 1
echo is_float($x), "<br>"; // NIC
echo is_numeric($x), "<br>"; // 1
$y=null;
echo is_null($y), "<br>";
$w;
echo @gettype($w); // @ to operator ignorowania błędów (bez niej wyświetla NULL oraz błąd) z nią wyświetla samo NULL



 ?>
