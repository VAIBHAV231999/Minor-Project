<?php include 'header.php'; ?> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">IMAGE GALLERY</h4>
                            <p class="card-category">Images of Pingalwara</p>
                        </div>
                        <div class="card-body">
                         <table class="table table-hover">
       
    <?php
        echo"<tr>";
        $i=0;
        $sql="SELECT * from image_gallery order by title ASC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   $i++;
            $cid=$row['image_id'];
            
           echo"<td class='text-center'><img src='../staff/".$row['image']."'width='70px' height='70px'><br/>";
           
            echo"".$row['title']."</td>";
            echo"<td><a href='ourimage_gallery.php?del=$cid'><i class='icofont-trash'></i></a></td>";
            if($i%6==0)
            echo"</tr><tr>";
        }
    ?> 
     <?php
     if(isset($_GET['del'])) 
     {
         $sql="DELETE   FROM image_gallery where image_id='$_GET[del]';";
         
         if($conn->query($sql))
         {
             echo "<script>window.alert(' Deleted');
             window.location='ourimage_gallery.php';</script>";
         }
         else
         {
             echo "<div class='alert alert-danger'>Error In Query.$conn->error";
         }
    }
    ?>  
    </table>
    
                            
                        </div>
                    </div>
                </div>
                                </div>
        </div>
    </div>
<?php include 'footer.php';?>