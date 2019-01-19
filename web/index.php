<?php
$title = 'Lesson 4';
$head = 'Lesson four';
$year = date('Y');
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $title?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1><?= $head?></h1>


<form action="index.php" enctype="multipart/form-data" method="post" name="fileform">
    <input type="file" name="myfile" class="finput">
    <br>
    <input type="submit" name="submit" value="Send photo">
</form>

<?php
require_once ('../config/conf.php');
require_once ('../engine/resize.php');
require_once ('../engine/function.php');
?>
<hr>
<section class="gal">
    <h3>Gallery</h3>

    <?php

    DownloadImage();

    fotoGal();

    ?>

</section>

<hr>

<footer>
    &copy;<?= $year?>
</footer>

</body>
</html>
