
<?php include 'header.php'; ?>
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;?>
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">VOLUNTEERING ENQUIRY</h4>
                            <p class="card-category">Volunteer Requests </p>
                        </div>
                        <div class="card-body">
                    <table class="table">

    <?php
        $sql="SELECT * from volunteer where volunteer_id='$_GET[id]';";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
            $em=$row['email'];
            $nm=$row['first_name']." ".$row['last_name'];            
            ;?>
          
          
<tr>  <th> Full Name </th><th> <?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></th>
<th colspan='2' rowspan='4' class="text-center"> <img src='../<?php echo $row['img'] ?>' width='200px' height='200px'></th> </tr>  
           
 
<tr> <th> Req Date </th><th> <?php echo $row['reqdate'] ?></th> </tr> 
<tr> <th> Email </th><th> <?php echo $row['email'] ?></th> </tr>
<tr><th> Contact </th><th> <?php echo $row['contact'] ?></th></tr> 
                        
                        
<tr> <th> Address </th><th colspan='3'> <?php echo $row['address'] ?>, <?php echo $row['city'] ?>, <?php echo $row['pin'] ?></th> </tr>    

                        
                        
<tr> <th> Gender </th><th> <?php echo $row['gender'] ?></th>
<th> Dob </th><th> <?php echo $row['dob'] ?></th> </tr>

<tr> <th> Nationality </th><th> <?php echo $row['nationality'] ?></th>
<th> Timeslot </th><th> <?php echo $row['timeslot'] ?></th> </tr>
                        
<tr> <th> Occ </th><th> <?php echo $row['occupation'] ?></th>
<th> Comp </th><th> <?php echo $row['company'] ?></th> </tr>

<tr> <th> Reason </th><th colspan='3'> <?php echo $row['reason'] ?></th> </tr> 

<tr> <th> About </th><th colspan='3'> <?php echo $row['about'] ?></th> </tr> </table>
            
     <form action="" method="post">
    <label>Type Your Reply Here.</label>                        
     <textarea class="form-control" name="txt" required></textarea>
    <button type="submit" class="btn btn-success" name="save">Submit</button>
    </form>                       
           
        <?php
    if(isset($_POST['save'])) 
   {
        $txt=addslashes($_POST['txt']);
        $sql="update volunteer set reply='$txt'  where volunteer_id='$_GET[id]' ;";
        if($conn->query($sql)){
     
$email = '4collegeproject@gmail.com';
$password = 'project@2020';
$to_id=$em;
$to_name=$nm;
$subject='Response to your Volunteer request.';
$message=$txt."<br/><h5>Regards </h5> <h5> All India Pingalwara Chatritable Society. </h5>";
                
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';         
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
    echo"<script>window.alert('DATA SAVED SUCCESSFULLY'); window.location='ourvolunteer.php'; </script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
   
        }
        else
            echo"<div class='alert alert-warning'> ERROR IN QUERY ".$conn->error." </div>";
   }
        
      
     
    
    ?>         
                            
                        </div>
                    </div>
                </div>
                                </div>
        </div>
    </div>
<?php include 'footer.php';?>