<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align:left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>  NAME</th>
<th>EMAIL ADDRESS&nbsp;&nbsp;</th>
<th>CITY&nbsp;&nbsp;</th>
<th>MOBILE&nbsp;&nbsp;</th>
<th>FIELD&nbsp;&nbsp;</th>
<th>VOLUNTEER ID&nbsp;&nbsp;</th>
</tr>
<?php include 'dbconn.php';
$sql = "SELECT name,email,city,mobile,field,vid FROM volunteer";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["city"]. "</td><td>". $row["mobile"]. "</td><td>" . $row["field"]. "</td><td>" . $row["vid"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$con->close();
?>
</table>
</body>
</html>