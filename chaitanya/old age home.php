<?php 

include 'dbconn.php';
if(isset($_POST['save']))

{

$pname = $_POST['pname'];

$gname = $_POST['gname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$medical = $_POST['medical'];
$med = $_POST['med'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];

$subject = $_POST['subject'];

$sql_query="INSERT INTO oldage(pname,gname,gender,medical,age,phone,adress,med,subject)

VALUES

('$pname', '$gname', '$gender','$medical', '$age', '$phone','$adress','$med','$subject')";

if (mysqli_query($con, $sql_query))

{
    ?>
     <script>
        alert("Insertion Successful");   
   </script>
    <?php   
}else{
    ?>
     <script>
        alert("Not inserted");   
   </script>
    <?php 
}
}
?>

<!DOCTYPE html>
<html>
<head>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
.navbar {
  overflow: hidden;
  background-color: #1a0c00;

  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}
/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}
/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f0f5f5;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<h2>"WRINKLES WILL ONLY GO WHERE THE SMILES HAVE BEEN."</h2>

<div class="navbar">
  <a href="#" class="active">Home</a>
  <a href="oldaged.php">Show Details</a>
    <a href="knowvid.php">Know your ID</a>s
  <a href="index.html" class="right">Log Out</a>
</div>

<div class="container">
  <div style="text-align:center">
    <h2>Make yourself at HOME.</h2>
    <p>Please do enter the needed information  </p>
  </div>
  <div class="row">
    <div class="column">
      <!-- Slide Show -->
<section>
  <img class="mySlides" src="img/OG1.png" style="width:100%">
<img class="mySlides" src="img/OG2.png" style="width:100%">
<img class="mySlides" src="img/OG3.png" style="width:100%">
<img class="mySlides" src="img/OG4.png" style="width:100%">
  
  
</section>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 4000);
}
</script>
    </div>
    <div class="column">
      <form action="old age home.php" method="post">
        <label for="pname">Name of a person who need help</label>
        <input type="text" id="pname" name="pname" placeholder="Your name..">
        <label for="gname">Guardian-name</label>
        <input type="text" id="gname" name="gname" placeholder="Name..">
        <label for="age">Age</label>
        <input type="number" id="age" name="age" placeholder=" age.."><br><br>
        <lable for="gender">Gender</lable><br><br>
          <td><input type="radio" id="gender" name="gender" value="female">female
<input type="radio" id="gender" name="gender" value="male">male</td><br><br>
 <lable for="medical">Does the person have any medical problems</lable><br><br>
 <td><input type="radio" id="medical" name="medical" value="no">NO
<input type="radio" id="medical" name="medical" value="yes">YES</td><br><br>
<label for="med">Medical history of a person</label>
        <input type="text" id="med" name="med" >
        <label for="phone">Enter a phone number:</label><br><br>
  <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>
  <small>Format: 123-45-678</small><br><br>
        <label for="adress">City </label>
        <input type="text" id="adress" name="adress" placeholder="enter persons city">
        <label for="subject">Message</label>
        <textarea id="subject" name="subject" placeholder="Any other special circumstances you would like to add.." style="height:170px"></textarea>
       <td colspan="2" align="center"><input type="submit" name="save" value="Submit" style="font-size:20px"></td>
      </form>
    </div>
  </div>
</div>

</body>
</html>
