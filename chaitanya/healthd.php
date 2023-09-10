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
text-align: left;
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
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>AGE</th>
<th>GENDER</th>
<th>PHONE</th>
<th>CITY</th>
<th>DISEASE</th>
<th>SUBJECT</th>
<th></th>
</tr>
<?php include 'dbconn.php';
$sql = "SELECT firstname,lastname,age,gender,phone,city,Disease,subject FROM  health";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["age"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["phone"] . "</td><td>". $row["city"]. "</td><td>" . $row["Disease"] . "</td><td>" . $row["subject"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$con->close();
?>
</table>
</body>
</html>