<?php
$no=$_POST['no'];
if(empty($no))
{
        echo "Enter all data::";
        echo "<br><a href='a2b2.html'>Back</a>";
}
else
{
        $arr=array(1,2,3,4,5,6,7,7,8,9,10);
        print_r($arr);
        echo "<br><br><br>";
        if(in_array($no,$arr))
                echo "$no occured in array";
        else
                echo "$no not occured in array";
}
?>