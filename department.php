<?php
        require 'format_conn_str.php';

        $Code = $_POST['Code'];
        $Title = $_POST['Title'];
        $HoD_Name = $_POST['HoD_Name'];
        $HoD_Contact_No = $_POST['HoD_Contact_No'];
        $HoD_Email_ID = $_POST['HoD_Email_ID'];

        $query = "INSERT INTO Department VALUES('".$Code."', '".$Title."', '".$HoD_Name."', '".$HoD_Contact_No."', '".$HoD_Email_ID."')";
        $stdid = oci_parse($con_str, $query);
	if(!oci_execute($stdid)){

                print("Problem");
                $e = oci_error($stdid);
                print htmlentities($e['message']);
                print "\n<pre>\n";
                print htmlentities($e['sqltext']);
                printf("\n%".($e['offset'] + 1)."s", "^");
                print "\n<pre>\n";
        }
        else
                print("Insertion Successful.");
?>

