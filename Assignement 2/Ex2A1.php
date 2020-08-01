	<?php
	$array=array('zero'=>0,'one'=>1,'two'=>2,'three'=>3,'four'=>4,'five'=>5);
	$ch=$_POST['a'];
	switch($ch)
	{
	case 1:foreach($array as $key=>$value)
	{
	echo"key:$key
	val:$value.
	";
	}
	break;
	case 2:echo sizeof($array);
	break;
	case 3 :
	$len=sizeof($array);
	array_splice($array,$len);
	print_r( $array);
	break;
	case 4 :
	print_r(array_flip($array));
	break;
	case 5 :
	shuffle($array);
	print_r($array);
	break;
	}
	?>