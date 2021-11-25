<?php include 'header.php' ?>
  <?php
$result=$conn->query("SELECT * from activity where activity_id='$_GET[id]';");
$row=$result->fetch_assoc();
 ?>

<div class="container pt-5">

    <h4> <?php echo $row['activity'];?> </h4>

    <div class="row">
<div class="col-md-9 text-justify">   <h6 class="pt-2 text-muted"> <i class="icofont-calendar text-success"></i> Event Date <?php echo $row['activity_date'];?> Posted Date <?php echo $row['posted_on'];?> </h6> 
    <div class="p-3">
        <img src="staff/<?php echo $row['image'];?>" height="450" width="85%">
    </div>
    <?php echo $row['description'];?>  
        

<div class="row">
    <?php
    $sql="SELECT * from gallery where post_id='$_GET[id]' and post_type='event' order by title ASC;";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()) {   ?>
            
<div class="col-md-3">
        <img src="staff/<?php echo $row['image']; ?>" width='95%' height='180px'>
           <p> <?php echo $row['title']; ?></p>
</div>     
    <?php    }     ?> 
        
        
    </div></div>
       <div class="col-md-3"> <?php include 'sidebar.php' ?></div> 
    </div>
</div>
<?php include 'footer.php' ?>