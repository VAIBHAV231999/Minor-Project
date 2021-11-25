
<?php include 'header.php' ?>
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;?>

<div class="container-fluid px-0" style='background:url(image/main12.png); background-repeat:no-repeat; background-size:cover; color:mediumpurple'> 
<div class="pt-5 pb-5 text-center" style="background:rgba(0,0,0,0.8)">
<h2 class="pt-5 pb-5 " style='font-family:serif'>Contact Us </h2>
    
    </div></div>


<div class="container-fluid pt-5"> 
<div class="row text-center pt-3 pb-5">
    <div class="col-md-4">
    <i class="icofont-home icofont-2x"style="color:mediumpurple; border:thin solid mediumpurple; padding:10px 12px; border-radius:50% ">
        </i>
        <p class="pt-4">All India Pingalwara Charitable Society,<br/>
           G T Road, Amritsar – 143001 Punjab,India</p>  
    
    
    </div>   
    <div class="col-md-4">
        <i class="icofont-phone icofont-2x" style="color:mediumpurple; border:thin solid mediumpurple; padding:10px 12px; border-radius:50%"></i>
        <i class="ion-ios-location-outline"></i>
        <p class="pt-4"> +91-183-2584713, <br/> +91-183-2584586</p>
        
    </div>
    
    <div class="col-md-4">
        <i class="icofont-email icofont-2x" style="color:mediumpurple; border:thin solid mediumpurple; padding:10px 12px; border-radius:50%"></i>
        <p class="pt-4">pingalwara57@gmail.com </p>
    </div>

    </div>
    <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          
            </div>

<div class="container pb-5">
    <div class="row">
    <div class="col-md-8">
        <h4> Get In Touch </h4><sup style="color:green">____________</sup>

        <form action="" method="post">
    <div class="row">
        <div class="col-md-6 pt-3"><input type="text"  pattern="[A-Za-z]{2,30}"  class="form-control" name="nm" placeholder="FULL NAME" required="required"/></div>
        <div class="col-md-6 pt-3"> <input type="email"  class="form-control" name="em" placeholder="Your Email" required="required"/></div> 
        <div class="col-md-12 pt-3"><input type="text" name="sub" class="form-control" placeholder="Subject Line" required /></div>
        <div class="col-md-12 pt-3"><input type="address"  required class="form-control"  class="form-control" name="add" placeholder="Address Line" /></div>       
        <div class="col-md-6 pt-3"><input  type="text"  class="form-control" pattern="[A-Za-z]{2,30}"  required name="city" placeholder="CITY" /></div>
        <div class="col-md-6 pt-3"><input type="text"  required pattern="[A-Za-z]{2,30}"  class="form-control" name="state" placeholder="STATE" /></div>
      <div class="col-md-12 pt-3"> <textarea name="msg"  class="form-control" required> MESSAGE</textarea>  </div> 
        <div class="col-md-4 pt-4">
        <button type="submit" name="save" class="btn btn-outline-success btn-block rounded-0 "> SUBMIT </button>
        </div>
    </div>
        </form>
        
        
        
        <?php
    if(isset($_POST['save'])) 
   {
        $sql="insert into contact_us (full_name,your_mail,subject_line,address_line,city,state,message)
      values('$_POST[nm]','$_POST[em]','$_POST[sub]','$_POST[add]','$_POST[city]','$_POST[state]','$_POST[msg]');";
        if($conn->query($sql))
        {
$email='itzaditisharma@gmail.com';
$password='satshriakal';
$to_id=$_POST['em'];
$to_name=$_POST['nm'];
$subject='Thanks for your Interest';
$message='<h5>Dear '.$to_name.'</h5><p> Thanks for your Message, We try to respond to your message within 48 Woking Hours </p><br><h5> Regards </h5><h5> Pingalwara Team.</h5>';
                
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';         
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();   
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = $email;                   
    $mail->Password   = $password;                     
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
    $mail->Port       = 587;                                   
    $mail->setFrom($email,'Pingalwara Trust');
    $mail->addAddress($to_id,$to_name);
    $mail->addReplyTo($email,'Information');
    $mail->isHTML(true); 
    $mail->Subject = $subject;
    $mail->Body    = $message;   
    $mail->send();
    echo"<div class='alert alert-success'> Message has been sent </div>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}    
            
            
        }    else
            echo"<div class='alert alert-warning'> ERROR IN QUERY ".$conn->error." </div>";
   }
        
      
     
    
    ?>
      
      
        
    </div>
    <div class="col-md-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3397.157391220455!2d74.88477821449563!3d31.629540748909264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391964aa569e7355%3A0x33a7123a72fa9bde!2sAll%20India%20Pingalwara%20Charitable%20Society!5e0!3m2!1sen!2sin!4v1582446578047!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    
    </div>
    
    </div></div>
</div>
<?php include 'footer.php' ?>