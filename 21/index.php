<?php
error_reporting(error_level: -1);

//Массивы/

/* $arr1 = array();
$arr2 = [];

var_dump($arr1, $arr2); */

$arr1 = [
   1 => 'Ivanov',
   2 => 'Petrov',
];
$arr1[] = 'Sidorov';
$arr1[] = 'Doe';

echo '<pre>' . print_r($arr1, true) . '</pre>';

echo $arr1[3];


/* $array = array(
   1    => "a",
   "1"  => "b",
   1.5  => "c",
   true => "d",
);
var_dump($array); */

//ассациативный массив
/* $goods = [
   'title' => 'Nokia',
   'price' => 100,
   'qty' => 10,
];
echo '<pre>' . print_r($goods, true) . '</pre>';
echo $goods['title'];
 */

//Многомерный массив
$goods = [
   1 => [
      'title' => 'Nokia',
      'price' => 100,
      'qty' => 10,
   ],
   [
      'title' => 'Sony',
      'price' => 130,
      'qty' => 30,
   ],
];
echo '<pre>' . print_r($goods, true) . '</pre>';
// echo $goods[1]['title'];
// echo $goods[2]['title'];

// $nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,];

for ($i = 1; $i < 21; $i++) {
   $nums[] = $i;
}


echo '<pre>' . print_r($nums, true) . '</pre>';
