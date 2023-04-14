<?php

error_reporting(error_level: -1);

$title = 'Урок 4';
$winnie_the_pooh = "Hello I'm Winnie. \"Строка в кавычках\"";
$fruit = 'orange';
$var = 'Test 1';
// $Var = 'Test 2';
// Предопределенные переменные

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
   <?php $title = 'Урок 4!'; ?>
   <h1><?php echo $title ?></h1>
   <p><?= $winnie_the_pooh, $fruit ?></p>

   <?php

   // var_dump($var, $Var);
   // echo $var;

   ?>

</body>

</html>