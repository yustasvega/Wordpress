<?php error_reporting(-1);

$bool = true;
$bool2 = false;

/*var_dump($bool2);

echo $bool2;*/

//var_dump((boolean)0, (bool)'', (bool)123, (bool)'Hello');

$int1 = 0;
$int2 = 1;

//var_dump($int1, $int2);

//var_dump(PHP_INT_MAX);
//var_dump(9223372036854775808);

//var_dump((int)"10"); // числовая строка
//var_dump((int)"10Hello"); // префиксная числовая строка
//var_dump((int)"Hello10"); // нечисловая строка

//var_dump("10" + 20); // 30
//var_dump("10str" + 20); // 30 Warning
//var_dump("str10" + 20); // TypeError

$float = 1_234.567; // >= PHP 7.4
//var_dump($float);
//
//var_dump((float)123);

var_dump(0.1 + 0.2);

var_dump((0.1 * 10 + 0.2 * 10) / 10);
