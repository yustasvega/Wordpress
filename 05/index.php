<?php
error_reporting(error_level: -1);

define("CONST_1", "value 1");
echo CONST_1;
const CONST_2 = 'value 2';
var_dump(CONST_2);

// Получить список предопределенных констант
var_dump(get_defined_constants(true));

$title = 'Урок 5';
$winnie_the_pooh = "Hello I'm Winnie. \"Строка в кавычках\"";
$fruit = 'orange';
$var = 'Test 1';
// $Var = 'Test 2';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $title ?></title>
</head>

<body>
   <?php $title = 'Урок 5!'; ?>
   <h1><?php echo $title ?></h1>
   <p><?= $winnie_the_pooh, $fruit ?></p>

   <?php

   // var_dump($var, $Var);
   // echo $var;

   ?>

</body>

</html>