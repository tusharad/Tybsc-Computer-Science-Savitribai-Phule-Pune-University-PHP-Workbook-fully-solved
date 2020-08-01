<?php
$s=$_POST['str'];
$stack=array();
 for($i=0;$i<strlen($s);$i++)
  array_push($stack,$s[$i]);
 for($i=0;$i<strlen($s);$i++)
  if(array_pop($stack)!=$s[$i])
    break;
 if($i==strlen($s))
   echo "$s is pallindrome:";
  else
   echo "$s is not pallindrom:";

?>

