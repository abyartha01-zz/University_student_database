<html>
<head>
</head>
<body>
<?php
        require 'format_conn_str.php';

        $Contact_No = $_POST['Contact_No'];
        $New = $_POST['New'];

        $query = "UPDATE Instructor SET Email_ID = '".$New."' WHERE Contact_No = '".$Contact_No."'";

        $stdid = oci_parse($con_str, $query);
        if(!oci_execute($stdid))
                print("Problem Ocurred.");
        else
                print("Updation Successful.");
?>
</body>
</html>
