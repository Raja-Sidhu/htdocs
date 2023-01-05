<?php
//create database connection
require('Config/connect.php');
$k = $_POST['x'];
$query = "SELECT * FROM empdetails WHERE emp_id='$k'";
$result = oci_parse($con, $query);
oci_execute($result);
if ($row = oci_fetch_array($result)) {
  $data['empname'] = $row['EMP_NAME'];
  $data['gender'] = $row['GENDER'];
  $data['dep'] = $row['DEP'];
  $data['addr'] = $row['ADDR'];
  $data['mobile'] = $row['MOB'];
  $data['doj'] = $row['DOJ'];
} else {
  $data['empname'] = "";
  $data['gender'] = "";
  $data['dep'] = "";
  $data['addr'] = "";
  $data['mobile'] = "";
  $data['doj'] = "";
}
echo json_encode($data);
oci_close($con);

