<?php
error_reporting(error_level: -1);

// Оператор continue and break/

/* $i = 1;

while ($i < 10) { //Вывод четных чисел
   if ($i % 2) { 
      $i++;
   }
   echo "{$i}<br>";
   $i++;
} */

/* for ($i = 1; $i <= 20; $i++) { //Вывод нечетных чисел
   if (!($i % 2)) {
      continue;
   }
   echo "{$i}<br>";
} */

// var_dump(5 % 2);

/* echo '<table border="1" width="100%"';
for ($tr = 1; $tr < 10; $tr++) {
   echo "<tr>";
   for ($td = 1; $td < 10; $td++) {
      if ($td == 5) {
         continue 2;
      }
      echo "<td>$td</td>";
   }
   echo "</tr>";
}
echo '</table>'; */


/* $i = 1;
while (true) {
   echo "$i<br>";
   if ($i == 20) {
      echo 'Число найдено!';
      break;
   }
   $i++;
} */