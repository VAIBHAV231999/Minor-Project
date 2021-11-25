<?php include 'header.php' ?>
  <?php
$result=$conn->query("SELECT * from school where school_id='$_GET[sid]';");
$row=$result->fetch_assoc();
$sid=$_GET['sid'];

 ?>
<div class="container-fluid px-0"style='background:url(image/sc7.jpg); background-repeat:no-repeat; background-size:cover; color:mediumpurple' > 
<div class="pt-5 pb-5 text-center" style="background:rgba(0,0,0,0.8)">
<h2 class="pt-5 pb-5 " style='font-family:serif'> <?php echo $row['school_name'];?> </h2>
    
    </div></div>

<div class="container pt-5">

    <div class="row">
<div class="col-md-9  text-justify">
    
    <?php  if($_GET['sid']==5 or $_GET['sid']==4){ ?>
   
    <div class="row">
<div class="col-md-7">  <h4> <?php echo $row['school_name'];?> </h4></div> 

        <div class="col-md-5">  <?php echo "<a href='admission.php?sid=$sid' class='btn btn-sm btn-success'> Apply Now </a>";?> </div> </div>
    <?php } else if($_GET['sid']==2){ ?>
   
    <div class="row">
<div class="col-md-7">  <h4> <?php echo $row['school_name'];?> </h4></div> 

        <div class="col-md-5">  <a href='test1.php' class="btn btn-sm btn-success"> Mental Ability Test </a> </div> </div>
    <?php } else  { ?>
 
    <h4> <?php echo $row['school_name'];?> </h4>
    <?php }  ?>
    <br/>
    <p> <i class="icofont-phone" style="color:mediumpurple"></i>  <?php echo $row['phone'];?> &nbsp;&nbsp; 
        <i class="icofont-mail" style="color:mediumpurple"></i>  <?php echo $row['email'];?> </p>
    <div class="p-3">
        <img src="admin/<?php echo $row['image'];?>" height="300" width="85%">  </div>
<?php echo $row['about'];?>
    
    <div class="row">
    <?php
    $sql="SELECT * from gallery where post_id='$_GET[sid]' and post_type='school' order by title ASC;";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()) {   ?>
            
<div class="col-md-3">
        <img src="admin/<?php echo $row['image']; ?>" width='95%' height='180px'>
           <p> <?php echo $row['title']; ?></p>
</div>     
    <?php    }     ?> 
    
    </div></div>
<div class="col-md-3"> <?php include 'sidebar.php' ?></div>
       
    </div>
</div>
<?php include 'footer.php' ?>