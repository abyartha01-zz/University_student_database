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
<h1 class = "Heading">Course Details</h1>
<table id="table">
  <tr>
    <th>Code</th>
    <th>Title</th>
    <th>Lecture</th>
        <th>Theory</th>
        <th>Practical</th>
<th>D_Code</th>
  </tr>
<?php
        require 'format_conn_str.php';

        $query = "SELECT * from Courses";
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
                        echo "</tr>";
                }
?>
</table>
</center>
</body>
</html>
