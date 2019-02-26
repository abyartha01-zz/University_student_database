<html>
<head>
</head>
<body>
<?php
        require 'format_conn_str.php';

        $Roll_No = $_POST['Roll_No'];
        $New = $_POST['New'];

        $query = "UPDATE Student SET FName = '".$New."' WHERE Roll_No = '".$Roll_No."'";

        $stdid = oci_parse($con_str, $query);
        if(!oci_execute($stdid))
                print("Problem Ocurred.");
        else
                print("Updation Successful.");
?>
</body>
</html>
