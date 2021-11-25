
<?php include 'header.php'; ?> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">SCHOOL GALLERY</h4>
                            <p class="card-category">School Images </p>
                        </div>
                        <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
         <div class="row">
<div class="col-md-4">              
            <input type="text" name="title" placeholder="TITLE" class="form-control">
</div>
<div class="col-md-5">   
            <input type="file" name="img" class="form-control"> 
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
         $sql="insert into gallery (title,image,post_id,post_type) values('$_POST[title]','$filename','$_GET[id]','school');";
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
        $sql="SELECT * from gallery where post_id='$_GET[id]' and post_type='school' order by title ASC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   $i++;
            $cid=$row['id'];
         $pid=$_GET['id'];
            
           echo"<td class='text-center'><img src='".$row['image']."'width='70px' height='70px'><br/>";
           
            echo"".$row['title']."</td>";
            echo"<td><a href='school_gallery.php?del=$cid&id=$pid'><i class='icofont-trash'></i></a></td>";
            if($i%6==0)
            echo"</tr><tr>";
        }
    ?> 
     <?php
     if(isset($_GET['del'])) 
     {
                  $pid=$_GET['id'];
         $sql="DELETE   FROM gallery where id='$_GET[del]';";
         
         if($conn->query($sql))
         {
             echo "<script>window.alert(' Deleted');
             window.location='school_gallery.php?id=$pid';</script>";
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