<?php
$title = 'hello world!';
$title = 'page title!';
$var = '123';
define("PAGE", "new page");
const PAGE2 = 'new const';

?>
<!DOCTYPE html>
<html long="en">

<head>
   <meta charset="UTF-8">
   <title> <?php echo $title; ?> </title>

   <!-- комментарий alt+shift+a -->
</head>

<body>
   <h1><?php echo PAGE; ?></h1>
   <p><?php echo PAGE2; ?></p>
   <p><?php echo $title; ?></p>
   <p><?php echo $title; ?></p>
</body>

</html>