<html>
<head>
</head>
<body>
<?php
        require 'format_conn_str.php';

        $Code = $_POST['Code'];

        $query = "DELETE FROM Department WHERE Code = '".$Code."'";

        $stdid = oci_parse($con_str, $query);
        if(!oci_execute($stdid))
                print("Problem Ocurred.");
        else
                print("Deletion Successful.");
?>
</body>
</html>
