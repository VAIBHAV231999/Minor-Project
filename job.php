<?php include 'header.php' ?>


<div class="container-fluid px-0"style='background:url(image/main12.png); background-repeat:no-repeat; background-size:cover; color:mediumpurple' > 
<div class="pt-5 pb-5 text-center" style="background:rgba(0,0,0,0.8)">
<h2 class="pt-5 pb-5 " style='font-family:serif'> Employee Hiring Program </h2>
    
    </div></div>

<div class="container pt-5 pb-5">
    <div class="row">
         <div class="col-md-4">
        <h4>We're Hiring.. </h4> <br/>
        <h6>The best way to find yourself is to lose yourself in the service of others.</h6>
            <p >Are you looking for a cause to Work in Pingalwara ?</p> 
           <p class="text-justify"> Hiring the right people takes time, the right questions and a healthy dose of curiosity. What do you think is the most important factor when building your team? For us, it’s personality.</p>
          <p class="text-justify">  <b>For the employees</b>, our program offers a wide range of experiences from unique friendships and life enriching cross-cultural encounters to work experience rarely available in the outside world.</p>
            <img src="../PINGALWARA/image/job.png" height="300" width="85%">
        </div>

    <div class="col-md-8">
        <h4> Join As Employee </h4><sup style="color:green">____________</sup>
        <p>Tell Us about your joining interest with Pingalwara. We will get back to you!</p>
        <form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <h6>*Upload your resume here*</h6>
        <div class="col-md-6 pt-3"><input type="file" pattern="[A-Za-z]{2,30}"   class="form-control" placeholder="RESUME" name="res"  ></div>       
        <div class="col-md-6 pt-3"><input type="text"  class="form-control" name="fn" placeholder="FIRST NAME" required="required"/></div>
        <div class="col-md-6 pt-3"><input type="text"  class="form-control" name="ln" placeholder="LAST NAME" required="required"/></div>
        
        <div class="col-md-6 pt-3"> <input type="email"  class="form-control" name="em" placeholder="Your Email" required="required"/></div> 
        <div class="col-md-6 pt-3"> <input type="text"  class="form-control" name="cn" placeholder="Your Contact Number" required="required"/></div>
        
        <div class="col-md-6 pt-3"> <select name="gen" class="form-control" required><option disabled selected >Gender</option><option>MALE</option><option>FEMALE</option><option>TRANSGENDER</option></select></div> 
        <div class="col-md-6 pt-3"> <input type="date"  class="form-control" name="dob"  required="required"/></div>
        
        
        
        
             
        <div class="col-md-6 pt-3"><input  type="text"  class="form-control" name="nat" placeholder="NATIONALITY" /></div>
        <div class="col-md-6 pt-3"><input  type="text" required  class="form-control" name="city" placeholder="CITY" /></div>
        
        <div class="col-md-12 pt-3"><input type="address"  class="form-control"  class="form-control" name="add" placeholder="Address Line" required /></div>       
        
        
        <div class="col-md-6 pt-3"> <select name="pos" class="form-control"  required><option disabled selected >Position to Apply</option><option>Computer Operator</option><option>Teacher</option><option>Accountant</option><option>Receptionist</option><option>Accountant</option><option>Driver</option><option>Special Educator</option><option>Physiotherapist</option><option>Doctor</option><option>Nurse</option><option>Prosthetic</option><option>Lab Technician</option><option>Dentist</option><option>Homeopathy Doctor</option></select></div> 
        
        <div class="col-md-6 pt-3"> <select name="epos" class="form-control" required><option disabled selected >Current Employement Status</option><option>Employed</option><option>Self-employed</option><option>Unemployed</option><option>Student</option></select></div>
        
      <div class="col-md-12 pt-3"> <textarea name="res" rows="4"class="form-control"> WHY YOU WANT TO JOIN??</textarea>  </div> 
        
      <div class="col-md-12 pt-3"> <textarea rows="4" name="msg" class="form-control"> TELL ABOUT YOURSELF</textarea>  </div> 
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
      $tmpname=$_FILES['res'] ['tmp_name'];  
      $filename=$dirname.$_FILES['res']['name'];
        
      $ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
      if($ext=="pdf")
      {
       if(move_uploaded_file($tmpname,$filename))
       {
           $add=addslashes($_POST['add']);
        $sql="insert into job (first_name,last_name,email,contact,address,city,reason,about,gender,dob,nationality,res,position,eposition) values('$_POST[fn]','$_POST[ln]','$_POST[em]','$_POST[cn]','$add','$_POST[city]','$_POST[res]','$_POST[msg]','$_POST[gen]','$_POST[dob]','$_POST[nat]','$filename','$_POST[pos]','$_POST[epos]');";
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
          echo"<div class='alert alert-warning'> ONLY PDF FILES ARE ALLOWED</div>";
      }
    }
      
     
    
    ?>
      
   
    
    </div></div>
</div>
<?php include 'footer.php' ?>