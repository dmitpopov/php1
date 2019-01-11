<?php
$a = 5;
$b = '05';
var_dump($a == $b); //true, так как сравнение идёт с приведением типов
echo  '<br>';
var_dump((int)'012345'); //12345, так как поиск числа идёт в строке и даёт результат при встрече с числом, отличным от нуля
echo  '<br>';
var_dump((float)123.0 === (int)123.0);//false, так как сравнение идёт без приведения типов, а они разные
echo  '<br>';
var_dump((int)0 === (int)'hello, world');//true, так как при поиске числа в строке без чисел результатом будет 0, т.е 0 === 0
?>

<?php

$title = 'Lesson 1';
$head = 'Lesson one';
$year = date('Y');
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $title?></title>
</head>
<body>
<h1><?= $head?></h1>

<?php

$x = 3;
$y = 5;

echo $x, $y;

echo '<br>';

$x = $x + $y;
$y = $x - $y;
$x = $x - $y;

echo $x, $y;


?>




<hr>
<footer>
    &copy;<?= $year?>
</footer>

</body>
</html>