
<?php include 'header.php'; ?> 
<script src="../editor/ckeditor.js"></script>
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">MEMBER</h4>
                            <p class="card-category">Member of Pingalwara</p>
                        </div>
                        <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
         <div class="row">
<div class="col-md-6">              
            <input type="text" name="fname" placeholder="FULL NAME" class="form-control">
</div>
<div class="col-md-6">   
            <input type="file" name="img" class="form-control"> 
</div>
 <div class="col-md-6"> 
    <input type="tel" name="con" class="form-control" placeholder="CONTACT NUMBER">
             </div>
<div class="col-md-6"> 
    
    <input type="email" name="em" class="form-control" placeholder="EMAIL">
             </div>

             
<div class="col-md-12">              
            <textarea class="form-control"name="abt"rows="5" id="abt"placeholder="ABOUT"></textarea>
</div>

<div class="col-md-2">
             <button type="submit" class="btn btn-success btn-block" name="save">SAVE  </button>
             </div>   
<div class="col-md-2">
             <button type="reset" class="btn btn-success" name="reset">CLEAR </button>
             </div>
                            </div>
                            </form>
                            
    <?php
    if(isset($_POST['save'])) 
    {
      $pwd="ABCDEFGHIJKLMNOPQRSTUVWXYZO123456789abcdefghijklmnopqrstuvwxyz";
      $pwd=str_shuffle($pwd);
      $pwd=substr($pwd,0,6);
      
      $dirname="uploadimg/";
      $tmpname=$_FILES['img'] ['tmp_name'];  
      $filename=$dirname.$_FILES['img']['name'];
        
      $ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
      if($ext=="jpeg" or $ext="jpg" or $ext=="png")
      {
       if(move_uploaded_file($tmpname,$filename))
       {
           
           
         $sql="insert into members (full_name,image,about,email,contact,password) values('$_POST[fname]','$filename','$_POST[abt]','$_POST[em]','$_POST[con]','$pwd');";
        if($conn->query($sql))
            echo"<div class='alert alert-success'> MEMBER SAVED SUCCESSFULLY </div>";
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