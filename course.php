 <?php
        require 'format_conn_str.php';

        $Code = $_POST['Code'];
        $Title = $_POST['Title'];
        $Lecture = $_POST['L'];
        $Theory = $_POST['T'];
        $Practical = $_POST['P'];
	$D_Code = $_POST['D_Code'];

        $query = "INSERT INTO Courses VALUES('".$Code."', '".$Title."', '".$Lecture."', '".$Theory."', '".$Practical."', '".$D_Code."')";

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
