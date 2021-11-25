
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
                        <form action="" method="post" enctype="multipart/form-data">
         <div class="row">
<div class="col-md-4">              
            <input type="text" name="title" placeholder="TITLE" class="form-control">
</div>
<div class="col-md-3">   
            <input type="file" name="img" class="form-control"> 
</div>
<div class="col-md-3">
    <select name="tag" class="form-control" >
    <option>Memories of Bhagat Ji</option>
    <option>Dr Inderjeet Kaur</option>
    <option>Natural Farming </option>
    <option>Patients</option>
    <option>Visitors </option>
    <option>Overseas Activity </option>
    <option>Other</option>
    </select>
             </div>

<div class="col-md-1">
             <button type="submit" class="btn btn-success" name="save"> Upload</button>
             </div>   

                            </div>
                            </form>
                            
    <?php
    if(isset($_POST['save'])) 
    {
      $dirname="uploadimg/";
      $tmpname=$_FILES['img'] ['tmp_name'];  
      $filename=$dirname.$_FILES['img']['name'];
        
      $ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
      if($ext=="jpg" or $ext=="jpeg" or $ext=="png")
      {
       if(move_uploaded_file($tmpname,$filename))
       {
         $sql="insert into image_gallery (title,image,tag) values('$_POST[title]','$filename','$_POST[tag]');";
        if($conn->query($sql))
            echo"<div class='alert alert-success'> IMAGE SAVED SUCCESSFULLY </div>";
        else
            echo"<div class='alert alert-warning'> ERROR IN QUERY ".$conn->error." </div>";
       }
        else
        {
            echo"<div class='alert alert-warning'> ERROR IN UPLOADING</div>";
        }
      }
      else
      {
          echo"<div class='alert alert-warning'> ONLY JPEG,JPG,PNG FILES ARE ALLOWED</div>";
      }
    }
    ?>
    
                            
                        </div>
                    </div>
                    
        <div class="card">
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
            
           echo"<td class='text-center'><img src='".$row['image']."'width='70px' height='70px'><br/>";
           
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