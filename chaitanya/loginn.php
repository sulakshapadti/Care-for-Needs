<?php
session_start();
?><html>
<head>
    <title>loginn</title>
    </head>
    <style type="text/css">
    *{
    font-family: sans-serif;
    margin :0;
    padding :0;
    text-decoration: none;
    box-sizing: border-box;
}
body{
    min-height: 100vh;
    background-image: url("images/sbg.jpg");
    width:400px;
    height:500px;
    background-repeat: no-repeat;
    background-size: cover; 
}
form{
    background-color:azure;
    width:400px;
    height:605px;
    padding:65px 45px;
    position :absolute;
    left:50%;
    top:50%;
    transform:translate(-50%,-50%);
}
h1{
    text-align: center;
    margin-bottom: 35px;
    margin-top:20 px;
    color:darkblue;
    font-size: 38px;
}
.textBox{
    border-bottom: 2px solid darkgrey;
    position:relative;
    margin:35px 0;
}
.textBox input{
    background: none;
    border:none;
    border:none;
    outline:none;
    width:100%;
    color:darkblue;
    height:30px;
    font-size: 16px;
}

.LogBut{
    height:42px;
    width:100%;
    border:none;
    outline:none;
    background-color: burlywood;
    background-size: 200%;
    color:darkblue;
    font-size:15px;}
.sign{
    color:darkblue;
    margin-top: 35px;
    text-align: center;
}
.sign a{
    color:darkorchid;
}

</style>
<body>
    <?php
     include 'dbconn.php'; 
        if(isset($_POST['submit'])){
            $vid=$_POST['volunteer'];
            $password=$_POST['password'];
            
            $vol_search="select * from volunteer where vid='$vid' ";
        
                $query=mysqli_query($con,$vol_search);
            $volcount=mysqli_num_rows($query);
            if($volcount){
                $volpass=mysqli_fetch_assoc($query);
                $db_pass=$volpass['password'];
                $db_field=$volpass['field'];
                if($db_pass===$password)
                {
                   if($db_field=='Health'){
                               ?>
                                   <script>
                                     location.replace("healthphp2.php");   
                                  </script>
                                <?php 
                        } elseif($db_field=='Education'){
                               ?>
                                   <script>
                                     location.replace("educationphp.php");   
                                  </script>
                                <?php 
                        } else if($db_field=='Food'){
                               ?>
                                   <script>
                                     location.replace("food.php");   
                                  </script>
                                <?php 
                        } else if($db_field=='Old age'){
                               ?>
                                   <script>
                                     location.replace("old age home.php");   
                                  </script>
                                <?php 
                        }else if($db_field=='Deforestation'){
                               ?>
                                   <script>
                                    location.replace("forestrationphp.php"); 
                                  </script>
                                <?php 
                        }  
                    else if($db_field=='Women'){
                               ?>
                                   <script>
                                    location.replace("womenempowerment.php"); 
                                  </script>
                                <?php 
                        }  
                }else{
                    
                    ?>
                       <script>alert("Password is Incorrect");</script>
                    <?php
                
                }
            }/**/else{
            
                    ?>
                       <script>alert("Invalid Volunteer ID");</script>
                    <?php
                
                }
            }/**/
            
        
    ?>
    <form method="POST">
        <h1>Login</h1>
        <div class="textBox">
        <input type="text" placeholder="Volunteer ID" name="volunteer" required>
        </div>
        <div class="textBox">
        <input type="password" placeholder="Enter password" name="password">
        </div>
        <input type="submit" value="Login" class="LogBut" name="submit">
        <div class="sign">
         Don't have an account ?<br/>
        <a href="signup1.php">Sign up here</a></div><br/>
        <div class="sign">
         If you are a manager login here?<br/>
        <a href="loginmg.php">Login</a></div>
        </form></body></html>