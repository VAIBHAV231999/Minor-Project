<?php include 'header.php' ?>
<div class="container-fluid px-0" style='background:url(image/main12.png); background-repeat:no-repeat; background-size:cover; color:mediumpurple'> 
<div class="pt-5 pb-5 text-center" style="background:rgba(0,0,0,0.8)">
<h2 class="pt-5 pb-5 " style='font-family:serif'>Video Gallery </h2>
    
    </div></div>


<div class="container pt-5">
        <div class="row">

  <?php
    if(isset($_GET['tag']))
    $result=$conn->query("SELECT * from video_gallery where tag='$_GET[tag]' ;");
else
    
$result=$conn->query("SELECT * from video_gallery ;");
while($row=$result->fetch_assoc()){
 ?>
<div class="col-md-4 pt-3 text-center">



<iframe width="100%" height="300" src="<?php echo $row['video'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
        <h5 class="pt-2"> <?php echo $row['title'];?> </h5>
    </div>
<?php }  ?>
    </div>
</div>
<?php include 'footer.php' ?>