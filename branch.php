<?php include 'header.php' ?>
  <?php
$result=$conn->query("SELECT * from branches where branch_id='$_GET[bid]';");
$row=$result->fetch_assoc();
 ?>


<div class="container-fluid px-0"style='background:url(image/manawala_branch.png); background-repeat:no-repeat; background-size:cover; color:mediumpurple' > 
<div class="pt-5 pb-5 text-center" style="background:rgba(0,0,0,0.7)"> <br/>
<h2 class="pt-5 pb-5 " style='font-family:serif'> <?php echo $row['branch'];?> </h2>
    <br/>
    </div></div>

  <?php
$result=$conn->query("SELECT * from branches where branch_id='$_GET[bid]';");
$row=$result->fetch_assoc();
 ?>

<div class="container pt-5">

    <div class="row">
<div class="col-md-9 text-justify"> 
    
    <h4> <?php echo $row['branch'];?> </h4>
    <br/>
    <?php echo $row['overview'];?>
        
<div class="row">
    <?php
    $sql="SELECT * from gallery where post_id='$_GET[bid]' and post_type='branch' order by title ASC;";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()) {   ?>
            
<div class="col-md-3">
        <img src="admin/<?php echo $row['image']; ?>" width='95%' height='180px'>
           <p> <?php echo $row['title']; ?></p>
</div>     
    <?php    }     ?>         
        
    </div></div>
 <div class="col-md-3"> <?php include 'sidebar.php' ?></div>
    </div></div>
<?php include 'footer.php' ?>