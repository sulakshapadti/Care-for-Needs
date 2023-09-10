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
            $email=$_POST['email'];
            $password=$_POST['password'];
            
            $em_search="select * from volunteer where email='$email' ";
        
                $query=mysqli_query($con,$em_search);
            $emcount=mysqli_num_rows($query);
            if($emcount){
                $volpass=mysqli_fetch_assoc($query);
                $db_pass=$volpass['password'];
                $db_vid=$volpass['vid'];
                if($db_pass===$password)
                {
                   ?>
    <script>alert("Your ID is <?php echo $db_vid; ?>");</script>
    <?php
            }/**/else{
            
                    ?>
                       <script>alert("Incorrect Password");</script>
                    <?php
                
                }
            }/**/else
            {
                
                    ?>
                       <script>alert("Invalid Email");</script>
                    <?php
            }
            
        }
    ?>
    <form method="POST">
        <h1>Know your ID</h1>
        <div class="textBox">
        <input type="text" placeholder="Email Address" name="email" required>
        </div>
        <div class="textBox">
        <input type="password" placeholder="Enter password" name="password">
        </div>
        <input type="submit" value="Know your ID" class="LogBut" name="submit">
        </form></body></html>