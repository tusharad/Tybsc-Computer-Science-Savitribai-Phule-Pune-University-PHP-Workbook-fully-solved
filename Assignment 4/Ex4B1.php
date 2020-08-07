
<?php
$s  =   4;
$l   =   5;
$b  =   7;
$r   =   3;

echo "Hello there!";
interface findarea
{
                     function area($l,$c);
}

class rectangle implements findarea
{
                     function area($l,$b)
                     {
                                 $area  =  $l*$b;
                                 echo "Area of Rectanle :".$area."<br>";          
                     }
}

class square extends rectangle
{
                     function area($s,$s)
                     {
                                 $area  =  $s*$s;
                                 echo "Area of Square :". $area."<br>";           
                     }
}

class circle
{
                     function area($r)
                     {
                                 $area  =  0.5*$r*$r;
                                 echo "Area of Circle :". $area."<br>";  
                     }
}

$fr  =  new rectangle;
$fr->area($l,$b);

$fs  =  new square;
$fs->area($s,$s);

$fc  =  new circle();
$fc->area($r)
?>