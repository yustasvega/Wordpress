<?php
error_reporting(error_level: -1);

//Массивы/Foreach/Задания
/* Дан массив:
/* $nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,];
В цикле for выведите только четные числа массива. Попробуйте решить задачу двумя способами:
с использованием continue и без него. */

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,];
//1)
/* for ($i = 0; $i < 10; $i++) {
   if (!($nums[$i] % 2)) {  //! - инвертируем в нечетные.
      continue;
   }
   echo $nums[$i] . '<br>';
} */

//2)
/* for ($i = 0; $i < 10; $i++) {
   if ($nums[$i] % 2) {
      continue;
   }
   echo $nums[$i] . '<br>';
} */

// 2.1
/* for ($i = 2; $i < 10; $i += 2) {
   echo $nums[$i] . '<br>';
} */



// Дан массив:

$goods = [
   [
      'title' => 'Nokia',
      'price' => 100,
      'qty' => 10,
   ],
   [
      'title' => 'Sony',
      'price' => 130,
      'qty' => 30,
   ],
   [
      'title' => 'LG',
      'price' => 170,
      'qty' => 60,
   ],
];
echo '<pre>' . print_r($goods, true) . '</pre>';


/* for ($i = 0; $i < 3; $i++) {
   if ($goods[$i]['price'] < 120) {
      $goods[$i]['price'] += 15;
   }
} */

foreach ($goods as &$good) {
   if ($good['price'] < 120) {
      $good['price'] += 15;
   }
}

echo '<pre>' . print_r($goods, true) . '</pre>';
