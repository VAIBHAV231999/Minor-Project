<?php include 'header.php' ?>
  <?php
$result=$conn->query("SELECT * from members where member_id='$_GET[id]';");
$row=$result->fetch_assoc();
 ?>

<div class="container pt-5">

    

    <div class="row">
<div class="col-md-9 text-center">  
        <div class="row">
    <div class="col-md-4">
        <img src="admin/<?php echo $row['image'];?>" height="300" width="95%">
        <h5 class="mt-3 "> <?php echo $row['full_name'];?> </h5>
        <p class="mt-3 text-justify"><i class='icofont-email'style='color:mediumpurple' > </i><?php echo $row['email'];?> </p>
        <p class="mt-3 text-justify"><i class='icofont-phone'style='color:mediumpurple' > </i> <?php echo $row['contact'];?> </p>
            </div> 
            
<div class="col-md-8 text-justify">   

    <?php echo $row['about'];?>  </div> </div></div>
       <div class="col-md-3"> <?php include 'sidebar.php' ?></div> 
    </div>
</div>
<?php include 'footer.php' ?>