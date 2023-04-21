<?php
error_reporting(error_level: -1); ?>
<!-- Альтернативный синтаксис управляющих структур -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam rem nisi sed qui officiis earum voluptatum quasi accusantium perferendis, numquam dolorum nostrum aut aspernatur illum fuga dolore in deserunt error!</p>

  <?php

  $nums = [1, 2, 3, 4, 5,];
  foreach ($nums as $num) :
    echo "<h4>Вывожу цифру</h4>";
    echo "<p>$num</p>";
    echo "<h4>Заканчиваю вывод цифры</h4>";
  endforeach
  ?>


  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae magnam accusamus,

    <?php foreach ($nums as $num) : ?>
      <?= "<p>$num</p>"; ?>
    <?php endforeach; ?>

    omnis sed debitis in natus, quisquam earum beatae aperiam eos maiores cumque suscipit asperiores! Vitae ex nesciunt maiores quaerat.</p>
</body>

</html>