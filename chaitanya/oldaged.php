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
<th> FIRST NAME</th>
<th> LAST NAME</th>
<th>AGE&nbsp;&nbsp;</th>
<th>GENDER&nbsp;&nbsp;</th>
<th>MEDICAL HELP&nbsp;&nbsp;</th>
<th>DISEASE&nbsp;&nbsp;</th>
<th>MOBILE</th>
<th>ADDRESS</th>
<th>SUBJECT</th>
</tr>
<?php include 'dbconn.php';
$sql = "SELECT pname,gname,age,gender,medical,med,phone,adress,subject FROM oldage";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["pname"]. "</td><td>" . $row["gname"]. "</td><td>" . $row["age"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["medical"]. "</td><td>" . $row["med"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["adress"]. "</td><td>". $row["subject"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$con->close();
?>
</table>
</body>
</html>