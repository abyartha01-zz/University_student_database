<?php
 $con_str = oci_connect("abhyartha_csb16", "abhyartha", "192.168.125.4/oracle10");
 //$con_str = oci_connect("LOGIN_ID", "PASSWORD", "192.168.125.4/oracle10");
    if (!$con_str)
        {
       $err = oci_error();
       print("Could not connect to the database.");
	exit;
     }



?>
