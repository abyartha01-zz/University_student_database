<html>
<head>
         <style>
#table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
        background-color: #aec1c0;
}

#table td, #table th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;

}

#table tr:nth-child(even){background-color: #f2f2f2;}

#table tr:hover {background-color: #ddd;}
#table tr {
text-align: center;
}

#table th {
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: #aec1c0;
    color: white;
}
.button {
    background-color: #aec1c0;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.Heading{
        padding-bottom: 50px;
        padding-top: 20px;
        font-size: 60px;
}
body{
        background-size: cover;
}
</style>
<title>Result
</title>
</head>
<body background = http://hdqwalls.com/wallpapers/minimalist-mountains-black-and-white-ap.jpg>
<center>
<h1 class = "Heading">Student Details</h1> 
<table id="table">
  <tr>
    <th>FName</th>
    <th>LName</th>
    <th>Roll_No</th>
        <th>DoB</th>
        <th>Sex</th>
<th>Contact_No</th>
<th>Email_ID</th>
<th>Address</th>
<th>CGPA</th>
<th>SGPA_1st_Semester</th>
<th>SGPA_2nd_Semester</th>
<th>SGPA_3rd_Semester</th>
<th>SGPA_4th_Semester</th>
<th>SGPA_5th_Semester</th>
<th>SGPA_6th_Semester</th>
<th>SGPA_7th_Semester</th>
<th>SGPA_8th_Semester</th>
<th>Local_Guardian</th>
<th>D_Code</th>
<th>Mentor</th>
  </tr>
<?php
        require 'format_conn_str.php';

        $Roll_No = $_POST['Roll_No'];

        $query = "SELECT * from Student WHERE Roll_No = '".$Roll_No."'";
        $stdid = oci_parse($con_str, $query);
        if(!oci_execute($stdid))
                print("Problem Occured.");
        else
               while ($data = oci_fetch_array($stdid))
               {
			echo "<tr>";
			echo "<td> $data[0]</td>";
			echo "<td> $data[1]</td>";	
			echo "<td> $data[2]</td>";
			echo "<td> $data[3]</td>";	
			echo "<td> $data[4]</td>";
			echo "<td> $data[5]</td>";
			echo "<td> $data[6]</td>";
			echo "<td> $data[7]</td>";
			echo "<td> $data[8]</td>";
			echo "<td> $data[9]</td>";
			echo "<td> $data[10]</td>";
			echo "<td> $data[11]</td>";
			echo "<td> $data[12]</td>";
			echo "<td> $data[13]</td>";
			echo "<td> $data[14]</td>";
			echo "<td> $data[15]</td>";
			echo "<td> $data[16]</td>";
			echo "<td> $data[17]</td>";
			echo "<td> $data[18]</td>";
			echo "<td> $data[19]</td>";
			echo "</tr>";
		}
?>
</table>
</center>
</body>
</html>
