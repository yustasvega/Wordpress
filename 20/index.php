<?php
error_reporting(error_level: -1);

// Выражение Match/ только PHP8

/* $food = 'cake';
$return_value = match ($food) {
    'apple' => 'На столе лежит яблоко',
    'banana' => 'На столе лежит банан',
    'cake' => 'На столе стоит торт',
};
var_dump($return_value); */

$i = 3;
/* $res = match ($i) {
   1 => 'one',
   2 => 'two',
   3 => 'three',
   4 => 'four',
   5 => 'five',
}; */


/* $res = match ($i) {
   1 => 'one',
   2 => 'two',
   3 => 'three',
   4 => 'four',
   default => 'Hello Friends',
}; */

/* $res = match ($i) {
   1, 2, 3 => 'Var > 4',
   4 => 'four',
   default => 'Var < 4',
}; */

$grade = 10;
/* $res = match (true) {
   ($grade >= 10) => 'excellent',
   ($grade >= 7) => 'good',
   ($grade >= 4) => 'bad',
   default => 'very bad',
}; */

$res = match (true) {
   ($grade >= 10) && ($grade < 11) => 'excellent',
   ($grade >= 7) && ($grade < 10) => 'good',
   ($grade >= 4) && ($grade < 7) => 'bad',
   default => 'very bad',
};

echo $res;
