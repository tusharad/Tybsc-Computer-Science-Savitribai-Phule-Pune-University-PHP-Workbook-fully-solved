<?php

$d=$_POST['d'];
$h=dir(".");
if(is_dir($d))
{
        $h=opendir($d);
        echo "<h3><B>Directory Contents";
        echo "<br/>";

        while(($file=readdir($h))!==false)

        {
                echo "<h3>$file<br/>";
        }

        closedir($h);
}
else
{
        echo "<center><h2><center><u>Invalid Directory or Directory does not exist!!!</u></center></h2></center>";
}
?>