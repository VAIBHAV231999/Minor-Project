
<?php include 'header.php'; ?> 
<script src="../editor/ckeditor.js"></script>
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">ARTICLES</h4>
                            <p class="card-category">Articles of Pingalwara</p>
                        </div>
                        <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
         <div class="row">
<div class="col-md-12">              
            <input type="text" name="aname" placeholder="ARTICLE NAME" class="form-control">
</div>
<div class="col-md-6">   
            <input type="file" name="img" class="form-control"> 
</div>
             

<div class="col-md-12">              
            <textarea class="form-control"name="des"rows="5" id="des" placeholder="DESCRIPTION"></textarea>
</div>

<div class="col-md-2">
             <button type="submit" class="btn btn-success" name="save">SAVE ARTICLE </button>
             </div>  
<div class="col-md-2">
             <button type="reset" class="btn btn-success" name="reset">CLEAR </button>
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
         $sql="insert into article (article,image,description) values('$_POST[aname]','$filename','$_POST[des]');";
        if($conn->query($sql))
            echo"<div class='alert alert-success'> ARTICLES SAVED SUCCESSFULLY </div>";
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
<script>CKEDITOR.replace(des)</script>
<?php include 'footer.php';?>