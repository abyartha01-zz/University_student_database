<?php
        require 'format_conn_str.php';

        $Name = $_POST['Name'];
        $Contact_No = $_POST['Contact_No'];
        $Email_ID = $_POST['Email_ID'];

        $query = "INSERT INTO Local_Guardian Values('".$Name."', '".$Contact_No."', '".$Email_ID."')";
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

