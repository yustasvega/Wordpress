<!-- Подключение файлов PHP -->




<?php
error_reporting(error_level: -1);
// require,require_once,include_once,include
// require 'funcs.php'; //require
// require_once 'funcs.php'; //require_once
include_once 'funcs.php'; // include_once
// include 'funcs.php'; //include

echo get_table(5, 7);

echo '<hr>';

echo get_table(1, 9);

echo '<hr>';

echo get_table(3, 9);

echo '<hr>';

echo get_table(8, 9);
