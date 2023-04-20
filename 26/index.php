<?php
error_reporting(error_level: -1);

//function/Custom functions 2/Задание
/* 
1. Напишите функцию get_caunt($arr), принимающую параметрам массив, которая будет возвращать кол-во элументов, полученного массива. Примеы массивов для теста функций:

/* arr = [1,2,3, 4, 5, 6, 7, 8, 9, 10,];
$goods = [
   [
      'title' => 'Nokia',
      'price' => '100';
      'qty' => '10';
   ],   
   [
      'title' => 'Sony',
      'price' => '120';
      'qty' => '7';
   ],
   [
      'title' => 'LG',
      'price' => '185';
      'qty' => '15';
   ],
]; */

/* function get_count(array $arr)
{
   $cnt = 0;
   foreach ($arr as $item) {
      $cnt += 1;
   }
}

$goods = [
   [
      'title' => 'Nokia',
      'price' => '100',
      'qty' => '10',
   ],
   [
      'title' => 'Sony',
      'price' => '120',
      'qty' => '7',
   ],
   [
      'title' => 'LG',
      'price' => '185',
      'qty' => '15',
   ],
];

echo get_count($goods); */
// echo get_count([1, 2, 3, 4, 5, 6, 7, 8, 9, 10,]);

// 2. Напишите функцию, принмающую 2 параметра, которая выведет таблицу умножения по полученным множетелям.

function get_table($tr_cnt, $td_cnt)
{
   $table = '<table border="1" width="100%"';
   for ($tr = 1; $tr <= $tr_cnt; $tr++) {
      $table .= "<tr>";
      for ($td = 1; $td <= $td_cnt; $td++) {
         $table .= "<td>$td * $tr = " . $td * $tr . "</td>";
      }
      $table .= "</tr>";
   }
   $table .= '</table>';
   return $table;
}

echo get_table(5, 7);

echo '<hr>';

echo get_table(9, 9);


/* echo '<table border="1" width="100%"';
for ($tr = 1; $tr < 10; $tr++) {
   echo "<tr>";
   for ($td = 1; $td < 10; $td++) {
      echo "<td>$td * $tr = " . $td * $tr . "</td>";
   }
   echo "</tr>";
}
echo '</table>'; */
