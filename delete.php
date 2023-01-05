<html>

<head>
	<title>Employee Details</title>
</head>

<body>
	<?php
	require('Config/connect.php');
	$query = "DELETE FROM EMPDETAILS WHERE EMP_ID = '" . $_GET["emp_id"] . "' ";
	$objParse = oci_parse($con, $query);
	$objExecute = oci_execute($objParse, OCI_DEFAULT);
	if ($objExecute) {
		oci_commit($con); //*** Commit Transaction ***//  
		header("Location:../lcodeempdtl.php");
		exit();
	} else {
		oci_rollback($objConnect); //*** RollBack Transaction ***//  
		$e = oci_error($objParse);
		echo "Error Delete [" . $e['message'] . "]";
	}
	oci_close($con);
	?>
</body>

</html>