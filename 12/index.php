<?php
error_reporting(error_level: -1);
// Логические операторы

/* $a = (3 == 3) && (3 < 2); // true && false 
var_dump($a); //false */

/* $a = (3 == 3) and (3 < 2); // true && false 
var_dump($a); //true

$a = (2 == 3) || (3 > 2); // true && false 
var_dump($a); //true

$a = (2 == 3) or (3 > 2); // true && false 
var_dump($a); //false
*/

// var_dump(!(2 > 2)); //true

//Строковые операторы (Конкотенация)

// echo "<p>Hello 1</p>" . PHP_EOL . "<p>Hello 3</p>" . PHP_EOL;

// $name = 'John';
// echo 'Hello ' . $name;

// $hi = 'Hello, ';
// echo $hi .= 'world!';
// Домашнее задание
// 1. Напишите скрипт, который будет показывать кол-во секунд в часе, су тках и неделе
$min = 60;
$hour = $min * 60;
$day = $hour * 24;
$week = $day * 7;

var_dump($hour, $day, $week);
// 2. Дана переменная х=60. Используя комбинированные операторы, покажите кол-во секунд в часе, сутках и неделе без использования дополнительных переменных.

$x = 60;
var_dump($x *= 60);
var_dump($x *= 24);
var_dump($x *= 7);
