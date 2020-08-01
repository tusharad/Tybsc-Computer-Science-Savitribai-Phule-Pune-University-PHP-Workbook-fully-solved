<?php
	$itemcode = $_POST['itemcode'];
	$itemname = $_POST['itemname'];
	 $unitssold = $_POST['unitssold'];
                $rate = $_POST['rate'];
             
                $i_code = explode(',',$itemcode);
                $i_name = explode(',',$itemname);
                $i_unit = explode(',',$unitssold);
                $i_rate = explode(',',$rate);
                             
                $t_amt = (($i_unit[0]*$i_rate[0])+($i_unit[1]*$i_rate[1])+($i_unit[2]*$i_rate[2])+($i_unit[3]*$i_rate[3])+($i_unit[4]*$i_rate[4]));

                echo "<table align=center border=1>";
                echo "<tr><td> <b>Item Code</b> </td><td> <b>Item Name</b> </td><td><b> Units Sold</b> </td><td> <b>Rate </b></td></tr>";
                echo "<tr><td>".$i_code[0]."</td><td>".$i_name[0]."</td><td>".$i_unit[0]."</td><td>".$i_rate[0]."</td></tr>";
                echo "<tr><td>".$i_code[1]."</td><td>".$i_name[1]."</td><td>".$i_unit[1]."</td><td>".$i_rate[1]."</td></tr>";
                echo "<tr><td>".$i_code[2]."</td><td>".$i_name[2]."</td><td>".$i_unit[2]."</td><td>".$i_rate[2]."</td></tr>";
                echo "<tr><td>".$i_code[3]."</td><td>".$i_name[3]."</td><td>".$i_unit[3]."</td><td>".$i_rate[3]."</td></tr>";
                echo "<tr><td>".$i_code[4]."</td><td>".$i_name[4]."</td><td>".$i_unit[4]."</td><td>".$i_rate[4]."</td></tr>";
                echo "<tr><th colspan=4></th></tr>";
                echo "<tr><th colspan=3>Total amount </th><td>".$t_amt."</td></tr>";
                echo "</table>";
?>
?>