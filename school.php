
<?php include 'header.php'; ?> 
<script src="../editor/ckeditor.js"></script>
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">SCHOOL</h4>
                            <p class="card-category">School's of Pingalwara</p>
                        </div>
                        <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
         <div class="row">
<div class="col-md-6">              
            <input type="text" name="scname" placeholder="SCHOOL NAME" class="form-control">
</div>

<div class="col-md-12">              
            <textarea class="form-control"name="abt"rows="5"  id="abt"placeholder="ABOUT"></textarea>
</div>
<div class="col-md-6">   
            <input type="file" name="img" class="form-control"> 
</div>


             
 <div class="col-md-6">              
            <input type="tel" name="ph" placeholder="CONTACT NUMBER" class="form-control">
</div>
<div class="col-md-6">              
            <input type="email" name="em" placeholder="EMAIL ID" class="form-control">
</div>

<div class="col-md-2">
             <button type="submit" class="btn btn-success btn-block" name="save">SAVE  </button>
             </div>   
<div class="col-md-2">
             <button type="reset" class="btn btn-success btn-block" name="reset">CLEAR </button>
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
      if($ext=="jpeg" or $ext="jpg" or $ext=="png")
      {
       if(move_uploaded_file($tmpname,$filename))
       {
         $sql="insert into school (school_name,about,image,phone,email) values('$_POST[scname]','$_POST[abt]','$filename','$_POST[ph]','$_POST[em]');";
        if($conn->query($sql))
            echo"<div class='alert alert-success'>  SAVED SUCCESSFULLY </div>";
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
          echo"<div class='alert alert-warning'> ONLY JPG,PNG,JPEG FILES ARE ALLOWED</div>";
      }
    }
    ?>
    
                            
                        </div>
                    </div>
                </div>
                                </div>
        </div>
    </div>
<script>CKEDITOR.replace(abt)</script>
<?php include 'footer.php';?>