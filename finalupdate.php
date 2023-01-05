<html>  
<head>  
<title>Employee Details </title>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>  
<body>  
<?php  
require('Config/connect.php');
$query = "UPDATE EMPDETAILS SET ";  
$query .="EMP_ID = '".$_POST["emp_id"]."' ";  
$query .=",EMP_NAME = '".$_POST["emp_name"]."' ";  
$query .=",GENDER = '".$_POST["gender"]."' ";  
$query .=",DEP = '".$_POST["dep"]."' ";  
$query .=",ADDR = '".$_POST["addr"]."' ";  
$query .=",MOB = '".$_POST["mob"]."' "; 
$query .=",DOJ = '".$_POST["doj"]."' ";  
$query .="WHERE EMP_ID = '".$_POST["emp_id"]."' ";  
$objParse = oci_parse($con, $query);  
$objExecute = oci_execute($objParse, OCI_DEFAULT);  
if($objExecute)  
{  
oci_commit($con); //*** Commit Transaction ***//

?>
<script>
            swal("Done", "Succesfully Updated!", "success");          
</script>

  
<?php
header("Location:../lcodeempdtl.php");
}  
else  
{  
oci_rollback($con); //*** RollBack Transaction ***//  
$e = oci_error($objParse);  
echo "Error Save [".$e['message']."]";  
}  
oci_close($con);  
?>  
</body>  
</html> 