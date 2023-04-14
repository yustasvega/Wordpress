<?php
error_reporting(error_level: -1);
$name = "Юрий";
$str = '<p>Hello 1</p>';
$str2 = "<p>Hello 2</p>";

echo "<p>Hello 1</p>\n";
echo "<p>Hello \ 2</p>";
echo PHP_EOL;
echo "<p>Hello 3</p>\n";

$str3 = "Aliquip quis nostrud ipsum exercitation sint ea. Laboris cupidatat magna quis non id dolore cupidatat ad dolor quis. Consequat cillum eiusmod ad duis. Ipsum reprehenderit excepteur occaecat fugiat eu esse. Nulla consequat tempor et officia eiusmod ullamco ullamco Lorem cupidatat irure id. Qui consequat veniam incididunt id aliqua dolore voluptate duis nostrud velit ut exercitation cupidatat id.";

$str4 = <<<HEREDOC
<div>
Hello $name <br>
Aliquip quis nostrud ipsum exercitation sint ea. Laboris cupidatat magna quis non id dolore cupidatat ad dolor quis. Consequat cillum eiusmod ad duis. Ipsum reprehenderit excepteur occaecat fugiat eu esse. Nulla consequat tempor et officia eiusmod ullamco ullamco Lorem cupidatat irure id. Qui consequat veniam incididunt id aliqua dolore voluptate duis nostrud velit ut exercitation cupidatat id.
</div>
HEREDOC;

echo $str3, $str4;