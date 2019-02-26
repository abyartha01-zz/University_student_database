<?php

        require 'format_conn_str.php';

        $FName = $_POST['FName'];
        $LName = $_POST['LName'];
        $Roll_No = $_POST['Roll_No'];
        $DoB = $_POST['DoB'];
        $Sex = $_POST['Sex'];
        $Contact_No = $_POST['Contact_No'];
        $Email_ID = $_POST['Email_ID'];
        $Address = $_POST['Address'];
        $CGPA = $_POST['CGPA'];
        if (isset($_POST['$SGPA_1st_Semester']))
                $SGPA_1st_Semester = 0.0;
        else
                $SGPA_1st_Semester = $_POST['SGPA_1st_Semester'];
        if (isset($_POST['$SGPA_2nd_Semester']))
                $SGPA_2nd_Semester = 0.0;
        else
                $SGPA_2nd_Semester = $_POST['SGPA_2nd_Semester'];
         if (isset($_POST['$SGPA_3rd_Semester']))
                $SGPA_3rd_Semester = 0.0;
        else
                $SGPA_3rd_Semester = $_POST['SGPA_3rd_Semester'];
        if (isset($_POST['$SGPA_4th_Semester']))
                $SGPA_4th_Semester = 0.0;
        else
                $SGPA_4th_Semester = $_POST['SGPA_4th_Semester'];
         if (isset($_POST['$SGPA_5th_Semester']))
                $SGPA_5th_Semester = 0.0;
        else
                $SGPA_5th_Semester = $_POST['SGPA_5th_Semester'];
         if (isset($_POST['$SGPA_6th_Semester']))
                $SGPA_6th_Semester = 0.0;
        else
                $SGPA_6th_Semester = $_POST['SGPA_6th_Semester'];
         if (empty($_POST['$SGPA_7th_Semester']))
                $SGPA_7th_Semester = 0.0;
        else
                $SGPA_7th_Semester = $_POST['SGPA_7th_Semester'];
         if (empty($_POST['$SGPA_8th_Semester']))
                $SGPA_8th_Semester = 0.0;
        else
                $SGPA_8th_Semester = $_POST['SGPA_8th_Semester'];
        $Local_Guardian = $_POST['Local_Guardian'];
        $D_Code = $_POST['D_Code'];
        $Mentor = $_POST['Mentor'];
        $query = "INSERT INTO Student Values('".$FName."', '".$LName."', '".$Roll_No."', to_date('".$DoB."', 'yyyy/mm/dd'), '".$Sex."', '".$Contact_No."', '".$Email_ID."', '".$Address."', '".$CGPA."', '".$SGPA_1st_Semester."', '".$SGPA_2nd_Semester."', '".$SGPA_3rd_Semester."', '".$SGPA_4th_Semester."', '".$SGPA_5th_Semester."', '".$SGPA_6th_Semester."', '".$SGPA_7th_Semester."', '".$SGPA_8th_Semester."', '".$Local_Guardian."', '".$D_Code."', '".$Mentor."')";                                                                                                                                                        3,3           11%

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
  {
    echo "<tr>";
    echo "<th>Insertion Successful</th>";
    echo "</tr>";
  }

?>
