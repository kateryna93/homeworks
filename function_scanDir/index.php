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


/*2-й вариант

function scanDirs($dir)
{
    if(!is_dir($dir))
        return false;

    static $files = array();

    $dir .= substr($dir, -1) == '/' ? '' : '/';

    foreach(scandir($dir) as $file)
    {
        if($file == '.' || $file == '..')
            continue;
        if(is_dir($dir . $file))
            scanDirs($file);
        else
            $files[] = $file;
    } return $files;
}*/

