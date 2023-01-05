<?php
$eid=$_POST['empid'];
$ename=$_POST['empname'];
$gen=$_POST['gender'];
$d=$_POST['dep'];
$ar=$_POST['addr'];
$m=$_POST['mobile'];
$dj=$_POST['doj'];


$con=oci_connect('rtms0811', 'lcode', 'localhost/orcldb');
$query = oci_parse($con,"INSERT INTO empdetails(emp_id,emp_name,gender,dep,addr,mob,doj) values  ('$eid','$ename','$gen','$d','$ar','$m','$dj')");  
 $result = oci_execute($query);
if($result)

{
	echo "Employee Details Added...";     
}

else
{
	echo "Employee Details Not Added...";
}

?>