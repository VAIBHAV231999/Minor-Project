<?php  include 'db_c.php';?>
    <?php session_start();  ?>
<html>
    <head>
    
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/icofont.css" rel="stylesheet" />
  
    </head>
<body>
    
    <div class="container-fluid px-0" style="background:url(bg.jpg);">
        <div class="pt-5 pb-5" style="background:rgba(0,0,0,0.6)">
        
        <form action="" method="post">
        <div class="container bg-light pt-2 pb-2">
           
                         <h6 class="text-right"><a href='index.php' class="text-decoration-none text-secondary"> <i class='icofont-home'></i> Back To Home</a></h6>
            <div class="row">
                <div class="col-md-6 text-center pt-3 pb-3">
                    <img src="bggg.jpg" height="500px" width="85%">
                </div>
                <div class="col-md-5 pt-5 pb-5" >
                    <div class="p-5 text-center">
                        <h4>WELCOME BACK </h4>
                        <p> Admin Login </p>
                        <hr/>
                    <input type="text" required class="form-control" name="uname" placeholder="USERNAME" ><br/>
                    <input type="password" required class="form-control" name="pwd" placeholder="Password"><br/>
                    <button type="submit" class="btn btn-block" name="login" style="background:mediumpurple;color:white">LOGIN</button>
                        <br/>
                </div>
            </div>   
            </div></div></form>
            <?php
if(isset($_POST['login']))
{
$encpass=md5($_POST['pwd']);
$sql="select * from admin where username='$_POST[uname]'AND password='$encpass'";
$result=$conn->query($sql);

if($result->num_rows>0){
$row=$result->fetch_assoc();
  $_SESSION['ad']=$row['username'];
  echo "<script> window.location='admin/dashboard.php';</script>";
}else{
  echo"<br/><div class='alert alert-info'>Invalid Username or Password</div>";
}

}
?>
         </div>
        
    </div>
    
    
    </body>


<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

</html>