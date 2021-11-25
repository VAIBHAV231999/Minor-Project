
<?php include 'header.php'; ?> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">ACCOUNT DETAILS</h4>
                            <p class="card-category">account of Pingalwara</p>
                        </div>
                        <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
         <div class="row">
<div class="col-md-12">              
            <input type="tel" name="acc" placeholder="ACCOUNT NUMBER" class="form-control">
             </div></div>
<div class="row">
<div class="col-md-12">   
            <input type="text" name="bname" placeholder="BANK NAME" class="form-control"> 
    </div></div>
    <div class="row">
<div class="col-md-12">   
            <input type="text" name="code" placeholder="CODE" class="form-control"> 
        </div>  </div>           
<div class="row">
<div class="col-md-3">
             <button type="submit" class="btn btn-success" name="save">SAVE DEATAILS </button>
             </div>   

                            </div>
                            </form>
                            
    <?php
    if(isset($_POST['save'])) 
    {
     
         $sql="insert into account_detail(account_no,bank_name,code) values('$_POST[acc]','$_POST[bname]','$_POST[code]');";
        if($conn->query($sql))
            echo"<div class='alert alert-success'> DETAILS SAVED SUCCESSFULLY </div>";
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
<?php include 'footer.php';?>