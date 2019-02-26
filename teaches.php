<?php
        require 'format_conn_str.php';

        $C_Code = $_POST['C_Code'];
        $D_Code = $_POST['D_Code'];

        $query = "INSERT INTO Teaches VALUES('".$C_Code."', '".$D_Code."')";
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
