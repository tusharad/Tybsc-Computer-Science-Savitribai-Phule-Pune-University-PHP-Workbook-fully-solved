<html>
<body bgcolor="gold">
<?php
$choice=$_POST['ch'];

        $arr=array(1,2,3,4,5,6,7,8,9,10);
        switch($choice)
        {
                case 1:
                        array_push($arr,11);
                        print_r($arr);
                        break;
                case 2:
                        $ele=array_pop($arr);
                        echo "Poped element : $ele";
                        break;
                case 3:
                        print_r($arr);
                        break;
                case 4:
                        array_unshift($arr,"10");
                        print_r($arr);
                        break;
                case 5:
                        $ele=array_shift($arr);
                        echo "Deleted element : $ele";
                        break;
                case 6:
                        print_r($arr);
                        break;
        }
?>