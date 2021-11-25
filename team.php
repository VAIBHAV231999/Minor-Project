<?php include 'header.php' ?>

<div class="container-fluid px-0" style='background:url(image/main12.png); background-repeat:no-repeat; background-size:cover; color:mediumpurple'> 
<div class="pt-5 pb-5 text-center" style="background:rgba(0,0,0,0.8)">
<h2 class="pt-5 pb-5 " style='font-family:serif'>Our Team </h2>
    
    </div></div>


<div class="container pt-5">
         <div class="row pt-3">
<div class="col-md-9 ">  

     <div class="row ">
  <?php
$result=$conn->query("SELECT * from members order by full_name DESC ;");
while($row=$result->fetch_assoc()){
    $aid=$row['member_id'];
 ?>
<div class="col-md-6  text-center pt-3">
    <img src="admin/<?php echo $row['image'];?>" class="border p-1 rounded " height="240" width="85%">      
        <h5 class="pt-2"> <?php echo $row['full_name'];?> </h5>
        
       
       <p class="pt-2 text-justify"> <?php echo substr( strip_tags($row['about']),0,200);?>... 
       <?php  echo"<a href='member.php?id=$aid' style='color:mediumpurple; text-decoration:none;'>Know  More</a>"; ?></p>
         </div>
<?php }  ?>
    </div></div>
    <div class="col-md-3"> <?php include 'sidebar.php' ?></div>
             </div></div>
<?php include 'footer.php' ?>