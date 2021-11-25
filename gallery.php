<?php include 'header.php' ?>

<div class="container-fluid px-0" style='background:url(image/main12.png); background-repeat:no-repeat; background-size:cover; color:mediumpurple'> 
<div class="pt-5 pb-5 text-center" style="background:rgba(0,0,0,0.8)">
<h2 class="pt-5 pb-5 " style='font-family:serif'>Image Gallery </h2>
    
    </div></div>


<div class="container pt-5  pb-5">
        <div class="row">

  <?php
    if(isset($_GET['tag']))
    $result=$conn->query("SELECT * from image_gallery where tag='$_GET[tag]' ;");
else
    
$result=$conn->query("SELECT * from image_gallery ;");
while($row=$result->fetch_assoc()){
 ?>
 
<div class="col-md-3 pt-3 text-center">



<img src="staff/<?php echo $row['image'];?>" height="250" width="100%">
      
    </div>
<?php }  ?>
    </div>
</div>
<?php include 'footer.php' ?>