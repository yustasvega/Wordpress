<?php
error_reporting(error_level: -1);

//function/Custom functions 2
/* 
function sum(...$nums)
{
   $res = 0;
   foreach ($nums as $num) {
      $res += $num;
   }
   echo $res;
}

sum(1, 2, 3, 4, 5); */

// Статические переменные

/* function test()
{
   static $a = 0; //static
   echo $a;
   $a++;
}

test();
test();
test(); */

// подсказка типа

/* function sum(int $a, int $b, int $c)
{
   echo $a + $b + $c;
}

sum(1, 2, 3); */


/* function sum($a,  $b,  $c)
{
   echo $a + $b + $c;
}

sum(1, 2.7, 3); */

/* function sum($a,  $b,  $c): float
{
   return $a + $b + $c;
}

var_dump(sum(1, 2, 3)); */

// https://psalm.dev

//  Именованные аргументы

/* function sum($term1,  $term2 = 1,  $factor = 2)
{
   return ($term1 + $term2) * $factor;
}

echo sum(1, factor: 3); */ //PHP8