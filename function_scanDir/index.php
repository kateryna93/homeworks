<?php


function scanDirs($dir){
    $result = [];
    $allFiles = scandir($dir);
    $filesNumber = count($allFiles);//Количество файлов в отсканированой директории

    if ( $allFiles[2] ) {   //Список элементов не включает в себя ".", ".."

        for($i = 2;  $i <  $filesNumber; $i++) {

            if( is_dir($fullDir = $dir . "/" . $allFiles[$i]) ) {

                $result[$dir][$fullDir] = array_shift( scanDirs($fullDir) );

            } else {

                $result[$dir][] = $allFiles[$i];

            }

        }

    }

    return $result;
}
echo '<pre>';
print_r( scanDirs('D:\wamp\www') );

