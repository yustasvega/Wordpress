<?php error_reporting(-1);

$arr1 = array();
//$arr2 = [];

//var_dump($arr1, $arr2);

$arr1 = [
    1 => 'Ivanov',
    3 => 'Petrov',
];
//var_dump($arr1);

$arr1[5] = 'Sidorov';
$arr1[] = 'Doe';
$arr1[] = 10;
$arr1[8.7] = 7.8;

//echo '<pre>' . print_r($arr1, 1) . '</pre>';

//echo $arr1[3];
//echo $arr1[2];

//echo $arr1{3};

/*$array = array(
//    1    => "a",
//    "1"  => "b",
//    1.5  => "c",
    true => "d",
);
var_dump($array);*/

$goods = [
    [
        'title' => 'Nokia',
        'price' => 100,
        'qty' => 10,
    ],
    [
        'title' => 'Sony',
        'price' => 130,
        'qty' => 8,
    ],
];

echo '<pre>' . print_r($goods, 1) . '</pre>';
//echo $goods['title'];
//echo $goods[0]['title'];
//echo $goods[1]['title'];

//$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, ];

for ($i = 1; $i < 11; $i++) {
    $nums[] = $i;
}

echo '<pre>' . print_r($nums, 1) . '</pre>';
