
<?php include 'header.php'; ?>
<script src="../editor/ckeditor.js"></script>
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">PAGE</h4>
                            <p class="card-category">Pages of Pingalwara</p>
                        </div>
                        <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
         <div class="row">
<div class="col-md-12">   
            <input type="text" name="page" placeholder="PAGE_TITLE" class="form-control"> 
</div>
<div class="col-md-12">
             <textarea type="submit" name="con1" id="con1"placeholder="CONTENT1"class="form-control"></textarea></div>
<div class="col-md-12">
             <textarea type="submit" name="con2" id="con2"placeholder="CONTENT2"class="form-control"></textarea></div>

<div class="col-md-6">   
            <input type="file" name="img" class="form-control"> 
             </div></div>
<div class="row">
<div class="col-md-"2>
             <button type="submit" class="btn btn-success btn-block" name="save">SAVE</button>
    </div>  
<div class="col-md-2">
             <button type="reset" class="btn btn-success btn-block" name="reset">CLEAR </button>
    </div></div>
                           
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
         $sql="insert into page(page_title,content1,content2,featured_image) values('$_POST[page]','$_POST[con1]','$_POST[con2]','$filename');";
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
<script>CKEDITOR.replace(con1);CKEDITOR.replace(con2)</script>
<?php include 'footer.php';?>