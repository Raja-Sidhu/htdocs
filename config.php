<?php
// Create connection to Oracle
//$conn = oci_connect("DB_NAME", "DB_PASSWORD", "DB_IP:PORT_NO/DATABASE_NAME");
$con=oci_connect('rtms0811', 'lcode', 'localhost/orcldb');
if(!$con)
{
	die("Connection Error...");	 
}
oci_close($con);
?>
