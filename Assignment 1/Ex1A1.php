<?php
$string = $_GET['inputStr'];
echo "Submitted String is ".$string;
$vowel = array("a"=>0,"e"=>0,"i"=>0,"u"=>0,"o"=>0);
$cnt = 0;
for($i=0;$i<strlen($string);$i++){
	if(strtolower($string[$i])== 'a'){
		++$cnt;
		++$vowel['a'];
	}
	
	if(strtolower($string[$i])== 'e'){
		++$cnt;
		++$vowel['e'];
	}
	
	if(strtolower($string[$i])== 'i'){
		++$cnt;
		++$vowel['i'];
	}
	
	if(strtolower($string[$i])== 'o'){
		++$cnt;
		++$vowel['o'];
	}
	
	if(strtolower($string[$i])== 'u'){
		++$cnt;
		++$vowel['u'];
	}
}

echo "<h1>Total number of vowels found: ".$cnt."</h1>";
echo "Occurence of 'a': ".$vowel['a']."<br>";
echo "Occurence of 'e': ".$vowel['e']."<br>";
echo "Occurence of 'i': ".$vowel['i']."<br>";
echo "Occurence of 'o': ".$vowel['o']."<br>";
echo "Occurence of 'u': ".$vowel['u']."<br>";
$str = strrev($string);
$a = strlen($string);
$f = 0;
for($j=0;$j<$a;$j++){
	if($str[$j]==$string[$j]){
		$f=0;
	}
	else{
		$f=1;
		break;
	}
}
if($f==0){
    echo"string is palindrome";
}
else{
    echo"string is not palindrome";
}
?>