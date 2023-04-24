<?php error_reporting(-1);

// Задание

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

/*
 * Напишите функцию str_count($str, $substr), которая принимает 2 аргумента: строку и подстроку. Функция должна возвращать кол-во вхождений подстроки в строку. Пример: 'hello', 'l' => 2
 * */

function str_count($str, $substr)
{
    return substr_count($str, $substr);
}
// echo str_count('hello', 'l');


/*
 * Напишите функцию no_space(string $str): string, которая принимает аргументом строку и возвращает строку с удаленными пробелами
 * */

function no_space(string $str): string
{
    return str_replace(' ', '', $str);
}

// var_dump(no_space(' Hello, world! '));


/*
 * Напишите функцию max_number(int $num): int, которая принимает аргументом число и возвращает максимальное число из цифр, полученного аргумента. Пример: 123 => 321
 * */

function max_number(int $num): int
{
    $digits = str_split($num);
    rsort($digits);
    return (int)implode('', $digits);
}

// echo max_number(5159);