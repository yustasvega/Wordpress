<?php
error_reporting(error_level: -1);
//Управляющие конструкции. IF-ELSE-ELSEIF

//echo 'Test 1', 'Test 2', 'Test 3';
//print 'Test 4';

//var_dump(print 'test');
//var_dump (echo 'test');

$light = 'ellow';

/* if ($light === 'green') {
   echo 'You can go now';
} else {
   echo 'Stop';
} */

if ($light === 'green') { // если
   echo 'You can go now';
} elseif ($light === 'ellow') { // иначе если
   echo 'Get ready';
} else {                     // тогда
   echo 'Stop';
}

/* if ($light === 'yellow') {
   echo 'Get ready';
}
if ($light === 'red') {
   echo 'Stop';
} */