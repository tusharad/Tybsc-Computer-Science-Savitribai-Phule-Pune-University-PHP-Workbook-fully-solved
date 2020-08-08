<?php

$dept_name = $_POST['dept_name'];

$con = pg_connect( "dbname=test" );
if( !$con ) {
echo 'Connection not established';
exit;
}

$dept_insert = "insert into dept values(1,'HR','1st Floor') ,(2, 'Comp sci', '2nd floor'),(3,'Maths','2nd
Floor'),(4,'Electronics','3rd Floor')";

$res = pg_query($con,$dept_insert);

$emp_insert = "insert into employee values( 1, 'abc','Pune','7894356','20000',1),( 2, 'abc','Pune','7894356','10000', 1),( 3,
'abc','Pune','7894356','30000',3),( 4, 'abc','Pune','7894356','120000',2)";

$res1 = pg_query($con,$emp_insert);

$strQuery = "select max(salary), min(salary), sum(salary) from employee where d_no in(select d_no from dept where
dname = '$dept_name')";

$result = pg_query($con,$strQuery);

$row = pg_fetch_row($result);

?>
<html>
<body>
<table>
<tr>
<th>Maximum salary</th>
<th>Minimum salary</th>
<th>Sum</th>
</tr>
<tr>
<td><?php echo $row[0];?></td>
<td><?php echo $row[1];?></td>
<td><?php echo $row[2];?></td>
</tr>
</table>
</body>
</html>

/*
create table dept(d_no int primary key,dname varchar(20),addr varchar(20));
create table employee(eno int primary key,ename varchar(20),addr varchar(20),pno bigint,salary int,d_no int references dept(d_no) on delete cascade on update cascade);
*/