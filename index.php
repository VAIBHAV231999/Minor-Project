<?php include 'header.php' ?>


<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/main.png" class="d-block w-100" alt="..." height="450">
    </div>
    <div class="carousel-item">
      <img src="image/slide6.jpg" class="d-block w-100" alt="..." height="450">
    </div>
    <div class="carousel-item">
      <img src="image/slide1.jpg" class="d-block w-100" alt="..." height="450">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container-fluid pt-5 pb-5 bg-light" > 
<div class="container">
  <div class="row">
        <div class="col-md-12 text-center">
            <h3  style='color:mediumpurple;font-family:serif; letter-spacing:2px;font-variant:small-caps' >All India Pingalwara Charitable Society (Regd) Amritsar.</h3><br/>
            <p> Pingalwara means a home for the disabled, handicapped or
crippled. The residents of Pingalwara in addition to being disabled,
handicapped and crippled people, also include persons suffering from
incurable and terminal diseases, old people, young and healthy males,
females and children. Almost all the residents are destitute and
most of them are going to spend their entire life in Pingalwara.
            </p>
            
<p>The concept of Pingalwara started forming in Bhagatji’s mind
when the Almighty entrusted him with the care of an abandoned
spastic child in front of Gurdwara Dehra Sahib (in Lahore, Pakistan)
in 1934. For 14 long years, Bhagatji carried the child on his back as
the child was completely helpless and there was no one else to look
after him.</p>
            
            
      </div></div></div></div>    
<div class="container-fluid pt-5 pb-5"> 
<div class="container">
  <div class="row">
        <div class="col-md-6">
    <div class="card">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="image/icon.png" class="card-img" height="240">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Founder of Pingalwara</h5>
        <p class="card-text text-justify" > Bhagat Puran Singh, a selfless and dedicated Sikh.
            Though he never finished his basic schooling, he became a writer, a publisher, an environmentalist, and a philanthropist.</p>
          <small><a href='page.php?pid=2' class="text-muted text-decoration-none">Read More</a></small>
      </div>
      </div>
      </div> </div></div>
        <div class="col-md-6">
    <div class="card">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="image/president.jpg" class="card-img" height="240">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">President of Pingalwara</h5>
        <p class="card-text text-justify">Dr. (Ms.) Inderjit kaur is the patron-president of All India Pingalwara Charitable Society , Amritsar since 1992.Dr. Kaur obtained M.B.B.S. degree from govt. medical college, patiala .</p>
          <small><a href='page.php?pid=3' class="text-muted text-decoration-none">Read More</a></small>
      </div>
    </div>
  </div>
</div>
    </div>
</div>
    </div>
    </div>

<br/>
<div class="container-fluid px-0"style='background:url(image/vol.png); background-repeat:no-repeat; background-size:cover; color:white' > 
<div class="pt-5" style="background:rgba(0,0,0,0.7)">
<div class="container text-center pt-2 pb-5">
    <h3 >Volunteer Program </h3>
    <p> Volunteers are the backbone of Pingalwara Society UK. They make it possible to get assistance to those who need it most quickly and efficiently. Volunteers assist every day by performing integral administrative duties, offering expertise for special projects and by helping at fundraising events. Please email us if your intrested in supporting us at our events.</p>
    <h5 class="pb-3 ">Are you looking for a cause to support? </h5>
    <a   href="volunteer.php" class="btn btn-primary btn-8"> Join As Volunteer</a>
    
    </div></div></div> 
<div class="container-fluid pt-5 pb-5 bg-light"> 
<div class="container">
    <h3 class="text-center" style='color:mediumpurple;font-family:serif; letter-spacing:2px;font-variant:small-caps'>Recent Activities </h3>
        <div class="row pt-4">

  <?php
$result=$conn->query("SELECT * from activity order by activity_date DESC limit 3 ;");
while($row=$result->fetch_assoc()){
    $aid=$row['activity_id'];
 ?>
<div class="col-md-4 text-center"><div class="bg-light border">
    <img src="staff/<?php echo $row['image'];?>" height="250" width="100%"> 
        
        <h4 class="pt-2"> <?php echo $row['activity'];?> </h4>
        
       
       <p class="p-2 text-justify"> <?php echo substr( strip_tags($row['description']),0,300);?>... 
       <?php  echo"<a href='fullevent.php?id=$aid' style='color:mediumpurple; text-decoration:none;'>Read More</a>"; ?></p>
    </div></div>
<?php }  ?>
    </div></div></div>

<br/>
<div class="container-fluid px-0"style='background:url(image/job.png); background-repeat:no-repeat; background-size:cover; color:white' > 
<div class="pt-5" style="background:rgba(0,0,0,0.7)">
<div class="container text-center pt-2 pb-5">
    <h3 >We're Hiring </h3>
    <p> There is no way around it: hiring takes work.<br/> If you are willing to put in the work, you will be rewarded with an employee or team of PINGALWARA that works for you and propels your vision.</p>
    <h5 class="pb-3 ">Are you looking for a Job? </h5>
    <a   href="job.php" class="btn btn-primary btn-8"> Join As Employee </a>
    
    </div></div></div>  



 
<div class="container-fluid pt-5"> 
<div class="container ">
    <h3 class="text-center" style='color:mediumpurple;font-family:serif; letter-spacing:2px;font-variant:small-caps'>Video Gallery</h3>
        <div class="row">

  <?php
   
    
$result=$conn->query("SELECT * from video_gallery limit 6;");
while($row=$result->fetch_assoc()){
 ?>
<div class="col-md-4 pt-3 text-center">



<iframe width="100%" height="220" src="<?php echo $row['video'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
            </div>
<?php }  ?>
    </div>
</div>
</div>

<br/>
<div class="container-fluid px-0"style='background:url(image/sc7.jpg); background-repeat:no-repeat; background-size:cover; color:white' > 
<div class="pt-5" style="background:rgba(0,0,0,0.7)">
<div class="container text-center pt-2 pb-5">
    <h3 >Admission Program </h3>
    <p> School is VERY Important. I am sure you have probably heard every grown-up in your life tell you. But the honest truth is that schooling is an absolute fundamental step to a successful life. We sometimes take school and classes for granted. But we forget that by going to school you get a compressed crash course on the collective knowledge of mankind.</p>
    <h5 class="pb-3 ">Are you looking for a School to Study? &nbsp; We provide Free Education and much more Facilities.</h5>
    <a   href="admission.php?sid=5" class="btn btn-primary btn-8"> Join As Student</a>
    
    </div></div></div>  

   

<div class="container pt-5 pb-5 text-center"> 
    <h3 class="text-center" style='color:mediumpurple;font-family:serif; letter-spacing:2px;font-variant:small-caps'> Get In Touch </h3> 
<div class="row pt-4">
<div class="col-md-4 pt-4 pb-4 ">
<h6 class='pb-2'style='color:mediumpurple;'> ADDRESS  </h6>
<p>All India Pingalwara Charitable Society,
G T Road, Amritsar – 143001 Punjab,India </p>

</div>
<div class="col-md-4 pt-4 pb-4 border-left border-right">
<h6 class='pb-2' style='color:mediumpurple;'> PHONE NUMBER  </h6>
<p>+91-183-2584713<br/>
+91-183-2584586 </p>

</div>
<div class="col-md-4 pt-4 pb-4">
<h6 class='pb-2'style='color:mediumpurple;'> EMAIL  </h6>
<p>pingalwara57@gmail.com</p>

</div>
    </div></div>
<?php include 'footer.php' ?>