<?php error_reporting(-1);

/*
 * 1. Используя цикл while, реализуйте вывод выпадающего списка select с годами от 1900 до 2021 включительно.
 */

$year = 1900;

echo "<select>";
while ($year <= 2021) {
    echo "<option value='{$year}'>{$year}</option>";
    $year++;
}
echo "</select>";

/*
 * 2. Используя цикл while, реализуйте таблицу умножения.
 */

echo '<table border="1" width="100%">';

$tr = 1;
while ($tr < 10) {
    echo "<tr>";
    $td = 1;
    while ($td < 10) {
        echo "<td>$td * $tr = " . $td * $tr ."</td>";
        $td++;
    }
    echo "</tr>";
    $tr++;
}

echo '</table>';
