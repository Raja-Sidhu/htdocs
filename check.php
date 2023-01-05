<?php
# create database connection
require('Config/connect.php');
if(!empty($_POST["empid"])) 
{
  $query = "SELECT * FROM empdetails WHERE emp_id='". $_POST["empid"] ."' ";
  $result = oci_parse($con,$query);
  oci_execute($result);
  $count = oci_fetch($result);
  if($count) 
  {
    echo "<span style='color:red'> Employee ID already exists, you can update.</span>";
    echo "<script>$('#save').prop('hidden',true)</script>";
    echo "<script>$('#save').prop('disable',true)</script>";
    echo "<script>$('#update').prop('hidden',false)</script>";
  }
  else
  {
    echo "<span style='color:green'>New Registration.</span>";
    echo "<script>$('#save').prop('hidden',false);</script>";
    echo "<script>$('#save').prop('disable',false)</script>";
    echo "<script>$('#update').prop('hidden',true)</script>";
  }
}
oci_close($con);
?>