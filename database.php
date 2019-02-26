<?php
include("my_connect_str.php");
print("Connected successfully to the database ");

$query_str=oci_parse($con_str,"describe student_det");
if(!oci_execute($query_str))
	{
		print("Problem in the Query");
		exit;
	}

while($query_data=oci_fetch_array($query_str))
{
	print("<BR>");
	print("# $query_data[0]# $query_data[1]");
}
print("<BR>Query executed Successfully");


?>
