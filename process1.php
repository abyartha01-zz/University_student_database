<?php
include("my_connect_str.php");
$text1=$_POST['text1'];
$radio1=$_POST['radio1'];
print("<HTML>");
print("<HEAD>");
print("<TITLE>");
print("</TITLE>");
print("</HEAD>");
print("<BODY>");
print("Process file <BR>");
print("The text input is = $text1 \n <BR>");
$query_str=oci_parse($con_str,"select * from student_det where roll='$text1'");
if(!oci_execute($query_str))
	{ print("problem  "); exit;}
while($data=oci_fetch_array($query_str))
{
print("$data[0] # $data[1] # $data[2] <BR>");
}
print("</BODY>");
print("</HTML>");
?>
