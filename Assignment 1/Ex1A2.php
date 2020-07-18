<?php
$str1 = $_POST['str1'];
$str2 = $_POST['str2'];
$str3 = $_POST['str3'];
$ch = $_POST['ch'];
$oc = 0;

echo "<br>String 1: $str1<br>String 2: $str2<br>String for replace: $str3<br>";
if($str1>$str2){
	switch($ch){
		case 1: echo "<br>First occurence at position: ";
				echo strpos($str1,$str2);
				echo "<br>Last occurence at position: ";
				echo strrpos($str1,$str2);
				break;
				
		case 2: $oc = substr_count($str1,$str2);
				if($oc==0){
					echo"<br>String '$str2' Not present in String '$str1'<br>";
				}
				else{
					echo"<br>String '$str2' present $oc times in string '$str1'<br>";
				}
				break;
		
		case 3: $str4=str_replace($str2,$str3,$str1);
				echo "<br>After replacing string is: '$str4'<br>";
				break;
	}
}
else{
	switch($ch){
		case 1: echo "<br>First occurence at position: ";
				echo strpos($str2,$str1);
				echo "<br>Last occurence at position: ";
				echo strrpos($str2,$str1);
				break;
				
		case 2: $oc = substr_count($str2,$str1);
				if($oc==0){
					echo"<br>String '$str1' Not present in String '$str2'<br>";
				}
				else{
					echo"<br>String '$str1' present $oc times in string '$str2'<br>";
				}
				break;
		
		case 3: $str4=str_replace($str1,$str3,$str2);
				echo "<br>After replacing string is: '$str4'<br>";
				break;
	}
}
?>
<h1><a href="Ex1A2.html">Go Back</a></h1>