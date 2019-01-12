<?php

$title = 'Lesson 3';
$head = 'Lesson three';
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
$r = 1;
while ($r<=100)
{
    if ($r %3 == 0)
    {
        echo $r . '<br>';
        $r++;
    } else {
        $r++;
    }
}

?>
</p>
<p>Task 2.</p>
<?php

$y = 0;

do {
    if ($y == 0)
    {
        echo "$y - это ноль" . '<br>';
    } elseif ($y % 2 == 0)
    {
        echo "$y - это четное число" . '<br>';
    } else {
        echo "$y - это нечетное число" . '<br>';
    }

    $y++;
} while($y<=10)
;

?>
<p>Task 3.</p>

<?php
$regions = ['Moscow region'=>['Stupino', 'Klin', 'Zelenogorsk', 'Krasnogorsk'],
    'Leningrad region'=>['Pushkin', 'Kirovsk', 'Vyborg'],
    'Rjazan region'=>['Rjazan', 'Kasimov', 'Rjibnoe']];

foreach ($regions as $key => $value)
{
    echo '<b>' . $key . ':' . '</b>' . '<br>';
    foreach ($value as $key1 => $value1)
    {
        echo $value1 . ';' . '<br>';
    }
}

?>

<p>Task 4-5.</p>
<?php

function translit($arg)
{

    $trans = ['а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'jo', 'ж' => 'zh', 'з' => 'z',
        'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
        'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shj', 'ъ' => '\'', 'ы' => 'ji', 'ь' => '\'',
        'э' => 'je', 'ю' => 'ju', 'я' => 'ja',

        'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'JO', 'Ж' => 'ZH', 'З' => 'Z',
        'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T',
        'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C', 'Ч' => 'CH', 'Ш' => 'SH', 'Щ' => 'SHJ', 'Ъ' => '\'', 'Ы' => 'JI', 'Ь' => '\'',
        'Э' => 'JE', 'Ю' => 'JU', 'Я' => 'JA', ' ' => '_'];


    return strtr($arg, $trans);

}
$str1 = 'Транслитерация нужна для URL';

 echo translit($str1);

?>
<p>Task 6.</p>

<?php
$menu = ['1' => ['1)', '2)', '3)'],
        '2' => ['I', 'II', 'III'],
        '3' => ['a)', 'b)', 'c)']];
?>

<ul><?php foreach ($menu as $key=>$value) : ?>
        <li><?=  $key ?>
            <?php if (is_array($value)):?>
                <ul>
                    <?php foreach ($value as $key2=>$value2):?>
                    <li><?= $value2?></li>
                    <?php endforeach;?>
                </ul>
            <?php endif;?>
        </li>
    <?php endforeach;?>
</ul>




<hr>
<footer>
    &copy;<?= $year?>
</footer>

</body>
</html>