<?php
error_reporting(error_level: -1);

$bool = true;
$bool2 = false;

// var_dump($bool2);

// echo $bool2;

// var_dump((bool)0, (bool)'', (bool)123);

$int1 = 0;
$int2 = 2;

// var_dump($int1, $int2);

// var_dump(PHP_INT_MAX);
// var_dump(9223372036854775807);

// var_dump((int) 'Hello world'); // не числовая строка
// var_dump((int) '10'); //числовая строка
// var_dump('10Hello'); //префиксная числовая строка

// var_dump("10" + 20); //30
// var_dump("10" + 20); //30 Warning
// var_dump("str10" + 20); // TypeError

// Числа с плавающей точкай - дробные числа

$float = ('1_3456.345');
// var_dump($float);
// var_dump((float)123 + 10);

var_dump(0.1 + 0.2);
var_dump((0.1 * 10 + 0.2 * 10) / 10);
