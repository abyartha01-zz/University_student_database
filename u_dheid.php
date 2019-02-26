<html>
<head>
</head>
<body>
<?php
        require 'format_conn_str.php';

        $Code = $_POST['Code'];
        $New = $_POST['New'];

        $query = "UPDATE Department SET HoD_Email_ID = '".$New."' WHERE Code = '".$Code."'";

        $stdid = oci_parse($con_str, $query);
        if(!oci_execute($stdid))
                print("Problem Ocurred.");
        else
                print("Updation Successful.");
?>
</body>
</html>
