<?php

/*Создать страницу, на которой можно загрузить несколько фотографий в галерею.
Все загруженные фото должны помещаться в папку gallery и выводиться на странице в
виде таблицы.*/

define('DS', DIRECTORY_SEPARATOR);
$dir = __DIR__ . DS . 'gallery';//создаем директорию
if (! is_dir($dir)) {
    mkdir($dir);//создаем директорию, если она не создана
}
if ($_FILES && isset($_FILES['photo'])) {
    foreach ($_FILES["photo"]["error"] as $key => $error) {
        if ($error == 0) {//если не произошла ошибка
            $tmp_name = $_FILES["photo"]["tmp_name"][$key];
            $scandir = scandir($dir);
            $count = count($scandir) - 1;
            $name = $_FILES["photo"]["name"][$key];
            $position = strpos($name, '.');
            $substr = substr($name, $position);
            move_uploaded_file($tmp_name, "$dir/$count$substr");
        }
    }
}
$arr = scandir($dir);

include 'index.html';
?>

<table width="50%" border="2" bordercolor="black">
    <tr>
        <?php foreach ($arr as $key => $value) {
        if ($key > 1) {
        ?>
        <td><img src="<?="gallery/$arr[$key]"; ?>" />
            <?php $key -=1;
            if ($key % 5 === 0) {
            ?>
    </tr>
    <?php } ?>
    <?php } ?>
    <?php } ?>
    </td>
</table>
