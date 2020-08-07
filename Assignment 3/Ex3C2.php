<?php
echo "string";
function getDirContents($path) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));

    $files = array(); 
    foreach ($rii as $file)
        if (!$file->isDir())
            $files[] = $file->getPathname();

    return $files;
}

var_dump(getDirContents($path));

echo getDirContents(/home/tushar/lappstack-7.4.8-0/apache2/htdocs/Assignment 3);
?>