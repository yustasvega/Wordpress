<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

/*
 * Дан массив:
 * $nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5,];
 * Напишите свой вариант функции count() - user_count() - которая будет принимать аргументом одномерный массив и возвращать кол-во элементов массива (длину массива)
 * */

$nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5,];

// echo count($nums);
function user_count($arr)
{
    $cnt = 0;
    foreach ($arr as $item) {
        $cnt++;
    }
    return $cnt;
}
// echo user_count($nums);


/*
 * Дан массив:
 * $nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5,];
 * Подсчитайте сумму значений элементов массива. Попробуйте написать 2 варианта решения: со специальной функцией и без нее
 * */

// echo array_sum($nums);
function user_sum($arr)
{
    $cnt = 0;
    foreach ($arr as $num) {
        $cnt += $num;
    }
    return $cnt;
}

// echo user_sum($nums);

/*
 * Создайте массив из чисел от 1 до 100. Попробуйте написать 2 варианта решения: со специальной функцией и без нее
 * */

// debug(range(1, 100, 1));

$arr = [];
for ($i = 1; $i <= 100; $i++) {
    // $arr[] = $i;
    array_push($arr, $i);
}

// debug($arr);