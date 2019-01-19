<?php

function DownloadImage ()
{
    if (isset($_POST['submit']) && ($_FILES['myfile']['error'] == 0))
    {
        $tmpName = $_FILES['myfile']['tmp_name'];
        $fName = $_FILES['myfile']['name'];
        $exp_fName = explode('.', $fName);
        $my_hashed_file = hash_file('md5', $tmpName) . '.' . end($exp_fName);
        $my_file_name = $_FILES['myfile']['name'];
        $dest = PHOTO_DIR . $my_hashed_file;
        $dest_small = PHOTO_SMALL_DIR . $my_hashed_file;

        if (file_exists($dest))
        {
            echo "Файл $my_file_name уже загружен <br>";
        }
        else {
            echo "Файл $my_file_name в каталоге отсутствует <br>";
            if (move_uploaded_file($_FILES['myfile']['tmp_name'], $dest))
            {
                echo "Файл $my_file_name успешно загружен <br>";
                create_thumbnail($dest, $dest_small, 350, 200);
            } else {
                echo "Произошла ошибка загрузки";
            }
        }
    }
    elseif (isset($_POST['submit']))
    {
        echo 'Файл для загрузки не выбран <br>';
    }
}


function fotoGal()
{
    $dir = scandir(PHOTO_DIR);

    if (is_array($dir))
    {
        foreach ($dir as $f=>$foto)
        {
            if (preg_match('/\.JPG/', $foto) || preg_match('/\.jpg/', $foto) || preg_match('/\.JPEG/', $foto) || preg_match('/\.PNG/', $foto) || preg_match('/\.GIF/', $foto))
            {
                echo '<div>';
                echo '<a target="_blank" name="ph_name" href="' . PHOTO_DIR . $foto . '"' . '>' . '<img  src="' . PHOTO_SMALL_DIR . $foto . '"' . '>' . '</a>';
                echo '<label for="ph_name">' . $foto . '</label>';
                echo '</div>';
            }
        }
    }


}

?>