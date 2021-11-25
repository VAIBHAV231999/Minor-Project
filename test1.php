<?php include 'header.php' ?>

<div class="container pt-5 pb-5">
    <div class="row">
    <div class="col-md-12">
            <hr/>
        <h5 class="text-center" style="color:mediumpurple"> MENTAL ABILITY TEST FOR MENTAL RETARDATION </h5>
        <hr/>
    <p style="font-size:large; text-align:justify"> About 75–80 percent of mental retardation is familial (runs in families), and 20–25 percent is due to organic problems, such as chromosomal abnormalities or brain damage. Mild to severe mental retardation is a symptom of several hundred single-gene disorders and many chromosomal abnormalities, including small deletions. Based on twin studies, moderate to severe mental retardation does not appear to be familial, but mild mental retardation does. That is, the relatives of the moderate to severely mentally retarded have normal ranges of IQs, whereas the families of the mildly mentally retarded have IQs skewing lower.
</p>
  
        <p>Please Fill the  Information of the Child. </p>
        <form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        
       
        
        <div class="col-md-6 pt-3"><input type="text"  class="form-control" name="fn" placeholder="FIRST NAME" required="required"/></div>
        <div class="col-md-6 pt-3"><input type="text"  class="form-control" name="ln" placeholder="LAST NAME" required="required"/></div>
        
       
        
        <div class="col-md-6 pt-3"> <select name="gen" class="form-control" required><option disabled selected >Gender</option><option>MALE</option><option>FEMALE</option><option>TRANSGENDER</option></select></div> 
        <div class="col-md-6 pt-3"> <input type="date"  class="form-control" name="dob"  required="required"/></div>
        
        <div class="col-md-12 pt-3"><input type="address"  class="form-control"  class="form-control" name="add" placeholder="Address Line" required /></div>    
        
        <div class="col-md-6 pt-3"><input  type="text"  class="form-control" name="city" required placeholder="CITY" /></div>
        <div class="col-md-6 pt-3"><input type="text"   class="form-control" name="pin" placeholder="PIN CODE" required /></div>
        
        
        <div class="col-md-6 pt-3"> <input type="email"  class="form-control" name="em" placeholder="Your Email" required="required"/></div> 
        <div class="col-md-6 pt-3"> <input type="text"  class="form-control" name="cn" placeholder="Your Contact Number" required="required"/></div>
        
             
        <div class="col-md-4 pt-4">
        <button type="submit" name="save" class="btn btn-outline-success btn-block rounded-0 "> SUBMIT & Procced </button> </div>
        <div class="col-md-4 pt-4"> <button type="reset" name="save" class="btn btn-outline-success btn-block rounded-0 "> CLEAR </button>
       
        </div>
    </div>
        </form>
         <?php
    if(isset($_POST['save'])) 
   {
        
        $sql="insert into iqtest (first_name,last_name,gender,dob,email,contact_number,address_line,city,pin) values('$_POST[fn]','$_POST[ln]','$_POST[gen]','$_POST[dob]','$_POST[em]','$_POST[cn]','$_POST[add]','$_POST[city]','$_POST[pin]');";
           
        if($conn->query($sql)){
            $rec=$conn->insert_id;
            echo"<script>window.location='question.php?formid=$rec'</script>";
            
        }
        else
            echo"<div class='alert alert-warning'> ERROR IN QUERY ".$conn->error." </div>";
   }
           
      
     
    
    ?>
      
   
    
    </div></div>
</div>
<?php include 'footer.php' ?>