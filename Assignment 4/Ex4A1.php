
<?php

$r = 3;
$h = 5;

define('PI','3.1412');

Interface fun
{

        function area($r,$h);
        function volume($r,$h);
}


class cylinder implements fun
{

        function area($r,$h)
        {
         $area=(2*PI*$r*($r+$h));
         echo "<center><h3>The area of cylinder is:     $area</font></center></h3>";
        }

        function volume($r,$h)
        {
         $v=(PI*$r*$r*$h);
         echo "<center><h3>The volume of cylinder is:     $v</font></center></h3>";
        }
}


$o=new cylinder;
$o->area($r,$h);
$o->volume($r,$h);

?>