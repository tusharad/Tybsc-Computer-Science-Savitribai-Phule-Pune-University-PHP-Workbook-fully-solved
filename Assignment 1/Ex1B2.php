<?php
        $str1=$_POST['str1'];
        $str2=$_POST['str2'];
        $str3=$_POST['str3'];
        $ch=$_POST['ch'];
        echo"First string=$str1.<br>";
        echo"Second String=$str2.<br>";
        echo"String for replace=$str3.<br>";
        if(strlen($str1)>strlen($str2))
        {
                switch($ch)
                {
                case 1: $pos=strpos($str1,$str2);
                        if($pos!=0)
                                echo"String '$str2' Not present at the start of  '$str1'.<br>";
                        else
                                echo"String '$str2' Present at the strat of '$str1'.<br>";
                break;
                case 2:
                        $str4=str_replace($str2,$str3,$str1);
                        printf("\nAfter replacing string::");
                        echo $str4;
                break;
                case 3: $s=preg_split("//",$str1);
                        foreach($s as $v) echo "\t$v <br>";
                break;
                }
        }
        else
        {
        switch($ch)
                {
                case 1:$pos=strpos($str2,$str1);
                        if($pos!=0)
                                echo"String '$str1' Not present at the start of  '$str2'.<br>";
                        else
                                echo"String '$str1' Present at the start of '$str2'.<br>";
                break;
                case 2: $str4=str_replace($str1,$str3,$str2);
                                echo "After replacing string::$str4<br>";
                break;
                case 3:
                        echo"After splitting the string::<br>";
                        $s=preg_split("//",$str2);
                                foreach($s as $v) echo "\t$v <br>";
                }
        }

?>