<?php 

include 'dbconn.php';
if(isset($_POST['save']))

{

$firstname = $_POST['firstname'];

$lastname = $_POST['lastname'];

$gender = $_POST['gender'];
$legal = $_POST['legal'];

$age = $_POST['age'];

$phone = $_POST['phone'];
$adress = $_POST['adress'];
$qual = $_POST['qual'];
$subject = $_POST['subject'];

$sql_query="INSERT INTO womenemp(firstname,lastname,gender,legal,age,phone,adress,qual,subject)

VALUES

('$firstname', '$lastname', '$gender','$legal', '$age', '$phone','$adress','$qual','$subject')";
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
<html>
<head>
<style>
body {
  font-family: 'Poppins', sans-serif;
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
  background-color:  #e6f7ff;
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
/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background:#cceeff;
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

<h2>"NOURISH WOMEN BY EMPOWERING THEM"</h2>
<div class="footer">
<h2>EDUCATE A WOMAN , EMPOWER A NATION.</h2>
    <p>WOMEN EMPOWERMENT</p>
</div>
<div class="navbar">
  <a href="#" class="active">Home</a>
  <a href="womend.php">Show Details</a>
    <a href="knowvid.php">Know your ID</a>
  <a href="index.html" class="right">Log out</a>
</div>

<div class="container">
  <div style="text-align:center">
    <h2>Woman creates life.... but still without RIGHTS??</h2>
    <p>Please do enter the needed information  </p>
  </div>
  <div class="row">
    <div class="column">
      <!-- Slide Show -->
<section>
  <img class="mySlides" src="img/wemp3.png" style="width:100%">
<img class="mySlides" src="img/wemp4.png" style="width:100%">
<img class="mySlides" src="img/wemp5.png" style="width:100%">
<img class="mySlides" src="img/wemp2.png" style="width:100%">
  
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
      <form action="womenempowerment.php" method="post">
        <label for="fname">First Name of a person who need help</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="age">Age</label>
        <input type="number" id="age" name="age" placeholder=" age.."><br><br>
        <lable for="gender">Gender</lable><br><br>
          <td><input type="radio" id="gender" name="gender" value="female">female
<input type="radio" id="gender" name="gender" value="male">male</td><br><br>
 <lable for="legal">Does the person need legal support</lable><br><br>
 <td><input type="radio" id="legal" name="legal" value="no">NO
<input type="radio" id="legal" name="legal" value="yes">YES</td><br><br>
        <label for="phone">Enter a phone number:</label><br><br>
  <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>
  <small>Format: 123-45-678</small><br><br>
        <label for="adress">City </label>
        <input type="text" id="adress" name="adress" placeholder="enter persons city">
        <label for="qual">Persons highest qualification</label>
        <input type="text" id="qual" name="qual" >
                   

        <label for="subject">Kind of support you need</label>
        <textarea id="subject" name="subject" placeholder="Any other special requirement you would like to add.." style="height:170px"></textarea>
       <td colspan="2" align="center"><input type="submit" name="save" value="Submit" style="font-size:20px"></td>
      </form>
    </div>
  </div>
</div>
</body>
</html>

 