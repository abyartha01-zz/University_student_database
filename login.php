<?php
		require 'format_conn_str.php';
		//$conn = oci_connect('hr', 'hr', 'localhost/orclpdb', 'AL32UTF8');
		//if (!$conn) {
		//	$e = oci_error();
		//	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		//}

		$name = $_POST["uname"];
		$password = $_POST["psw"];

		$stid = oci_parse($con_str, "SELECT * FROM admin");
		if( !oci_execute($stid) ) {
    			$e = oci_error();
    			echo htmlentities($e['message'], ENT_QUOTES);
			oci_close($con_str);
		}

		while(($row = oci_fetch_array($stid, OCI_BOTH)) != false){
		if(strcmp($name, $row[0])==0 && strcmp($password, $row[1])== 0){
			print("");
			header('Location: index.php');
	
		}
		}
?>
