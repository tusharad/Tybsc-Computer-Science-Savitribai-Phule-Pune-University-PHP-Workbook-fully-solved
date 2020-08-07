<?php
echo "Hello";
$direct = $_POST['d'];
$ch = $_POST['ch'];
if(file_exists('test.txt')){
	$total = filesize($direct);
	switch ($ch) {
		case 1:
			echo "Size of file is ".$total;
			break;
		case 2:
			echo "Hello there!";
			echo "Last modified time: ".date("F d Y H:i:s.",fileatime("test.txt"));
			break;
		case 3:
		echo fileowner("test.txt");
		break;
		case 4:
		echo filetype("gfg.txt");
		break;
		case 5:
		$file_pointer = "test.txt";   
	// Use unlink() function to delete a file  
	if (!unlink($file_pointer)) {  
    echo ("$file_pointer cannot be deleted due to an error");  
	}  
	else {  
    echo ("$file_pointer has been deleted");  
		}  
	}
	else{
	echo "Failed!";
		}
		break;
		case 6:
		echo copy("test.txt","test2.txt");
		break;
		case 7:
		echo getcwd();
		break;

	case 8:			
	$dirname = "gfg"; 
  	// removing directory using rmdir() 
	if(rmdir($dirname)) 
	{ 
  	echo ("$dirname successfully removed"); 
	} 
	else
	{ 
 	echo ($dirname . "couldn't be removed");  
	} 
	break;
	}
?>