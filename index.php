<?php

$title = 'Lesson 2';
$head = 'Lesson two';
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
<p>Task 1.</p>
<p>
<?php

$a = rand(-20, 20);
$b = rand(-10,10);

if ($a>0 && $b>0)
{
    echo $a - $b;
} elseif ($a<0 && $b<0)
{
    echo $a * $b;
} else
{
    echo $a + $b;
}

?>
</p>
<p>Task 2.</p>
<?php

$x = rand(0, 15);

switch ($x)
{
    case 0:
        echo 0 . '<br>';
    case 1:
        echo 1 . '<br>';
    case 2:
        echo 2 . '<br>';
    case 3:
        echo 3 . '<br>';
    case 4:
        echo 4 . '<br>';
    case 5:
        echo 5 . '<br>';
    case 6:
        echo 6 . '<br>';
    case 7:
        echo 7 . '<br>';
    case 8:
        echo 8 . '<br>';
    case 9:
        echo 9 . '<br>';
    case 10:
        echo 10 . '<br>';
    case 11:
        echo 11 . '<br>';
    case 12:
        echo 12 . '<br>';
    case 13:
        echo 13 . '<br>';
    case 14:
        echo 14 . '<br>';
    case 15:
        echo 15 . '<br>';
}


?>
<p>Task 3.</p>

<?php

function sum($arg1, $arg2)
{
    return $arg1 + $arg2;
}

function substract($arg1, $arg2)
{
    return $arg1 - $arg2;
}

function mult($arg1, $arg2)
{
    return $arg1 * $arg2;
}

function div($arg1, $arg2)
{
    return $arg1 / $arg2;
}
?>
<pre>
    function sum($arg1, $arg2)
{
    return $arg1 + $arg2;
}

    function substract($arg1, $arg2)
{
    return $arg1 - $arg2;
}

    function mult($arg1, $arg2)
{
    return $arg1 * $arg2;
}

    function div($arg1, $arg2)
{
    return $arg1 / $arg2;
}
</pre>
<p>Task 4.</p>
<?php

function mathOperation($arg1, $arg2, $oper)
{
    switch ($oper)
    {
        case '+':
            return sum($arg1, $arg2);
            break;
        case '-':
            return substract($arg1, $arg2);
            break;
        case '*':
            return mult($arg1, $arg2);
            break;
        case '/':
            return div($arg1, $arg2);
            break;
    }
}

echo mathOperation(2,3,'*');


?>
<p>Task 5.</p>
<?php

?>



<hr>
<footer>
    &copy;<?= $year?>
</footer>

</body>
</html>