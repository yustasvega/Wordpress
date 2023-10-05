<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

/*
copy — Копирует файл
file_exists — Проверяет существование указанного файла или каталога
file_get_contents — Читает содержимое файла в строку
file_put_contents — Пишет данные в файл
file — Читает содержимое файла и помещает его в массив
move_uploaded_file — Перемещает загруженный файл в новое место
rename — Переименовывает файл или директорию
mkdir — Создаёт директорию
rmdir — Удаляет директорию
unlink — Удаляет файл
*/

//var_dump(copy('file.txt', 'folder/file2.txt'));

/*if (file_exists(__DIR__ . '/folder/file.txt')) {
    echo 'OK';
} else {
    echo 'NO';
}*/

echo nl2br(file_get_contents('folder/file2.txt'));

//echo file_get_contents('https://www.php.net/manual/ru/function.file-get-contents.php');

//$file = file_get_contents('file.txt');
//var_dump(file_put_contents('file2.txt', $file, FILE_APPEND));

//debug(file('file2.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));

//var_dump(rename(__DIR__ . '/file3.txt', __DIR__ . '/folder/file5.txt'));
//echo __DIR__ . '/folder/file5.txt';

//var_dump(mkdir('test', 0644));
//var_dump(mkdir('1/2/3', 0644, true));
//var_dump(rmdir('1'));

//var_dump(@unlink(__DIR__ . '/folder/file4.txt'));