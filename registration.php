<?php
        require 'format_conn_str.php';

        $C_Code = $_POST['C_Code'];
        $Roll_No = $_POST['Roll_No'];
        $Grade = $_POST['Grade'];

        $query = "INSERT INTO Registered VALUES('".$C_Code."', '".$Roll_No."', '".$Grade."')";
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
