
<?php include 'header.php'; ?> 
<script src="../editor/ckeditor.js"></script>
<div class="content">
        <div class="container-fluid">
            <?php
$sql="select * FROM members WHERE member_id='$_SESSION[mm]'";
  $result=$conn->query($sql);
  $row=$result->fetch_assoc();

            $pw=$row['password'];

?>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">Change Password</h4>
                            <p class="card-category">Enter your current password,new password. You'll need to enter the new password twice in order be certain that you've entered it correctly.</p>
                        </div>
                        
                        <div class="card-body">
                            
        <form action="" method="post">
       <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-5"> 
            <br/>
                <label> Current Password </label>
                <input type="password" name="pwd" class="form-control">
                <label>New Password</label>
                
                <input type="password" name="npwd" pattern ="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
title="must contain atleast one number and one uppercase and lowercase letter and atleast 8 or more characters" class="form-control">
                
               <label>Confirm New Password</label> 
                <input type="password" name="cpwd" class="form-control"><br/>
            <button type="submit" class="btn btn-success" name="change" >CHANGE PASSWORD</button>
            
            </div>
            <div class="col-md-3 pt-5" > <br/>
                <p class="text-muted pt-5"><small>
                * Your password must include one alphabetic and one numeric character.
                    </small></p> </div>
           </div>   </div>
        </form>
                            <?php
if(isset($_POST['change']))
{

if($pw==$_POST['pwd'])
{
if($_POST['npwd']==$_POST['cpwd'])
{

$sql="update members set password='$_POST[npwd]' where member_id='$_SESSION[mm]'";
if($conn->query($sql)===TRUE)
echo "<div class='alert alert-info' style='padd
ing:2px;'> Password Changed Successfully!!</div>";
else
echo "Error:".$sql."<br>".$conn->error;
}
else{
echo "<div class='alert alert-info' style='padd
ing:2px;'>Retype Password Not matched.</div>";
}
}
else{
echo "<div class='alert alert-info' style='padd
ing:2px;'> Existing Password not matched.</div>";
}
}
?>
                        </div></div>
                           
                        </div>
                    </div>
                </div>
                                </div>
    
<?php include 'footer.php';?>