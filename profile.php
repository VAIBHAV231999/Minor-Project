
<?php include 'header.php'; ?> 
<script src="../editor/ckeditor.js"></script>
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">Profile</h4>
                            <p class="card-category">Profile of Login Member.</p>
                        </div>
                        
                        <div class="card-body">
                            <?php
$result=$conn->query("SELECT * from members where member_id='$_SESSION[mm]';");
$row=$result->fetch_assoc();
 ?>

<div class="container pt-5">

    

        <div class="row">
    <div class="col-md-4">
        <img src="../admin/<?php echo $row['image'];?>" height="300" width="95%">
        <h5 class="mt-3 "> <?php echo $row['full_name'];?> </h5>
        <p class="mt-3 text-justify"><i class='icofont-email'style='color:mediumpurple' > </i><?php echo $row['email'];?> </p>
        <p class="mt-3 text-justify"><i class='icofont-phone'style='color:mediumpurple' > </i> <?php echo $row['contact'];?> </p>
            </div> 
            
<div class="col-md-8 text-justify">   

    <?php echo $row['about'];?>  </div> </div>
       
                        </div></div>
                           
                        </div>
                    </div>
                </div>
    </div></div>
    
<?php include 'footer.php';?>