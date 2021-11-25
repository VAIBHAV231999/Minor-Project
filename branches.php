
<?php include 'header.php'; ?> 
<script src="../editor/ckeditor.js"></script>
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">BRANCH</h4>
                            <p class="card-category">Branches of Pingalwara</p>
                        </div>
                        <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
         <div class="row">
<div class="col-md-8">              
            <input type="text" name="brname" placeholder="BRANCH NAME" class="form-control">
             </div></div>
   <div class="row">       

<div class="col-md-12">              
            <textarea class="form-control"name="over"rows="4" id="over" placeholder="OVERVIEW"></textarea>
</div>
       
<div class="col-md-2">
             <button type="submit" class="btn btn-success btn-block" name="save">SAVE</button>
             </div>   
<div class="col-md-2">
             <button type="reset" class="btn btn-success" name="reset">CLEAR </button>
             </div>
                            </div>
                            </form>
                            
    <?php
    if(isset($_POST['save'])) 
       {
         $sql="insert into branches (branch,overview)
         values('$_POST[brname]','$_POST[over]');";
        if($conn->query($sql))
            echo"<div class='alert alert-success'> BRANCH SAVED SUCCESSFULLY </div>";
        else
            echo"<div class='alert alert-warning'> ERROR IN QUERY ".$conn->error." </div>";
       }
        
      
     
    
    ?>
    
                            
                        </div>
                    </div>
                </div>
                                </div>
        </div>
    </div>
<script>CKEDITOR.replace('over');</script>
<?php include 'footer.php';?>