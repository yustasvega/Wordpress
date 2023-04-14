<?php
error_reporting(error_level: -1);
//Тернарный оператор

$price = null;
// var_dump($price);

$light = 'green2';

/* if ($light === 'green') {
   echo 'You can go now';
} else {
   echo 'Stop';
} */

// echo $light == 'green' ? 'You can go now' : 'Stop'; //где ?- если, :-иначе

// echo $price ? $price : 'unknwn price';
echo $price ?: 'unknwn price';
