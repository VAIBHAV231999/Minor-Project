<!DOCTYPE html>
<html lang="en">
<?php  session_start(); ?>
<?php  include 'db_c.php';?>
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="image/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> All India Pingalwara Charitable Society (Regd) Amritsar. </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/icofont.css" rel="stylesheet" />
</head>

<body>
    <div class="container-fluid" style='background:mediumpurple; color:white' >
        <div class="container">
<div class="row pt-3 pb-2" > 
    <div class="col-md-4"> <i class="icofont icofont-phone"> +91-183-2584713, +91-183-2584586</i> </div>
    <div class="col-md-4"><a href='https://www.facebook.com/pingalwara3' class="text-white text-decoration-none"><i class="icofont icofont-facebook icofont-primary"></i></a> &nbsp; &nbsp;  <a href='https://www.youtube.com/channel/UC-uHPN9Tq2cuhnMGD7ruSOg' class="text-white text-decoration-none"><i class="icofont icofont-youtube"></i></a>  &nbsp; &nbsp;  <a href='https://twitter.com/pingalwara' class="text-white text-decoration-none"><i class="icofont icofont-twitter"></i></a>  &nbsp; &nbsp;  <a href='donation.php' class="text-white  text-decoration-none "><i class="icofont icofont-dollar-true">DONATE NOW</i></a>  </div>
    <div class="col-md-4 text-right"> 
        <?php if(!isset($_SESSION['ad']) and !isset($_SESSION['mm']) ) { ?>
        <a class="text-white text-decoration-none" href="stafflogin.php"><i class="icofont icofont-login"> Staff Login </i></a> &nbsp; &nbsp; <a class="text-white text-decoration-none" href="adminlogin.php"><i class="icofont icofont-login"> Admin Login </i></a>
        <?php  }  else if(!isset($_SESSION['mm'])) {?>
       
        <a class="text-white text-decoration-none" href="stafflogin.php"><i class="icofont icofont-login"> Staff Login </i></a> &nbsp; &nbsp; <a class="text-white text-decoration-none" href="admin/dashboard.php"><i class="icofont icofont-login"> Admin Account </i></a> 
      <?php  }  else if(!isset($_SESSION['ad'])) {?>
      
        <a class="text-white text-decoration-none" href="staff/profile.php"><i class="icofont icofont-login"> Staff Account </i></a> &nbsp; &nbsp; <a class="text-white text-decoration-none" href="adminlogin.php"><i class="icofont icofont-login"> Admin Login </i></a> 
        <?php  } else {  ?>
        
            <a class="text-white text-decoration-none" href="staff/profile.php"><i class="icofont icofont-login"> Staff Account </i></a> &nbsp; &nbsp; <a class="text-white text-decoration-none" href="admin/dashboard.php"><i class="icofont icofont-login"> Admin Account </i></a> 
   
        <?php } ?>
    </div>
            </div></div></div>
<nav class="navbar navbar-expand-lg navbar-light bg-light pt-4 pb-4">
  <a class="navbar-brand" href="index.php"><b>PINGALWARA</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <?php
        $sql="SELECT * from page order by page_title ASC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   
            $pid=$row['page_id'];
            $title=$row['page_title'];
            
   echo "<a class='dropdown-item' href='page.php?pid=$pid'>".$title."</a>";
        } ?>
       
   <a class='dropdown-item' href='team.php'>Our Team </a>     
        </div>
      </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Our Branches
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <?php
        $sql="SELECT * from branches order by branch ASC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   
            $bid=$row['branch_id'];
            $title=$row['branch'];
            
   echo "<a class='dropdown-item' href='branch.php?bid=$bid'>".$title."</a>";
        } ?>
           </div>
      </li>
        
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Education
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <?php
        $sql="SELECT * from school order by school_name ASC;";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {   
            $sid=$row['school_id'];
            $school_name=$row['school_name'];
            
   echo "<a class='dropdown-item' href='school.php?sid=$sid'>".$school_name."</a>";
        } ?>
           </div>
      </li>
        
        
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Awareness
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="article.php">Articles</a>
          <a class="dropdown-item" href="events.php">Events</a>
          <a class="dropdown-item" href="e_book.php">E-Books</a>
            
        </div>
          
      </li>
        
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Get Involved
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="donation.php">Donation </a>
          <a class="dropdown-item" href="volunteer.php">Volunter</a>
          <a class="dropdown-item" href="job.php">We're Hiring</a>
            
        </div>
          
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Video
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                   <a class="dropdown-item" href="video.php?tag=Documentary">Documentary </a>
                    <a class="dropdown-item" href="video.php?tag=Celebration">Celebration </a>
            <a class="dropdown-item" href="video.php?tag=Stories of Pinaglwara">Stories of Pinaglwara </a>
            <a class="dropdown-item" href="video.php?tag=Dr Inderjeet Kaur">Dr Inderjeet Kaur </a>
            <a class="dropdown-item" href="video.php?tag=Other">Other </a>
            <a class="dropdown-item" href="video.php">All </a>
        </div>
      </li>    
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Gallery
          </a>  
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="gallery.php?tag=Memories of Bhagat Ji" >Memories of Bhagat Ji</a>
            <a class="dropdown-item" href="gallery.php?tag=Dr Inderjeet Kaur">Dr Inderjeet Kaur </a>
            <a class="dropdown-item" href="gallery.php?tag=Natural Farming">Natural Farming  </a>
            <a class="dropdown-item" href="gallery.php?tag=Patients">Patients </a>
             <a class="dropdown-item" href="gallery.php?tag=Visitors">Visitors </a>
             <a class="dropdown-item" href="gallery.php?tag=Overseas Activity">Overseas Activity </a>
            <a class="dropdown-item" href="gallery.php?tag=Other">Other </a>
        </div>  
          </li>
        <li class="nav-item">
        <a class="nav-link" href="contact_us.php">Contact Us</a>
          </li>
        
    </ul>
  </div>
</nav>
</body>
    
    
    