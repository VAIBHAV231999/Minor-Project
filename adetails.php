
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
                            <h4 class="card-title">ADMISSION ENQUIRY</h4>
                            <p class="card-category">Admission Requests </p>
                        </div>
                        <div class="card-body">
                    <table class="table">

    <?php
        $sql="SELECT * from admission where formid='$_GET[id]';";
        $result=$conn->query($sql);
                        
        $row=$result->fetch_assoc(); 
            $em=$row['email'];
            $nm=$row['first_name']." ".$row['last_name']; 
            ?>
          
          
<tr> <th> Class Name </th><th> <?php echo $row['class_name'] ?></th>
<th colspan='2' rowspan='4' class="text-center"> <img src='../<?php echo $row['img'] ?>' width='200px' height='200px'></th> </tr>  
           
  
<tr> <th> Full Name </th><th> <?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></th> </tr>
<tr> <th> Mother Name </th><th> <?php echo $row['mother_name'] ?></th> </tr>
<tr> <th> Father Name </th><th> <?php echo $row['father_name'] ?></th> </tr>          

<tr> <th> Gender </th><th> <?php echo $row['gender'] ?></th>
<th> Dob </th><th> <?php echo $row['dob'] ?></th> </tr>

<tr> <th> Address </th><th colspan='3'> <?php echo $row['address_line'] ?>, <?php echo $row['city'] ?>, <?php echo $row['pin'] ?></th> </tr>    

<tr> <th> Email </th><th> <?php echo $row['email'] ?></th>
<th> Contact </th><th> <?php echo $row['contact_number'] ?></th> </tr>
    <tr> <th> Aadhar Number </th><th> <?php echo $row['aadhar_num'] ?></th>
<th> Religion/Cast </th><th> <?php echo $row['religion'] ?>/ <?php echo $row['cast'] ?></th> </tr>


<tr> <th> Father Occupation </th><th> <?php echo $row['father_occ'] ?></th>
<th> Salary </th><th> <?php echo $row['salary'] ?></th> </tr>

<tr> <th> School name </th><th colspan='3'> <?php echo $row['school_name'] ?></th> </tr>         </table>
            
          <form action="" method="post">
    <label>Type Your Reply Here.</label>                        
     <textarea class="form-control" name="txt" required></textarea>
    <button type="submit" class="btn btn-success" name="save">Submit</button>
    </form>                       
           
        <?php
    if(isset($_POST['save'])) 
   {
        $txt=addslashes($_POST['txt']);
        $sql="update admission set reply='$txt'  where formid='$_GET[id]' ;";
        if($conn->query($sql)){
     
$email = '4collegeproject@gmail.com';
$password = 'project@2020';
$to_id=$em;
$to_name=$nm;
$subject='Response to your Admission request.';
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
    echo"<script>window.alert('DATA SAVED SUCCESSFULLY'); window.location='ouradmission.php'; </script>";
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