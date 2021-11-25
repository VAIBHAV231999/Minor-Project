<?php include 'header.php' ?>
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;?>

<div class="container-fluid px-0"style='background:url(image/vol.png); background-repeat:no-repeat; background-size:cover; color:mediumpurple' > 
<div class="pt-5 pb-5 text-center" style="background:rgba(0,0,0,0.8)">
<h2 class="pt-5 pb-5 " style='font-family:serif'> Volunteer Program </h2>
    
    </div></div>

<div class="container pt-5 pb-5">
    <div class="row">
        
        <div class="col-md-4">
        <h4>Volunteer Program </h4> <br/>
        <h6>The best way to find yourself is to lose yourself in the service of others.</h6>
            <p >Are you looking for a cause to support?</p> 
           <p class="text-justify"> The volunteer program at PINGALWARA is full of opportunities. We invite people of all backgrounds to participate in the endeavor to create a life of dignity for orphaned and abandoned children in the countries we serve. We open this invitation to people who have the desire to be of service to the PINGALWARA community and who have an open heart and mind.</p>
          <p class="text-justify">  <b>For the volunteers</b>, our program offers a wide range of experiences from unique friendships and life enriching cross-cultural encounters to work experience rarely available in the outside world. The idea of having volunteers here at PINGALWARA is to support our staff members and to give additional attention to our children.</p>
            <img src="image/vol.png" height="300" width="85%">
        </div>
    <div class="col-md-8">
        <h4> Join As Volunteer </h4><sup style="color:green">____________</sup>
        <p>Tell Us about your volunteering interest with Pingalwara. We will get back to you!</p>
        <form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6 pt-3"><input type="text" pattern="[A-Za-z]{2,30}"   class="form-control" name="fn" placeholder="FIRST NAME" required="required"/></div>
        <div class="col-md-6 pt-3"><input type="text"  class="form-control" pattern="[A-Za-z]{2,30}"  name="ln" placeholder="LAST NAME" required="required"/></div>
        
        <div class="col-md-6 pt-3"> <input type="email"   class="form-control" name="em" placeholder="Your Email" required="required"/></div> 
        <div class="col-md-6 pt-3"> <input type="text" pattern="[0-9 -+]{10,15}" title='Invalid Phone No (10 digit Numeric only)'  class="form-control" name="cn" placeholder="Your Contact Number" required="required"/></div>
        
        <div class="col-md-6 pt-3"> <select name="gen" class="form-control" required><option disabled selected >Gender</option><option>MALE</option><option>FEMALE</option><option>TRANSGENDER</option></select></div> 
        <div class="col-md-6 pt-3"> <input type="date"  class="form-control" name="dob"  required="required"/></div>
        
        
        
        <div class="col-md-6 pt-3"> <select name="occ" class="form-control" required>
            <option disabled selected >Occupation</option><option>STUDENT</option><option>UNEMPLOYED</option><option>GOVT EMPLOYEE</option><option>PESONAL BUSSINESS</option><option>PRIVATE JOB</option><option>WORK FROM HOME</option></select></div> 
        <div class="col-md-6 pt-3"> <input type="text"  class="form-control" name="com" placeholder="COMPANY/ORGANIZATION(If any) " /></div>
        <div class="col-md-6 pt-3"><input type="file"  class="form-control"  name="img" ></div>       
        <div class="col-md-6 pt-3"><input  type="text"  class="form-control" name="nat" placeholder="NATIONALITY" /></div>
        
        <div class="col-md-12 pt-3"><input type="address"  class="form-control"  class="form-control" name="add" placeholder="Address Line" required /></div>       
        <div class="col-md-6 pt-3"><input  type="text" pattern="[A-Za-z]{2,30}"  required  class="form-control" name="city" placeholder="CITY" /></div>
        <div class="col-md-6 pt-3"><input type="pin"   required  class="form-control" name="pin" placeholder="PIN CODE" /></div>
        <div class="col-md-12 pt-3"> <select  name="time" class="form-control" required>
            <option disabled selected >Select Your TimeSlot For Volunteering</option>
            <option>Full Time</option><option>Weekends(Saturday/Sunday)</option><option>2 Hours a day</option><option>2 Days in Week</option></select></div> 
      <div class="col-md-12 pt-3"> <textarea name="res" rows="4"class="form-control"> WHY YOU WANT TO JOIN??</textarea>  </div> 
        
      <div class="col-md-12 pt-3"> <textarea rows="4" name="msg" class="form-control"> TELL ABOUT YOURSELF</textarea>  </div> 
        <div class="col-md-4 pt-4">
        <button type="submit" name="save" class="btn btn-outline-success btn-block rounded-0 "> SUBMIT </button> </div>
        <div class="col-md-4 pt-4"> <button type="reset" name="save" class="btn btn-outline-success btn-block rounded-0 "> CLEAR </button>
       
        </div>
    </div>
        </form>
         <?php
    if(isset($_POST['save'])) 
   {
        $dirname="uploadimg/";
      $tmpname=$_FILES['img'] ['tmp_name'];  
      $filename=$dirname.$_FILES['img']['name'];
        
      $ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
      if($ext=="jpeg" or $ext="jpg" or $ext=="png")
      {
       if(move_uploaded_file($tmpname,$filename))
       {
           
        $sql="insert into volunteer (first_name,last_name,email,contact,address,city,pin,reason,about,gender,occupation,company,dob,timeslot,nationality,img) values('$_POST[fn]','$_POST[ln]','$_POST[em]','$_POST[cn]','$_POST[add]','$_POST[city]','$_POST[pin]','$_POST[res]','$_POST[msg]','$_POST[gen]','$_POST[occ]','$_POST[com]','$_POST[dob]','$_POST[time]','$_POST[nat]','$filename');";
        if($conn->query($sql))
            {
            
               $email='vaibhav.budhiraja23@gmail.com';
$password='Budhiraja@23';
$to_id=$_POST['em'];
$to_name=$_POST['fn'];
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
            
            
        }
        else
            echo"<div class='alert alert-warning'> ERROR IN QUERY ".$conn->error." </div>";
   }
        else
        {
            echo"<div class='alert alert-warning'> ERROR IN UPLOADING</div>";
        }
      }
      else
      {
          echo"<div class='alert alert-warning'> ONLY JPG,PNG,JPEG FILES ARE ALLOWED</div>";
      }
    }
      
     
    
    ?>
      
   
    
    </div></div>
</div>
<?php include 'footer.php' ?>