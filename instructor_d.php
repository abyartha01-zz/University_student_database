<html>
<head>
</head>
<body>
<?php
        require 'format_conn_str.php';

        $Contact_No = $_POST['Contact_No'];

        $query = "DELETE FROM Instructor WHERE Contact_No = '".$Contact_No."'";

        $stdid = oci_parse($con_str, $query);
        if(!oci_execute($stdid))
                print("Problem Ocurred.");
        else
                print("Deletion Successful.");
?>
</body>
</html>
