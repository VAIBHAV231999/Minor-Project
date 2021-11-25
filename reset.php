<?php  include 'db_c.php';?>
    <?php session_start();  ?>
   <?php  use PHPMailer\PHPMailer\PHPMailer; use PHPMailer\PHPMailer\Exception; ?>

<html>
    <head>
    
    
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/icofont.css" rel="stylesheet" />
  
    </head>
<body>
    
    <div class="container-fluid px-0" style="background:url(bg.jpg);">
        <div class="pt-5 pb-5" style="background:rgba(0,0,0,0.6)">
        
        <div class="container bg-light pt-2 pb-2">
           
            <div class="row">
                <div class="col-md-6 text-center pt-3 pb-3">
                    <img src="bggg.jpg" height="500px" width="85%">
                </div>
                <div class="col-md-5 pt-2 pb-5" >
                         <h6 class="text-right"><a href='index.php' class="text-decoration-none text-secondary"> <i class='icofont-home'></i> Back To Home</a></h6>
                   
        <form action="" method="post">
                    <div class="p-5 text-center">
                        <h4>RESET PASSWORD </h4>
                        <hr/>
                    <input type="text" required class="form-control" name="code" placeholder="Enter OTP" ><br/>
                     <input type="password" name="np" placeholder="Enter new Password" pattern ="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
title="must contain atleast one number and one uppercase and lowercase letter and atleast 8 or more characters" class="form-control">
                
            <br/>
                <input type="password" name="cp" placeholder="Confirm Password" class="form-control"><br/>
                    <button type="submit" class="btn btn-block" style="background:mediumpurple;color:white" name="change">Reset Password</button>
                        
            </div></form>
            
       <?php
if(isset($_POST['change']))
{
if($_POST['np']==$_POST['cp'])
{
if($_POST['code']==$_SESSION['code'])
	{

    $sql="Update members SET password='$_POST[np]' where email='$_GET[id]';";
if($conn->query($sql)===TRUE)
{
echo "<script>window.alert('Password Changed Successfully.Login to your Account');window.location='stafflogin.php';</script>";
}
else
{
echo "Error:-"."$sql".$conn->error;
}
}
else
{
echo "Invalid Code";
}
}
else
echo "Retype password doesnot match";

}
?>
        </div>
        </div>   
            </div></div>
    </div>
    
    
    </body>


<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

</html>