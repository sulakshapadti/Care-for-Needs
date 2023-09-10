<?php
session_start();
?><html>
<head>
    <title>loginmg</title>
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
}
form{
    background-color:azure;
    width:400px;
    height:600px;
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
            $mid=$_POST['manager'];
            $password=$_POST['password'];
            
            $man_search="select * from ngo where mid='$mid' ";
        
                $query=mysqli_query($con,$man_search);
            $mancount=mysqli_num_rows($query);
            if($mancount){
                $manpass=mysqli_fetch_assoc($query);
                $db_pass=$manpass['password'];
                if($db_pass===$password)
                {
                   ?>
                       <script>location.replace("managerpage.html");</script>
                    <?php
                }else{
                    
                    ?>
                       <script>alert("Password is Incorrect");</script>
                    <?php
                
                }
            }/**/else{
            
                    ?>
                       <script>alert("Invalid Manager ID");</script>
                    <?php
                
                }
            }/**/
            
        
    ?>
    <form method="POST">
        <h1>Manager's Login</h1>
        <div class="textBox">
        <input type="text" placeholder="Manager ID" name="manager" required>
        </div>
        <div class="textBox">
        <input type="password" placeholder="Enter password" name="password">
        </div>
        <input type="submit" value="Login" class="LogBut" name="submit">
        <div class="sign">
         If you are volunteer login here?<br/>
        <a href="loginmg.php">Login</a></div>
        </form></body></html>