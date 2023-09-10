<?php 

include 'dbconn.php';
if(isset($_POST['save']))

{

$name = $_POST['name'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];
$num = $_POST['num'];
$days = $_POST['days'];
$subject = $_POST['subject'];

$sql_query="INSERT INTO food(name,num,days,phone,adress,subject)

VALUES

('$name', '$num', '$days', '$phone','$adress','$subject')";

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
  background-color:#ffffe6;
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
  background:#ffffcc;
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

<h1>"Your saved food can bring a smile to a poor person’s face.."</h1>

<div class="navbar">
  <a href="#" class="active">Home</a>
  <a href="foodd.php">Show Details</a>
    <a href="knowvid.php">Know your ID</a>
  <a href="index.html" class="right">Log Out</a>
</div>

<div class="container">
  <div style="text-align:center">
    <h1>Daily Feeding Program</h1>
<p>We serve cooked meals to people in need daily across India.</p>
    
  </div>
  <div class="row">
    <div class="column">
      <!-- Slide Show -->
<section> <img class="mySlides" src="img/food3.png" style="width:100%">
   <img class="mySlides" src="img/food.png" style="width:100%">
   <img class="mySlides" src="img/food1.png" style="width:100%">
  <img class="mySlides" src="img/food2.png" style="width:100%">
 
    <img class="mySlides" src="img/food4.png" style="width:100%">
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
  setTimeout(carousel, 3000);
}
</script>
    </div>
    <div class="column">
      <form action="food.php" method="post">
<p>Please do enter the needed information...........  </p>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">
 <label for="phone">Enter a phone number:</label><br><br>
  <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>
  <small>Format: 123-45-678</small><br><br>     
 <label for="adress">Adress(Where we need to distribute food) </label>
        <input type="text" id="adress" name="adress" placeholder="Where we need to distribute food">
        <label for="num">NUMBER(Number of people who need food )</label>
       <br> <input type="number" id="num" name="num" placeholder="Number"><br><br>
<label for="days">DAYS(For how many days you need supply)</label>
      <br>  <input type="varchar" id="days" name="days" placeholder="Days"><br><br>
        <label for="subject">Message..</label>
        <textarea id="subject" name="subject" placeholder="Any other special requirement you would like to add.." style="height:170px"></textarea>
       <td colspan="2" align="center"><input type="submit" name="save" value="Submit" style="font-size:20px"></td>
      </form>
    </div>
  </div>
</div>
</body>
</html>
