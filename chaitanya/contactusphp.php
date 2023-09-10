<?php 

$server_name="localhost"; 
$username="root"; 
$password=""; 
$database_name="chaitanya"; 
$conn=mysqli_connect($server_name, $username, $password, $database_name); 

//now check the connection 

if(!$conn) 
{
die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))

{
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$sql_query="INSERT INTO contactus(name,email, phone,subject)
VALUES
('$name',  '$email ', '$phone','$subject')";
if (mysqli_query($conn, $sql_query))
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

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<style>
 
*{
  margin: 0;
  padding: 0;
  font-family: "montserrat",sans-serif;
}
* {
  box-sizing: border-box;
}
    body
    {
        background: url(img/bg.png) no-repeat center;
  background-size: cover;
    }
.contact-section{
  
  padding: 40px 0;
    margin-top: 20px;
}
.contact-section h1{
  text-align: center;
  color: #ddd;
}
.border{
  width: 100px;
  height: 10px;
  background: #34495e;
  margin: 40px auto;
}

.contact-form{
  max-width: 600px;
  margin: auto;
  padding: 0 25px;
  overflow: hidden;
}
 
.contact-form-text{
  display: block;
  width: 100%;
  box-sizing: border-box;
  margin: 16px 0;
  border: 0;
  background: #111;
  padding: 20px 40px;
  outline: none;
  color: #ddd;
  transition: 0.5s;
}
.contact-form-text:focus{
  box-shadow: 0 0 10px 4px #34495e;
}
textarea.contact-form-text{
  resize: none;
  height: 120px;
}
.contact-form-btn{
  float: right;
  border: 0;
  background: #34495e;
  color: #fff;
  padding: 12px 50px;
  border-radius: 20px;
  cursor: pointer;
  transition: 0.5s;
}
.contact-form-btn:hover{
  background: #2980b9;
}

</style>
    <body>
        <section>
            <nav>
                <a href="index.html"><img src="images/logo.png"></a>
                <div class="nav-links" id="nav-links">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="aboutus.html">ABOUT US</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li><a href="loginn.php">LOGIN/SIGN UP</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
        </section>
<div class="contact-section">

  <h1>Contact Us</h1>

<form class="contact-form" method="post">
 
   
 <input type="text" class="contact-form-text" id="name" name="name" placeholder="Your name please..">
       
<input type="email" class="contact-form-text" id="email" name="email" placeholder="Your email">
         
   <input type="text" class="contact-form-text" id="phone" name="phone" placeholder="phone number">

        
    
    <input type="varchar" class="contact-form-text" id="subject" name="subject" placeholder="Your message">
       
    
        
       <td colspan="2" align="center"><input type="submit" class="contact-form-btn" name="save" value="Submit" style="font-size:20px"></td>
      </form>

</div>
        <script>
            var navlinks=document.getElementById("nav-links");
            function showMenu()
            {
                navlinks.style.right = "0";
            }
            function hideMenu()
            {
                navlinks.style.right = "-200px";
            }
        </script>
  </body>
</html>
