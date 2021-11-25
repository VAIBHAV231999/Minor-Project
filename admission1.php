<?php include 'header.php' ?>

<div class="container pt-5 pb-5">
    <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="text-center">
        <h4> Admission Form </h4><sup style="color:green">____________</sup>
        <h5> BHAGAT PURAN SINGH DEAF SCHOOL.</h5>
        </div>
        <p>Please Fill the  Information of the Child. </p>
        <form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        
        <div class="col-md-6 pt-3"><input type="text"  class="form-control" name="cls" placeholder="CLASS NAME" required="required"/></div>
        
        <div class="col-md-6 pt-3"><input type="file"  class="form-control" name="img" required="required"/></div>
        
        <div class="col-md-6 pt-3"><input type="text"  class="form-control" name="fn" placeholder="FIRST NAME" required="required"/></div>
        <div class="col-md-6 pt-3"><input type="text"  class="form-control" name="ln" placeholder="LAST NAME" required="required"/></div>
        
        <div class="col-md-6 pt-3"><input type="text"  class="form-control" name="mother" placeholder="MOTHER NAME" required="required"/></div>
        <div class="col-md-6 pt-3"><input type="text"  class="form-control" name="father" placeholder="FATHER NAME" required="required"/></div>
    
        
        <div class="col-md-6 pt-3"> <select name="gen" class="form-control" required><option disabled selected >Gender</option><option>MALE</option><option>FEMALE</option><option>TRANSGENDER</option></select></div> 
        <div class="col-md-6 pt-3"> <input type="date"  class="form-control" name="dob"  required="required"/></div>
        
        <div class="col-md-12 pt-3"><input type="address"  class="form-control"  class="form-control" name="add" placeholder="Address Line" required /></div>    
        
        <div class="col-md-6 pt-3"><input  type="text"  class="form-control" name="city" required placeholder="CITY" /></div>
        <div class="col-md-6 pt-3"><input type="text"   class="form-control" name="pin" placeholder="PIN CODE" required /></div>
        
        
        <div class="col-md-6 pt-3"> <input type="email"  class="form-control" name="em" placeholder="Your Email" required="required"/></div> 
        <div class="col-md-6 pt-3"> <input type="text"  class="form-control" name="cn" placeholder="Your Contact Number" required="required"/></div>
        
        <div class="col-md-12 pt-3"><input type="text"  class="form-control" name="aid" placeholder="AADHAR NUMBER(UIDAI)" required="required"/></div>
        
                
        <div class="col-md-6 pt-3"><input type="text"  class="form-control" name="rel" placeholder="RELIGION" required="required"/></div>
        <div class="col-md-6 pt-3"><input type="text"  class="form-control" name="cas" placeholder="CAST" required="required"/></div>
        
        
        
        <div class="col-md-6 pt-3"><input type="text"  class="form-control" name="occ" placeholder="FATHER OCCUPATION" required="required"/></div>
        <div class="col-md-6 pt-3"><input type="number"  min="1000" max="50000"class="form-control" name="sal" placeholder="SALARY(Per Month)" required="required"/></div>
        
        
        <div class="col-md-12 pt-3"><input type="text"  class="form-control"  name="sn" placeholder="School Name(Where You Study Before)" required="required" /></div>   
        
       <div class="col-md-12 pt-3"><p> <input type="checkbox" required> 
            I hereby declare that the information given in this application is true and
correct to the best of my knowledge and belief. In case any information
given in this application proves to be false or incorrect, I'll be
responsible for the consequences.  </p>
<p> <input type="checkbox" required> I Agree to abide by the rules  and regulations of the School. </p>           
           
        </div>
        
        <div class="col-md-4 pt-4">
        <button type="submit" name="save" class="btn btn-outline-success btn-block rounded-0 "> SUBMIT </button> </div>
        <div class="col-md-4 pt-4"> <button type="reset" name="save" class="btn btn-outline-success btn-block rounded-0 "> CLEAR </button>
       
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
           
        $sql="insert into admission1 (class_name,first_name,last_name,mother_name,father_name,gender,dob,email,contact_number,address_line,city,pin,father_occ,salary,religion,cast,aadhar_num,school_name,img) values('$_POST[cls]','$_POST[fn]','$_POST[ln]','$_POST[mother]','$_POST[father]','$_POST[gen]','$_POST[dob]','$_POST[em]','$_POST[cn]','$_POST[add]','$_POST[city]','$_POST[pin]','$_POST[occ]','$_POST[sal]','$_POST[rel]','$_POST[cas]','$_POST[aid]','$_POST[sn]','$filename');";
        if($conn->query($sql))
            echo"<div class='alert alert-success'> DATA SAVED SUCCESSFULLY </div>";
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
      
   
    
    </div></div>
</div>
<?php include 'footer.php' ?>