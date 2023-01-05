<?php

if(isset($_POST['submit'])){
$eid=$_POST['empid'];
$ename=$_POST['empname'];
$gen=$_POST['gender'];
$d=$_POST['dep'];
$ar=$_POST['addr'];
$m=$_POST['mobile'];
$dj=$_POST['doj'];

if(empty($eid)||empty($ename)||empty($gen)||empty($d)||empty($ar)||empty($m)||empty($dj))
{
	header("Location:../lcodeempdtl.php?formempdtl=empty");
	exit();
}
elseif(!preg_match("/^[a-zA-Z0-9]+$/", $eid)) 
{
	header("Location:../lcodeempdtl.php?formempdtl=id");
	exit();
}
elseif(!preg_match('/^[0-9]{10}+$/',$m)) 
{
	header("Location:../lcodeempdtl.php?formempdtl=mob");
	exit();
}
elseif(!preg_match("/^[a-zA-Z ]*$/", $ename)) 
{
	header("Location:../lcodeempdtl.php?formempdtl=name");
	exit();
}
else
{
	require('Config/connect.php');
	$query = "SELECT * FROM empdetails WHERE emp_id='". $_POST["empid"] ."' ";
	$result = oci_parse($con,$query);
	oci_execute($result);
	$count = oci_fetch($result);
	if($count>0) 
	{
		
		$query = "UPDATE EMPDETAILS SET ";  
		$query .="EMP_ID = '$eid' ";  
		$query .=",EMP_NAME = '$ename' ";  
		$query .=",GENDER = '$gen' ";  
		$query .=",DEP = '$d' ";  
		$query .=",ADDR = '$ar' ";  
		$query .=",MOB = '$m' "; 
		$query .=",DOJ = '$dj' ";  
		$query .="WHERE EMP_ID = '$eid' ";  
		$objParse = oci_parse($con, $query);  
		$objExecute = oci_execute($objParse, OCI_DEFAULT);  
		if($objExecute)  
		{  
			oci_commit($con); //*** Commit Transaction ***//
			header("Location:../lcodeempdtl.php?formempdtl=updated");
		}
		else  
		{  
			oci_rollback($con); //*** RollBack Transaction ***//  
			$e = oci_error($objParse);  
			echo "Error Save [".$e['message']."]";  
		}  
	
	}
	else
	{
		$sql="INSERT INTO empdetails(emp_id,emp_name,gender,dep,addr,mob,doj) values  ('$eid','$ename','$gen','$d','$ar','$m','$dj' )";
		$result=oci_parse($con,$sql);
		oci_execute($result);
		header("Location:../lcodeempdtl.php?formempdtl=success");
	}

	}
}
oci_close($con);
?>