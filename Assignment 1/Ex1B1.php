<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operation = $_GET['operation'];
switch($operation){
	case '+': echo "Addition is ".($num1+$num2);
	break;
	
	case '-': echo "Subtraction is ".($num1-$num2);
	break;
	
	case '*': echo "Multiplication is ".($num1*$num2);
	break;
	
	case '/': echo "Division is ".($num1/$num2);
	break;
}

?>