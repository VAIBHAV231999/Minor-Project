
<?php include 'header.php'; ?> 
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">IQ TEST</h4>
                            <p class="card-category">Iq Test for Mental Retardation </p>
                        </div>
                        <div class="card-body">
                        <form action="" method="post" >
    
    <div class="row pt-3">
<div class="col-md-12">   
    <select type="text" name="type" class="form-control"> 
    <option>Perceptual-Motor</option>
    <option>Self Care </option>
     <option>Communication &amp; Socialisation</option>
     <option>Academic</option>
    <option>Occupational</option>
    </select>
        </div>  </div>      
<div class="row">
<div class="col-md-12">   
            <input type="text" name="question" placeholder="Type Your Question here ..." class="form-control"> 
    </div></div>         
<div class="row pt-3">
<div class="col-md-3">
             <button type="submit" class="btn btn-success" name="save">SAVE DEATAILS </button>
             </div>   

                            </div>
                            </form>
                            
    <?php
    if(isset($_POST['save'])) 
    {
     
         $sql="insert into questions(question,type) values('$_POST[question]','$_POST[type]');";
        if($conn->query($sql))
            echo"<div class='alert alert-success'>QUESTION SAVED SUCCESSFULLY </div>";
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