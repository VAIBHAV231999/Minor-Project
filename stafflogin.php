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
        
        <div class="container bg-light pt-2 pb-2">
           
            <div class="row">
                <div class="col-md-6 text-center pt-3 pb-3">
                    <img src="bggg.jpg" height="500px" width="85%">
                </div>
                <div class="col-md-5 pt-2 pb-5" >
                         <h6 class="text-right"><a href='index.php' class="text-decoration-none text-secondary"> <i class='icofont-home'></i> Back To Home</a></h6>
                   
        <form action="" method="post">
                    <div class="p-5 text-center">
                        <h4>WELCOME BACK </h4>
                        <p>Login to your Account</p>
                        <hr/>
                    <input type="email" required class="form-control" name="em" placeholder="E-mail" ><br/>
                    <input type="password" required class="form-control" name="pwd" placeholder="Password"><br/>
                    <button type="submit" class="btn btn-block" style="background:mediumpurple;color:white" name="login">LOGIN</button>
                        <br/><p class="text-right"> <a href="forget.php"> Forget Password ? </a></p>
            </div></form>
            
       <?php
if(isset($_POST['login']))
{

$sql="select * from members where email='$_POST[em]' AND password='$_POST[pwd]'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	$row=$result->fetch_assoc();
	$_SESSION['mm']=$row['member_id'];
	$_SESSION['em']=$row['email'];
	
	echo"<script> window.location='staff/article.php';</script>";
}
	else
	{
		echo"<div class='alert alert-warning'>Invalid email or password.</div>";
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