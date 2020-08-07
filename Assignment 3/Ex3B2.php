<?php
echo "Hello";
$d=$_POST['d'];
$ext=$_POST['ex'];

if(is_dir($d))
{
$h=opendir($d);
echo "<h3>The files with extension  $ext in directory $d are: </h3>";
while(($file=readdir($h))!==false)

if(is_dir($file))
{
continue;
}
$e=explode('.',$file);
if($e[1]==$ext)
{
        echo "<h3>$file</h3><br/>";
}
}
closedir($h);
}


?>