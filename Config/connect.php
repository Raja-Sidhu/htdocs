<?php
$con=oci_connect('rtms0811', 'lcode', 'localhost/orcldb');
if(!$con)
{
	die("Connection Error...");	 
}
?>