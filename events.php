<?php include 'header.php' ?>
<div class="container-fluid px-0" style='background:url(image/main12.png); background-repeat:no-repeat; background-size:cover; color:mediumpurple'> 
<div class="pt-5 pb-5 text-center" style="background:rgba(0,0,0,0.8)">
<h2 class="pt-5 pb-5 " style='font-family:serif'> Recent Activities  </h2>
    
    </div></div>



<div class="container pt-5">
         <div class="row pt-3">
<div class="col-md-9 ">  

  <?php
$result=$conn->query("SELECT * from activity order by activity_date DESC ;");
while($row=$result->fetch_assoc()){
    $aid=$row['activity_id'];
 ?>
     <div class="row pt-3">
<div class="col-md-3  text-center">
    <img src="staff/<?php echo $row['image'];?>" height="200" width="100%">  </div>
   <div class="col-md-9 ">      
        <h4 class="pt-2"> <?php echo $row['activity'];?> </h4>
        <h6 class="pt-2 text-muted"> <i class="icofont-calendar text-success"></i> <?php echo $row['activity_date'];?> </h6>
       
       <p class="pt-2 text-justify"> <?php echo substr( strip_tags($row['description']),0,300);?>... 
       <?php  echo"<a href='fullevent.php?id=$aid' style='color:mediumpurple; text-decoration:none;'>Read More</a>"; ?></p>
         </div></div>
<?php }  ?>
    </div>
    <div class="col-md-3"> <?php include 'sidebar.php' ?></div>
    </div></div>
<?php include 'footer.php' ?>