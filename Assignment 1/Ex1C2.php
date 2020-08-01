<?php
   $str1=$_POST['str1'];
        $str2=$_POST['str2'];
        $pos=$_POST['pos'];
        $ch=$_POST['ch'];
        echo"First string  :: $str1.<br><br>";
                                                                                                                             
        echo "Second string::$str2.<br><br>";
                                                                                                                             
        echo"position for reverse::$pos.<br><br>";
                                                                                                                             
        echo"choice is::$ch.<br><br>";
                                                                                                                             
        switch($ch)
        {
        case 1:
                if($str1==$str2)
                        echo"Both string are equal.<br>";
                else
                        echo"Both string are not equal.<br>";
        break;
        case 2:
                if($str1===$str2)
                        echo"Both are exat equal.<BR>";
                else
                        echo"Both are not equal.<BR>";
        break;
        case 3:
                echo"After appending::";
                echo "$str1"."$str2";
                echo"<br>";
        break;
        case 4: $len=strlen($str1)-$pos;
                $s=substr($str1,$pos,$len);
                $str4=strrev($s);
                echo "After reverse::$str4.<br>";
        break;
        }
?>