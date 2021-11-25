<?php include 'header.php' ?>
  <?php
$result=$conn->query("SELECT * from page where page_id='$_GET[pid]';");
$row=$result->fetch_assoc();
 ?>

<div class="container-fluid px-0" style='background:url(image/main12.png); background-repeat:no-repeat; background-size:cover; color:mediumpurple'> 
<div class="pt-5 pb-5 text-center" style="background:rgba(0,0,0,0.8)">
<h2 class="pt-5 pb-5 " style='font-family:serif'> <?php echo $row['page_title'];?> </h2>
    
    </div></div>

<div class="container pt-5">

    <div class="row">
<div class="col-md-9 text-justify">
    
    <h4> <?php echo $row['page_title'];?> </h4>
    <br/>
    <?php echo $row['content1'];?> 
    <div class="p-3">
        <img src="admin/<?php echo $row['featured_image'];?>" height="350" width="85%">
    </div>
    <?php echo $row['content2'];?>  </div>
       <div class="col-md-3"> <?php include 'sidebar.php' ?></div> 
    </div>
</div>
<?php include 'footer.php' ?>