<?php include 'header.php' ?>
  <?php
$result=$conn->query("SELECT * from article where a_id='$_GET[id]';");
$row=$result->fetch_assoc();
 ?>

<div class="container pt-5">

    <h4> <?php echo $row['article'];?> </h4>

    <div class="row">
<div class="col-md-9 text-justify">   <h6 class="pt-2 text-muted"> <i class="icofont-calendar text-success"></i> <?php echo $row['posted_on'];?> </h6> 
    <div class="p-3">
        <img src="staff/<?php echo $row['image'];?>" height="300" width="85%">
    </div>
    <?php echo $row['description'];?>  </div>
       <div class="col-md-3"> <?php include 'sidebar.php' ?></div> 
    </div>
</div>
<?php include 'footer.php' ?>