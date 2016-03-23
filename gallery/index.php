<?php

if ( isset($_FILES['file']) ) {
    $name_file = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $local_image = "uploads/";
    $upload = move_uploaded_file($tmp_name, $local_image.$name_file);

}

$path = "uploads/"; //заходим в директорию uploads
$uploadsFiles =  scandir($path);
if ( false !== $uploadsFiles) {
    $uploadsFiles = preg_grep('/\\.(?:png|gif|jpe?g)$/', $uploadsFiles);//возвращаем массив вхождений, которые соответствуют шаблону поиска изображений
    foreach ($uploadsFiles as $key => $uploadsFile) {
            echo  "<img src='$path$uploadsFile'>";
        {
            if( !($uploadsFile % 5) ) echo "<br>";
        }
    }
}



include 'gallery.html';
