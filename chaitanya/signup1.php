<?php
session_start();
?><html>
<head>
    
<title>Sign up</title>
    <link rel="stylesheet" href="mainstyle.css">
</head>
   
    <body>
    
        <?php
            include 'dbconn.php'; 
        if(isset($_POST['submit'])){
            $name= mysqli_real_escape_string($con,$_POST['name']);
            $email=mysqli_real_escape_string($con,$_POST['email']);
            $city=mysqli_real_escape_string($con,$_POST['city']);
            $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
            $password=mysqli_real_escape_string($con,$_POST['password']);
            $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);
            $field=mysqli_real_escape_string($con,$_POST['mselect']);
            
            /*script for volunteer id generation*/
            $y=date('y');
            $volquery="select * from volunteer";
            $vidquery=mysqli_query($con,$volquery);
            $vol=mysqli_num_rows($vidquery);
            $v=sprintf('%05d',$vol);
            $vid='CTNY20'.$y.$v;
            
            
            $emailquery= "select * from volunteer where email='$email'";
            $query=mysqli_query($con,$emailquery);
            
            $emailcount=mysqli_num_rows($query);
            
            if($emailcount>0){
                 ?>
                   <script>
                       alert("email already exists");   
                   </script>
                 <?php 
                
            }else{
                if($password===$cpassword){
                    $insertquery="insert into volunteer(name,email,city,mobile,password,cpassword,field,vid) values('$name','$email','$city','$mobile','$password','$cpassword','$field','$vid')";
                    
                    $iquery=mysqli_query($con,$insertquery);
                    
                    if($iquery){
                        if($field=='Health'){
                               ?>
                                   <script>
                                     location.replace("healthphp2.php");   
                                  </script>
                                <?php 
                        }  elseif($field=='Educate'){
                               ?>
                                   <script>
                                     location.replace("educationphp.php");   
                                  </script>
                                <?php 
                        }elseif($field=='Women'){
                               ?>
                                   <script>
                                     location.replace("womenempowerment.php");   
                                  </script>
                                <?php 
                            }elseif($field=='Oldage'){
                               ?>
                                   <script>
                                     location.replace("old age home.php");   
                                  </script>
                                <?php 
                        }elseif($field=='Food'){
                               ?>
                                   <script>
                                     location.replace("food.php");   
                                  </script>
                                <?php 
                        }elseif($field=='Deforestation'){
                               ?>
                                   <script>
                                     location.replace("forerstrationphp.php");   
                                  </script>
                                <?php }
                    }else{
                               ?>
                                  <script>
                                        alert("No Connection");   
                                  </script>
                                 <?php 
                            }
                }else{
                   ?><script>
                       alert(" password are not matching");   
                   </script> 
                   <?php
                }
            }
         }
        ?>
        <form method="POST">
        <h1>Sign up</h1>
        <div class="textBox">
        <input type="text" placeholder="Full name" name="name" required>
        </div>
        <div class="textBox">
        <input type="text" placeholder="Email Address" name="email" required>
        </div>
        <div class="textBox">
        <input type="text" placeholder="City" name="city" required>
        </div>
        <div class="textBox">
        <input type="text" placeholder="Mobile Number" name="mobile">
        </div>
        <div class="textBox">
        <input type="password" placeholder="Create password" name="password">
        </div>
        <div class="textBox">
        <input type="password" placeholder="Confirm password" name="cpassword">
        </div>
        <div class="textBox">
        Field of work :<select name="mselect" required>
            <option name="field" value="Health">Health</option>
            <option name="field"value="Deforestation">Deforestation</option>
            <option name="field" value="Women">Women Empowerment</option>
            <option name="field" value="Educate">Education</option>
            <option name="field" value="Oldage">Oldage</option>
            <option name="field" value="Food">Food</option>
            </select></div>     
        <input type="submit" value="Sign Up" class="LogBut" name="submit">
        <div class="sign">Or</div>
        <div class="sign">
            <button class="LogBut"><a href="loginn.php" style="color:darkblue">Login as Volunteer</a></button></div>
            <div class="sign">Or</div>
        <div class="sign">
            <button class="LogBut"><a href="loginmg.php" style="color:darkblue">Login as Manager</a></button>
         </div></form>
     <script>
         
        </script></body>
</html>