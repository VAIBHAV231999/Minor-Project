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
                        <h4>FORGET PASSWORD </h4>
                        <p>Can't Sign In ?Forget your Password?</p>
                        <hr/>
                    <input type="email" required class="form-control" name="em" placeholder="E-mail" ><br/>
                    
                    <button type="submit" class="btn btn-block" style="background:mediumpurple;color:white" name="login">Get Password Link</button>
                        
            </div></form>
            
       <?php
if(isset($_POST['login']))
{

$sql="select * FROM members WHERE email='$_POST[em]';";
$result=$conn->query($sql);
  if($result->num_rows>0)
{
    $row=$result->fetch_assoc();
    $code=rand(1000,9999);
    $_SESSION['code']=$code;
    $em=$_POST['em'];

$email = '4collegeproject@gmail.com';
$password = 'project@2020';

$to_id= $_POST['em'];
$subject='Password Recovery';
$message="Your Verification code is ".$code.".Please use this code to recover your password.Click on the following link:<br/><a href='http://localhost/Pingalwara/reset.php?id=".$em."'>Click Here</a><br/><br/><h5>Regards</h5><h5>Pingalwara</h5>";
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';         
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();   
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = $email;                   
    $mail->Password   = $password;                     
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
    $mail->Port       = 587;                                   
    $mail->setFrom($email);
    $mail->addAddress($to_id);
    $mail->addReplyTo($email,'Information');
    $mail->isHTML(true); 
    $mail->Subject = $subject;
    $mail->Body    = $message;   
    $mail->send();
   
echo "<div class='alert alert-success m-4' style='padding:2px;'><h3>Password Reset Request Sent</h3>

<p>A password reset message was sent to your email address.Please click the link in that message to reset your password.<br/>
If you do not recieve the password reset message within a few moments,please check your spam folder or other filtering tools.<br/></p></div>";

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
} 
}
else
{ 
echo"<br/><div class='alert alert-info'>Invalid Username or Email Address</div>";
}

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