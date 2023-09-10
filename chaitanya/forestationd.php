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
    <th>MOBILE</th>
<th>ADDRESS</th>
<th>ANIMAL</th>
<th>SUBJECT</th>
</tr>
<?php include 'dbconn.php';
$sql = "SELECT firstname,lastname,age,gender,phone,adress,animal,subject FROM forestration";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["age"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["adress"]. "</td><td>" . $row["animal"] . "</td><td>"
. $row["subject"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$con->close();
?>
</table>
</body>
</html>